<?php

namespace EbayWsdl;

class GetCharitiesRequestType extends AbstractRequestType
{

    /**
     * @var string $CharityID
     */
    protected $CharityID = null;

    /**
     * @var string $CharityName
     */
    protected $CharityName = null;

    /**
     * @var string $Query
     */
    protected $Query = null;

    /**
     * @var int $CharityRegion
     */
    protected $CharityRegion = null;

    /**
     * @var int $CharityDomain
     */
    protected $CharityDomain = null;

    /**
     * @var boolean $IncludeDescription
     */
    protected $IncludeDescription = null;

    /**
     * @var StringMatchCodeType $MatchType
     */
    protected $MatchType = null;

    /**
     * @var boolean $Featured
     */
    protected $Featured = null;

    /**
     * @var int $CampaignID
     */
    protected $CampaignID = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param string $CharityID
     * @param string $CharityName
     * @param string $Query
     * @param int $CharityRegion
     * @param int $CharityDomain
     * @param boolean $IncludeDescription
     * @param StringMatchCodeType $MatchType
     * @param boolean $Featured
     * @param int $CampaignID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CharityID = null, $CharityName = null, $Query = null, $CharityRegion = null, $CharityDomain = null, $IncludeDescription = null, $MatchType = null, $Featured = null, $CampaignID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CharityID = $CharityID;
      $this->CharityName = $CharityName;
      $this->Query = $Query;
      $this->CharityRegion = $CharityRegion;
      $this->CharityDomain = $CharityDomain;
      $this->IncludeDescription = $IncludeDescription;
      $this->MatchType = $MatchType;
      $this->Featured = $Featured;
      $this->CampaignID = $CampaignID;
    }

    /**
     * @return string
     */
    public function getCharityID()
    {
      return $this->CharityID;
    }

    /**
     * @param string $CharityID
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setCharityID($CharityID)
    {
      $this->CharityID = $CharityID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCharityName()
    {
      return $this->CharityName;
    }

    /**
     * @param string $CharityName
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setCharityName($CharityName)
    {
      $this->CharityName = $CharityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
      return $this->Query;
    }

    /**
     * @param string $Query
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setQuery($Query)
    {
      $this->Query = $Query;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharityRegion()
    {
      return $this->CharityRegion;
    }

    /**
     * @param int $CharityRegion
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setCharityRegion($CharityRegion)
    {
      $this->CharityRegion = $CharityRegion;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharityDomain()
    {
      return $this->CharityDomain;
    }

    /**
     * @param int $CharityDomain
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setCharityDomain($CharityDomain)
    {
      $this->CharityDomain = $CharityDomain;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeDescription()
    {
      return $this->IncludeDescription;
    }

    /**
     * @param boolean $IncludeDescription
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setIncludeDescription($IncludeDescription)
    {
      $this->IncludeDescription = $IncludeDescription;
      return $this;
    }

    /**
     * @return StringMatchCodeType
     */
    public function getMatchType()
    {
      return $this->MatchType;
    }

    /**
     * @param StringMatchCodeType $MatchType
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setMatchType($MatchType)
    {
      $this->MatchType = $MatchType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFeatured()
    {
      return $this->Featured;
    }

    /**
     * @param boolean $Featured
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setFeatured($Featured)
    {
      $this->Featured = $Featured;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignID()
    {
      return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return \EbayWsdl\GetCharitiesRequestType
     */
    public function setCampaignID($CampaignID)
    {
      $this->CampaignID = $CampaignID;
      return $this;
    }

}
