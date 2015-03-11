<?php

namespace EbayWsdl\Classes;

class ListingDurationDefinitionsType
{

    /**
     * @var ListingDurationDefinitionType[] $ListingDuration
     */
    protected $ListingDuration = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    /**
     * @param ListingDurationDefinitionType[] $ListingDuration
     * @param int $Version
     */
    public function __construct(array $ListingDuration = null, $Version = null)
    {
      $this->ListingDuration = $ListingDuration;
      $this->Version = $Version;
    }

    /**
     * @return ListingDurationDefinitionType[]
     */
    public function getListingDuration()
    {
      return $this->ListingDuration;
    }

    /**
     * @param ListingDurationDefinitionType[] $ListingDuration
     * @return \EbayWsdl\Classes\ListingDurationDefinitionsType
     */
    public function setListingDuration(array $ListingDuration)
    {
      $this->ListingDuration = $ListingDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \EbayWsdl\Classes\ListingDurationDefinitionsType
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
