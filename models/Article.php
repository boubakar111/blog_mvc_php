<?php


class Article
{
    private $_id;
    private $_categoryName;
    private $_description;
    private $_postingDate;
    private $_updateDate;
    private $_isActive;

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
        $id = (int)$id;
        if ($id > 0) {
            $this->_id = $id;
        }

    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->_categoryName;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->_categoryName = $categoryName;
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
    public function getUpdateDate()
    {
        return $this->_updateDate;
    }

    /**
     * @param mixed $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->_updateDate = $updateDate;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->_isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->_isActive = $isActive;
    }


}