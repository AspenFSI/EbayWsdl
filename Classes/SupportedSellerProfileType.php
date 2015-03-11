<?php

namespace EbayWsdl\Classes;

class SupportedSellerProfileType
{

    /**
     * @var int $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var string $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var string $ProfileName
     */
    protected $ProfileName = null;

    /**
     * @var string $ShortSummary
     */
    protected $ShortSummary = null;

    /**
     * @var CategoryGroupType $CategoryGroup
     */
    protected $CategoryGroup = null;

    /**
     * @param int $ProfileID
     * @param string $ProfileType
     * @param string $ProfileName
     * @param string $ShortSummary
     * @param CategoryGroupType $CategoryGroup
     */
    public function __construct($ProfileID = null, $ProfileType = null, $ProfileName = null, $ShortSummary = null, $CategoryGroup = null)
    {
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
      $this->ProfileName = $ProfileName;
      $this->ShortSummary = $ShortSummary;
      $this->CategoryGroup = $CategoryGroup;
    }

    /**
     * @return int
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param int $ProfileID
     * @return \EbayWsdl\Classes\SupportedSellerProfileType
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param string $ProfileType
     * @return \EbayWsdl\Classes\SupportedSellerProfileType
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param string $ProfileName
     * @return \EbayWsdl\Classes\SupportedSellerProfileType
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortSummary()
    {
      return $this->ShortSummary;
    }

    /**
     * @param string $ShortSummary
     * @return \EbayWsdl\Classes\SupportedSellerProfileType
     */
    public function setShortSummary($ShortSummary)
    {
      $this->ShortSummary = $ShortSummary;
      return $this;
    }

    /**
     * @return CategoryGroupType
     */
    public function getCategoryGroup()
    {
      return $this->CategoryGroup;
    }

    /**
     * @param CategoryGroupType $CategoryGroup
     * @return \EbayWsdl\Classes\SupportedSellerProfileType
     */
    public function setCategoryGroup($CategoryGroup)
    {
      $this->CategoryGroup = $CategoryGroup;
      return $this;
    }

}
