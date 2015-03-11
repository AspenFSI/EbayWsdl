<?php

namespace EbayWsdl\Classes;

class StoreCustomCategoryType
{

    /**
     * @var int $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var StoreCustomCategoryType[] $ChildCategory
     */
    protected $ChildCategory = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $CategoryID
     * @param string $Name
     * @param int $Order
     * @param StoreCustomCategoryType[] $ChildCategory
     * @param string $any
     */
    public function __construct($CategoryID = null, $Name = null, $Order = null, array $ChildCategory = null, $any = null)
    {
      $this->CategoryID = $CategoryID;
      $this->Name = $Name;
      $this->Order = $Order;
      $this->ChildCategory = $ChildCategory;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param int $CategoryID
     * @return \EbayWsdl\Classes\StoreCustomCategoryType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\Classes\StoreCustomCategoryType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return \EbayWsdl\Classes\StoreCustomCategoryType
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return StoreCustomCategoryType[]
     */
    public function getChildCategory()
    {
      return $this->ChildCategory;
    }

    /**
     * @param StoreCustomCategoryType[] $ChildCategory
     * @return \EbayWsdl\Classes\StoreCustomCategoryType
     */
    public function setChildCategory(array $ChildCategory)
    {
      $this->ChildCategory = $ChildCategory;
      return $this;
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
     * @return \EbayWsdl\Classes\StoreCustomCategoryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
