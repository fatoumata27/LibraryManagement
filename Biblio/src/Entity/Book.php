<?php

namespace Biblio\Entity;

class Book {

    /**
     * @var int
     */
    private $isbn;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $years;

     /**
     * @var \DateTime
     */
    private $dateBuy;

     /**
     * @var \DateTime
     */
    private $dateOfPublished;

    /**
     * @var string
     */
    private $pictureBooks;


    /**
     * Get isbn.
     *
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->isbn;
    }


    /**
     * Set language.
     *
     * @param string|null $name
     *
     * @return string
     */
    public function setLanguage($language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language.
     *
     * @return string|null
     */
    public function getlanguage()
    {
        return $this->language;
    }


    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return string
     */
    public function setYears($years = null)
    {
        $this->years = $years;

        return $this;
    }

    /**
     * Get years.
     *
     * @return string|null
     */
    public function getYears()
    {
        return $this->name;
    }


    /**
     * Set dateBuy.
     *
     * @param \DateTime $dateBuy
     *
     * @return \DateTime
     */
    public function setDateBuy($dateBuy = null)
    {
        $this->dateBuy = $dateBuy;

        return $this;
    }

    /**
     * Get dateBuy.
     *
     * @return \DateTime
     */
    public function getDateBuy()
    {
        return $this->dateBuy;
    }

    /**
     * Set dateOfPublished.
     *
     * @param \DateTime $dateOfPublished
     *
     * @return \DateTime
     */
    public function setDateOfPublished($dateOfPublished = null)
    {
        $this->dateOfPublished = $dateOfPublished;

        return $this;
    }

    /**
     * Get dateOfPublished.
     *
     * @return \DateTime
     */
    public function getDateOfPublished()
    {
        return $this->dateOfPublished;
    }

    /**
     * Set pictureBooks.
     *
     * @param string|null $pictureBooks
     *
     * @return string
     */
    public function setPictureBooks($pictureBooks = null)
    {
        $this->pictureBooks = $pictureBooks;

        return $this;
    }

    /**
     * Get pictureBooks.
     *
     * @return string|null
     */
    public function getPictureBooks()
    {
        return $this->pictureBooks;
    }
}