<?php

namespace EbayWsdl;

class MyeBaySelectionType
{

    /**
     * @var boolean $Include
     */
    protected $Include = null;

    /**
     * @var boolean $IncludeItemCount
     */
    protected $IncludeItemCount = null;

    /**
     * @var boolean $IncludeFavoriteSellerCount
     */
    protected $IncludeFavoriteSellerCount = null;

    /**
     * @var SortOrderCodeType $Sort
     */
    protected $Sort = null;

    /**
     * @var int $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @var string $UserDefinedListName
     */
    protected $UserDefinedListName = null;

    /**
     * @var boolean $IncludeListContents
     */
    protected $IncludeListContents = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $Include
     * @param boolean $IncludeItemCount
     * @param boolean $IncludeFavoriteSellerCount
     * @param SortOrderCodeType $Sort
     * @param int $MaxResults
     * @param string $UserDefinedListName
     * @param boolean $IncludeListContents
     * @param string $any
     */
    public function __construct($Include = null, $IncludeItemCount = null, $IncludeFavoriteSellerCount = null, $Sort = null, $MaxResults = null, $UserDefinedListName = null, $IncludeListContents = null, $any = null)
    {
      $this->Include = $Include;
      $this->IncludeItemCount = $IncludeItemCount;
      $this->IncludeFavoriteSellerCount = $IncludeFavoriteSellerCount;
      $this->Sort = $Sort;
      $this->MaxResults = $MaxResults;
      $this->UserDefinedListName = $UserDefinedListName;
      $this->IncludeListContents = $IncludeListContents;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getInclude()
    {
      return $this->Include;
    }

    /**
     * @param boolean $Include
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setInclude($Include)
    {
      $this->Include = $Include;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeItemCount()
    {
      return $this->IncludeItemCount;
    }

    /**
     * @param boolean $IncludeItemCount
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setIncludeItemCount($IncludeItemCount)
    {
      $this->IncludeItemCount = $IncludeItemCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFavoriteSellerCount()
    {
      return $this->IncludeFavoriteSellerCount;
    }

    /**
     * @param boolean $IncludeFavoriteSellerCount
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setIncludeFavoriteSellerCount($IncludeFavoriteSellerCount)
    {
      $this->IncludeFavoriteSellerCount = $IncludeFavoriteSellerCount;
      return $this;
    }

    /**
     * @return SortOrderCodeType
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param SortOrderCodeType $Sort
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param int $MaxResults
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefinedListName()
    {
      return $this->UserDefinedListName;
    }

    /**
     * @param string $UserDefinedListName
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setUserDefinedListName($UserDefinedListName)
    {
      $this->UserDefinedListName = $UserDefinedListName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeListContents()
    {
      return $this->IncludeListContents;
    }

    /**
     * @param boolean $IncludeListContents
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setIncludeListContents($IncludeListContents)
    {
      $this->IncludeListContents = $IncludeListContents;
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
     * @return \EbayWsdl\MyeBaySelectionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
