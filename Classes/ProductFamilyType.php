<?php

namespace EbayWsdl\Classes;

class ProductFamilyType
{

    /**
     * @var ProductType $ParentProduct
     */
    protected $ParentProduct = null;

    /**
     * @var ProductType[] $FamilyMembers
     */
    protected $FamilyMembers = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $hasMoreChildren
     */
    protected $hasMoreChildren = null;

    /**
     * @param ProductType $ParentProduct
     * @param ProductType[] $FamilyMembers
     * @param string $any
     * @param boolean $hasMoreChildren
     */
    public function __construct($ParentProduct = null, array $FamilyMembers = null, $any = null, $hasMoreChildren = null)
    {
      $this->ParentProduct = $ParentProduct;
      $this->FamilyMembers = $FamilyMembers;
      $this->any = $any;
      $this->hasMoreChildren = $hasMoreChildren;
    }

    /**
     * @return ProductType
     */
    public function getParentProduct()
    {
      return $this->ParentProduct;
    }

    /**
     * @param ProductType $ParentProduct
     * @return \EbayWsdl\Classes\ProductFamilyType
     */
    public function setParentProduct($ParentProduct)
    {
      $this->ParentProduct = $ParentProduct;
      return $this;
    }

    /**
     * @return ProductType[]
     */
    public function getFamilyMembers()
    {
      return $this->FamilyMembers;
    }

    /**
     * @param ProductType[] $FamilyMembers
     * @return \EbayWsdl\Classes\ProductFamilyType
     */
    public function setFamilyMembers(array $FamilyMembers)
    {
      $this->FamilyMembers = $FamilyMembers;
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
     * @return \EbayWsdl\Classes\ProductFamilyType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMoreChildren()
    {
      return $this->hasMoreChildren;
    }

    /**
     * @param boolean $hasMoreChildren
     * @return \EbayWsdl\Classes\ProductFamilyType
     */
    public function setHasMoreChildren($hasMoreChildren)
    {
      $this->hasMoreChildren = $hasMoreChildren;
      return $this;
    }

}
