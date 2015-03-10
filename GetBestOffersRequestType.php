<?php

namespace EbayWsdl;

class GetBestOffersRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var BestOfferIDType $BestOfferID
     */
    protected $BestOfferID = null;

    /**
     * @var BestOfferStatusCodeType $BestOfferStatus
     */
    protected $BestOfferStatus = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

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
     * @param BestOfferIDType $BestOfferID
     * @param BestOfferStatusCodeType $BestOfferStatus
     * @param PaginationType $Pagination
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $BestOfferID = null, $BestOfferStatus = null, $Pagination = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->BestOfferID = $BestOfferID;
      $this->BestOfferStatus = $BestOfferStatus;
      $this->Pagination = $Pagination;
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
     * @return \EbayWsdl\GetBestOffersRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return BestOfferIDType
     */
    public function getBestOfferID()
    {
      return $this->BestOfferID;
    }

    /**
     * @param BestOfferIDType $BestOfferID
     * @return \EbayWsdl\GetBestOffersRequestType
     */
    public function setBestOfferID($BestOfferID)
    {
      $this->BestOfferID = $BestOfferID;
      return $this;
    }

    /**
     * @return BestOfferStatusCodeType
     */
    public function getBestOfferStatus()
    {
      return $this->BestOfferStatus;
    }

    /**
     * @param BestOfferStatusCodeType $BestOfferStatus
     * @return \EbayWsdl\GetBestOffersRequestType
     */
    public function setBestOfferStatus($BestOfferStatus)
    {
      $this->BestOfferStatus = $BestOfferStatus;
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\GetBestOffersRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

}
