<?php

namespace EbayWsdl\Classes;

class CategoryMappingType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $oldID
     */
    protected $oldID = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @param string $any
     * @param string $oldID
     * @param string $id
     */
    public function __construct($any = null, $oldID = null, $id = null)
    {
      $this->any = $any;
      $this->oldID = $oldID;
      $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\Classes\CategoryMappingType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return string
     */
    public function getOldID()
    {
      return $this->oldID;
    }

    /**
     * @param string $oldID
     * @return \EbayWsdl\Classes\CategoryMappingType
     */
    public function setOldID($oldID)
    {
      $this->oldID = $oldID;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \EbayWsdl\Classes\CategoryMappingType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
