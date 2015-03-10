<?php

namespace EbayWsdl;

class GetItemShippingRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var int $QuantitySold
     */
    protected $QuantitySold = null;

    /**
     * @var string $DestinationPostalCode
     */
    protected $DestinationPostalCode = null;

    /**
     * @var CountryCodeType $DestinationCountryCode
     */
    protected $DestinationCountryCode = null;

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
     * @param ItemIDType $ItemID
     * @param int $QuantitySold
     * @param string $DestinationPostalCode
     * @param CountryCodeType $DestinationCountryCode
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $QuantitySold = null, $DestinationPostalCode = null, $DestinationCountryCode = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->QuantitySold = $QuantitySold;
      $this->DestinationPostalCode = $DestinationPostalCode;
      $this->DestinationCountryCode = $DestinationCountryCode;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\GetItemShippingRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantitySold()
    {
      return $this->QuantitySold;
    }

    /**
     * @param int $QuantitySold
     * @return \EbayWsdl\GetItemShippingRequestType
     */
    public function setQuantitySold($QuantitySold)
    {
      $this->QuantitySold = $QuantitySold;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationPostalCode()
    {
      return $this->DestinationPostalCode;
    }

    /**
     * @param string $DestinationPostalCode
     * @return \EbayWsdl\GetItemShippingRequestType
     */
    public function setDestinationPostalCode($DestinationPostalCode)
    {
      $this->DestinationPostalCode = $DestinationPostalCode;
      return $this;
    }

    /**
     * @return CountryCodeType
     */
    public function getDestinationCountryCode()
    {
      return $this->DestinationCountryCode;
    }

    /**
     * @param CountryCodeType $DestinationCountryCode
     * @return \EbayWsdl\GetItemShippingRequestType
     */
    public function setDestinationCountryCode($DestinationCountryCode)
    {
      $this->DestinationCountryCode = $DestinationCountryCode;
      return $this;
    }

}
