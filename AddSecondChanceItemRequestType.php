<?php

namespace EbayWsdl;

class AddSecondChanceItemRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $RecipientBidderUserID
     */
    protected $RecipientBidderUserID = null;

    /**
     * @var AmountType $BuyItNowPrice
     */
    protected $BuyItNowPrice = null;

    /**
     * @var SecondChanceOfferDurationCodeType $Duration
     */
    protected $Duration = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $SellerMessage
     */
    protected $SellerMessage = null;

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
     * @param UserIDType $RecipientBidderUserID
     * @param AmountType $BuyItNowPrice
     * @param SecondChanceOfferDurationCodeType $Duration
     * @param ItemIDType $ItemID
     * @param string $SellerMessage
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $RecipientBidderUserID = null, $BuyItNowPrice = null, $Duration = null, $ItemID = null, $SellerMessage = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->RecipientBidderUserID = $RecipientBidderUserID;
      $this->BuyItNowPrice = $BuyItNowPrice;
      $this->Duration = $Duration;
      $this->ItemID = $ItemID;
      $this->SellerMessage = $SellerMessage;
    }

    /**
     * @return UserIDType
     */
    public function getRecipientBidderUserID()
    {
      return $this->RecipientBidderUserID;
    }

    /**
     * @param UserIDType $RecipientBidderUserID
     * @return \EbayWsdl\AddSecondChanceItemRequestType
     */
    public function setRecipientBidderUserID($RecipientBidderUserID)
    {
      $this->RecipientBidderUserID = $RecipientBidderUserID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBuyItNowPrice()
    {
      return $this->BuyItNowPrice;
    }

    /**
     * @param AmountType $BuyItNowPrice
     * @return \EbayWsdl\AddSecondChanceItemRequestType
     */
    public function setBuyItNowPrice($BuyItNowPrice)
    {
      $this->BuyItNowPrice = $BuyItNowPrice;
      return $this;
    }

    /**
     * @return SecondChanceOfferDurationCodeType
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param SecondChanceOfferDurationCodeType $Duration
     * @return \EbayWsdl\AddSecondChanceItemRequestType
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
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
     * @return \EbayWsdl\AddSecondChanceItemRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerMessage()
    {
      return $this->SellerMessage;
    }

    /**
     * @param string $SellerMessage
     * @return \EbayWsdl\AddSecondChanceItemRequestType
     */
    public function setSellerMessage($SellerMessage)
    {
      $this->SellerMessage = $SellerMessage;
      return $this;
    }

}
