<?php


namespace App\Controller;

use App\Document\Store;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class StoreController extends AbstractController
{
    #[Route('/store/add', name: 'store_add', methods: ['POST'])]
    public function add(Request $request, DocumentManager $documentManager): Response
    {
        $data = json_decode($request->getContent());
        $name = $data->name ?? '';
        $description = $data->description ?? '';
        $employees = $data->employees ?? 0;
        $warehouses = $data->warehouses ?? 0;
        $nightWork = $data->nightWork ?? FALSE;
        $openHours = $data->openHours ?? '';
        $size = $data->size ?? 'normal';
        $address = $data->address ?? '';
        $latitude = $data->latitude ?? 0;
        $longitude = $data->longitude ?? 0;
        $store = new Store();
        $store->setName($name);
        $store->setDescription($description);
        $store->setEmployees($employees);
        $store->setWarehouses($warehouses);
        $store->setNightWork($nightWork);
        $store->setOpenHours($openHours);
        $store->setSize($size);
        $store->setAddress($address);
        $store->setLatitude($latitude);
        $store->setLongitude($longitude);
        $documentManager->persist($store);
        $documentManager->flush();
        return $this->json('Store has been added: ' . $store->getId());
    }

    #[Route('/store/{id}/view', name: 'store_view', methods: ['GET'])]
    public function edit($id, DocumentManager $documentManager, SerializerInterface $serializer): Response
    {
        $store = $documentManager->getRepository(Store::class)->find($id);
        if (!$store) {
            throw $this->createNotFoundException('No store found for id ' . $id);
        }
        $store_json = $serializer->serialize($store, 'json');

        return new Response($store_json);
    }
}