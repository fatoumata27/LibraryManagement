<?php

namespace Biblio\Entity\Actor;

use Biblio\Entity\AbstractActor;

class Librarian extends AbstractActor {
    
    /**
     * @var string|null
     */
    private $name;

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return string
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
}