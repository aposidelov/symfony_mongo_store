<?php


namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Types\Type as Type;

#[MongoDB\Document(db: "mydb", collection: "stores")]
class Store
{
    #[MongoDB\Id]
    private $id;

    #[MongoDB\Field(type: Type::STRING)]
    private $name;

    #[MongoDB\Field(type: Type::STRING)]
    private $description;

    #[MongoDB\Field(type: Type::INT)]
    private $employees;

    #[MongoDB\Field(type: Type::INT)]
    private $warehouses;

    #[MongoDB\Field(type: Type::BOOL)]
    private $nightWork;

    #[MongoDB\Field(type: Type::STRING)]
    private $openHours;

    #[MongoDB\Field(type: Type::STRING)]
    private $size;

    #[MongoDB\Field(type: Type::STRING)]
    private $address;

    #[MongoDB\Field(type: Type::FLOAT)]
    private $latitude;

    #[MongoDB\Field(type: Type::FLOAT)]
    private $longitude;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @param mixed $employees
     */
    public function setEmployees($employees): void
    {
        $this->employees = $employees;
    }

    /**
     * @return mixed
     */
    public function getWarehouses()
    {
        return $this->warehouses;
    }

    /**
     * @param mixed $warehouses
     */
    public function setWarehouses($warehouses): void
    {
        $this->warehouses = $warehouses;
    }

    /**
     * @return mixed
     */
    public function getNightWork()
    {
        return $this->nightWork;
    }

    /**
     * @param mixed $nightWork
     */
    public function setNightWork($nightWork): void
    {
        $this->nightWork = $nightWork;
    }

    /**
     * @return mixed
     */
    public function getOpenHours()
    {
        return $this->openHours;
    }

    /**
     * @param mixed $openHours
     */
    public function setOpenHours($openHours): void
    {
        $this->openHours = $openHours;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

}