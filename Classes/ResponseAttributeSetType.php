<?php

namespace EbayWsdl\Classes;

class ResponseAttributeSetType
{

    /**
     * @var int $ApproximatePages
     */
    protected $ApproximatePages = null;

    /**
     * @var int $AttributeSetID
     */
    protected $AttributeSetID = null;

    /**
     * @var boolean $HasMore
     */
    protected $HasMore = null;

    /**
     * @var ProductFamilyType[] $ProductFamilies
     */
    protected $ProductFamilies = null;

    /**
     * @var ProductFinderConstraintType[] $ProductFinderConstraints
     */
    protected $ProductFinderConstraints = null;

    /**
     * @var boolean $TooManyMatchesFound
     */
    protected $TooManyMatchesFound = null;

    /**
     * @var int $TotalProducts
     */
    protected $TotalProducts = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ApproximatePages
     * @param int $AttributeSetID
     * @param boolean $HasMore
     * @param ProductFamilyType[] $ProductFamilies
     * @param ProductFinderConstraintType[] $ProductFinderConstraints
     * @param boolean $TooManyMatchesFound
     * @param int $TotalProducts
     * @param string $any
     */
    public function __construct($ApproximatePages = null, $AttributeSetID = null, $HasMore = null, array $ProductFamilies = null, array $ProductFinderConstraints = null, $TooManyMatchesFound = null, $TotalProducts = null, $any = null)
    {
      $this->ApproximatePages = $ApproximatePages;
      $this->AttributeSetID = $AttributeSetID;
      $this->HasMore = $HasMore;
      $this->ProductFamilies = $ProductFamilies;
      $this->ProductFinderConstraints = $ProductFinderConstraints;
      $this->TooManyMatchesFound = $TooManyMatchesFound;
      $this->TotalProducts = $TotalProducts;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getApproximatePages()
    {
      return $this->ApproximatePages;
    }

    /**
     * @param int $ApproximatePages
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setApproximatePages($ApproximatePages)
    {
      $this->ApproximatePages = $ApproximatePages;
      return $this;
    }

    /**
     * @return int
     */
    public function getAttributeSetID()
    {
      return $this->AttributeSetID;
    }

    /**
     * @param int $AttributeSetID
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setAttributeSetID($AttributeSetID)
    {
      $this->AttributeSetID = $AttributeSetID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMore()
    {
      return $this->HasMore;
    }

    /**
     * @param boolean $HasMore
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setHasMore($HasMore)
    {
      $this->HasMore = $HasMore;
      return $this;
    }

    /**
     * @return ProductFamilyType[]
     */
    public function getProductFamilies()
    {
      return $this->ProductFamilies;
    }

    /**
     * @param ProductFamilyType[] $ProductFamilies
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setProductFamilies(array $ProductFamilies)
    {
      $this->ProductFamilies = $ProductFamilies;
      return $this;
    }

    /**
     * @return ProductFinderConstraintType[]
     */
    public function getProductFinderConstraints()
    {
      return $this->ProductFinderConstraints;
    }

    /**
     * @param ProductFinderConstraintType[] $ProductFinderConstraints
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setProductFinderConstraints(array $ProductFinderConstraints)
    {
      $this->ProductFinderConstraints = $ProductFinderConstraints;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTooManyMatchesFound()
    {
      return $this->TooManyMatchesFound;
    }

    /**
     * @param boolean $TooManyMatchesFound
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setTooManyMatchesFound($TooManyMatchesFound)
    {
      $this->TooManyMatchesFound = $TooManyMatchesFound;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalProducts()
    {
      return $this->TotalProducts;
    }

    /**
     * @param int $TotalProducts
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setTotalProducts($TotalProducts)
    {
      $this->TotalProducts = $TotalProducts;
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
     * @return \EbayWsdl\Classes\ResponseAttributeSetType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
