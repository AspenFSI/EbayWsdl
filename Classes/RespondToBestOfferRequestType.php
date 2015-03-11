<?php

namespace EbayWsdl\Classes;

class RespondToBestOfferRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var BestOfferIDType[] $BestOfferID
     */
    protected $BestOfferID = null;

    /**
     * @var BestOfferActionCodeType $Action
     */
    protected $Action = null;

    /**
     * @var string $SellerResponse
     */
    protected $SellerResponse = null;

    /**
     * @var AmountType $CounterOfferPrice
     */
    protected $CounterOfferPrice = null;

    /**
     * @var int $CounterOfferQuantity
     */
    protected $CounterOfferQuantity = null;

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
     * @param BestOfferIDType[] $BestOfferID
     * @param BestOfferActionCodeType $Action
     * @param string $SellerResponse
     * @param AmountType $CounterOfferPrice
     * @param int $CounterOfferQuantity
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, array $BestOfferID = null, $Action = null, $SellerResponse = null, $CounterOfferPrice = null, $CounterOfferQuantity = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->BestOfferID = $BestOfferID;
      $this->Action = $Action;
      $this->SellerResponse = $SellerResponse;
      $this->CounterOfferPrice = $CounterOfferPrice;
      $this->CounterOfferQuantity = $CounterOfferQuantity;
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
     * @return \EbayWsdl\Classes\RespondToBestOfferRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return BestOfferIDType[]
     */
    public function getBestOfferID()
    {
      return $this->BestOfferID;
    }

    /**
     * @param BestOfferIDType[] $BestOfferID
     * @return \EbayWsdl\Classes\RespondToBestOfferRequestType
     */
    public function setBestOfferID(array $BestOfferID)
    {
      $this->BestOfferID = $BestOfferID;
      return $this;
    }

    /**
     * @return BestOfferActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param BestOfferActionCodeType $Action
     * @return \EbayWsdl\Classes\RespondToBestOfferRequestType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerResponse()
    {
      return $this->SellerResponse;
    }

    /**
     * @param string $SellerResponse
     * @return \EbayWsdl\Classes\RespondToBestOfferRequestType
     */
    public function setSellerResponse($SellerResponse)
    {
      $this->SellerResponse = $SellerResponse;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCounterOfferPrice()
    {
      return $this->CounterOfferPrice;
    }

    /**
     * @param AmountType $CounterOfferPrice
     * @return \EbayWsdl\Classes\RespondToBestOfferRequestType
     */
    public function setCounterOfferPrice($CounterOfferPrice)
    {
      $this->CounterOfferPrice = $CounterOfferPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getCounterOfferQuantity()
    {
      return $this->CounterOfferQuantity;
    }

    /**
     * @param int $CounterOfferQuantity
     * @return \EbayWsdl\Classes\RespondToBestOfferRequestType
     */
    public function setCounterOfferQuantity($CounterOfferQuantity)
    {
      $this->CounterOfferQuantity = $CounterOfferQuantity;
      return $this;
    }

}
