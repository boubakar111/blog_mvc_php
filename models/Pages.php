<?php


class Pages
{
    private $_id;
    private $_pageName;
    private $_pageTitle;
    private $_description;
    private $_postingDate;
    private $_updationDate;

    public function __construct(array $data)
    {

        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $methode = 'set' . ucfirst($key);

            if (method_exists($this, $methode)) {
                $this->$methode($value);

            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getPageName()
    {
        return $this->_pageName;
    }

    /**
     * @param mixed $pageName
     */
    public function setPageName($pageName)
    {
        $this->_pageName = $pageName;
    }

    /**
     * @return mixed
     */
    public function getPageTitle()
    {
        return $this->_pageTitle;
    }

    /**
     * @param mixed $pageTitle
     */
    public function setPageTitle($pageTitle)
    {
        $this->_pageTitle = $pageTitle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getPostingDate()
    {
        return $this->_postingDate;
    }

    /**
     * @param mixed $postingDate
     */
    public function setPostingDate($postingDate)
    {
        $this->_postingDate = $postingDate;
    }

    /**
     * @return mixed
     */
    public function getUpdationDate()
    {
        return $this->_updationDate;
    }

    /**
     * @param mixed $updationDate
     */
    public function setUpdationDate($updationDate)
    {
        $this->_updationDate = $updationDate;
    }

}