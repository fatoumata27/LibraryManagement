<?php 
namespace Biblio\Entity;

class AbstractActor {
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;
    
    /* 
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $zipcode;

    /**
     * @var string|null
     */
    private $streetNumber;
    
    /**
     * @var string|null
     */
    private $streetType;
    
    /**
     * @var string|null
     */
    private $streetName;

     /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
    * @return \DateTime
    */
    public function getCreatedAt(){
        return $this->createdAt;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return AbstractActor
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
    * Get updatedAt
    * 
    * @return \DateTime|null
    */
    public function getUpdatedAt(){
        return $this->updatedAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return AbstractActor
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(){
        return $this->city;
    }

    /**
     * Set City.
     *
     * @param string $city
     *
     * @return AbstractActor
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(){
        return $this->zipcode;
    }

    /**
     * Set zipCode.
     *
     * @param string $zipCode
     *
     * @return AbstractActor
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getStreetNumber(){
        return $this->streetNumber;
    }

    /**
     * Set StreetNumber.
     *
     * @param string $streetNumber
     *
     * @return AbstractActor
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetType(){
        return $this->streetType;

    }

    /**
     * Set City.
     *
     * @param string $streetType
     *
     * @return AbstractActor
     */
    public function setStreetType($streetType)
    {
        $this->streetType = $streetType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetName() {
        return $this->streetName;
    }

    /**
     * Set StreetName.
     *
     * @param string $streetName
     *
     * @return AbstractActor
     */
    public function setStreetName($strretName)
    {
        $this->streetName = $strretName;

        return $this;
    }

}