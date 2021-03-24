<?php
namespace Biblio\Entity\Actor;

use Biblio\Entity\AbstractActor;

class Author extends AbstractActor {
    
    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $birthDay;

    /**
     * @var string|null
     */
    private $nationality;

    public function getLastName(){
        return $this->lastName;
    }

    /**
     * Set lastName.
     *
     * @param string|null $name
     *
     * @return Author
     */
    public function setLastName($lastName){
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string|null $name
     *
     * @return Author
     */
    public function setFirstName($firstName){
        $this->firstName = $firstName;

        return $this;
    }

    public function getBirthDay(){
        return $this->birthDay;
    }

    /**
     * Set lastName.
     *
     * @param string|null $name
     *
     * @return Author
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;

        return $this;
    } 

    public function getNationality(){
        return $this->nationality;
    }

    /**
     * Set lastName.
     *
     * @param string|null $name
     *
     * @return Author
     */
    public function setNationality($nationality){
        $this->nationality = $nationality;

        return $this;
    }

}