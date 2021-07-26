<?php


class Post
{
    private $_id;
    private $_postTitle;
    private $_subCategoryId;
    private $_postingdetails;
    private $_postingDate;
    private $_updationDate;
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
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getPostTitle()
    {
        return $this->_postTitle;
    }

    /**
     * @param mixed $postTitle
     */
    public function setPostTitle($postTitle)
    {
        $this->_postTitle = $postTitle;
    }

    /**
     * @return mixed
     */
    public function getSubCategoryId()
    {
        return $this->_subCategoryId;
    }

    /**
     * @param mixed $subCategoryId
     */
    public function setSubCategoryId($subCategoryId)
    {
        $this->_subCategoryId = $subCategoryId;
    }

    /**
     * @return mixed
     */
    public function getPostingdetails()
    {
        return $this->_postingdetails;
    }

    /**
     * @param mixed $postingdetails
     */
    public function setPostingdetails($postingdetails)
    {
        $this->_postingdetails = $postingdetails;
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

    /**
     * @return mixed
     */
    public function getPostUrl()
    {
        return $this->_postUrl;
    }

    /**
     * @param mixed $postUrl
     */
    public function setPostUrl($postUrl)
    {
        $this->_postUrl = $postUrl;
    }

    /**
     * @return mixed
     */
    public function getPostImage()
    {
        return $this->_postImage;
    }

    /**
     * @param mixed $postImage
     */
    public function setPostImage($postImage)
    {
        $this->_postImage = $postImage;
    }
    private $_postUrl;
    private $_postImage;
}