<?php

namespace EbayWsdl\Classes;

class AddTransactionConfirmationItemRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $RecipientUserID
     */
    protected $RecipientUserID = null;

    /**
     * @var string $VerifyEligibilityOnly
     */
    protected $VerifyEligibilityOnly = null;

    /**
     * @var string $RecipientPostalCode
     */
    protected $RecipientPostalCode = null;

    /**
     * @var RecipientRelationCodeType $RecipientRelationType
     */
    protected $RecipientRelationType = null;

    /**
     * @var AmountType $NegotiatedPrice
     */
    protected $NegotiatedPrice = null;

    /**
     * @var SecondChanceOfferDurationCodeType $ListingDuration
     */
    protected $ListingDuration = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

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
     * @param UserIDType $RecipientUserID
     * @param string $VerifyEligibilityOnly
     * @param string $RecipientPostalCode
     * @param RecipientRelationCodeType $RecipientRelationType
     * @param AmountType $NegotiatedPrice
     * @param SecondChanceOfferDurationCodeType $ListingDuration
     * @param ItemIDType $ItemID
     * @param string $Comments
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $RecipientUserID = null, $VerifyEligibilityOnly = null, $RecipientPostalCode = null, $RecipientRelationType = null, $NegotiatedPrice = null, $ListingDuration = null, $ItemID = null, $Comments = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->RecipientUserID = $RecipientUserID;
      $this->VerifyEligibilityOnly = $VerifyEligibilityOnly;
      $this->RecipientPostalCode = $RecipientPostalCode;
      $this->RecipientRelationType = $RecipientRelationType;
      $this->NegotiatedPrice = $NegotiatedPrice;
      $this->ListingDuration = $ListingDuration;
      $this->ItemID = $ItemID;
      $this->Comments = $Comments;
    }

    /**
     * @return UserIDType
     */
    public function getRecipientUserID()
    {
      return $this->RecipientUserID;
    }

    /**
     * @param UserIDType $RecipientUserID
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setRecipientUserID($RecipientUserID)
    {
      $this->RecipientUserID = $RecipientUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerifyEligibilityOnly()
    {
      return $this->VerifyEligibilityOnly;
    }

    /**
     * @param string $VerifyEligibilityOnly
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setVerifyEligibilityOnly($VerifyEligibilityOnly)
    {
      $this->VerifyEligibilityOnly = $VerifyEligibilityOnly;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientPostalCode()
    {
      return $this->RecipientPostalCode;
    }

    /**
     * @param string $RecipientPostalCode
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setRecipientPostalCode($RecipientPostalCode)
    {
      $this->RecipientPostalCode = $RecipientPostalCode;
      return $this;
    }

    /**
     * @return RecipientRelationCodeType
     */
    public function getRecipientRelationType()
    {
      return $this->RecipientRelationType;
    }

    /**
     * @param RecipientRelationCodeType $RecipientRelationType
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setRecipientRelationType($RecipientRelationType)
    {
      $this->RecipientRelationType = $RecipientRelationType;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getNegotiatedPrice()
    {
      return $this->NegotiatedPrice;
    }

    /**
     * @param AmountType $NegotiatedPrice
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setNegotiatedPrice($NegotiatedPrice)
    {
      $this->NegotiatedPrice = $NegotiatedPrice;
      return $this;
    }

    /**
     * @return SecondChanceOfferDurationCodeType
     */
    public function getListingDuration()
    {
      return $this->ListingDuration;
    }

    /**
     * @param SecondChanceOfferDurationCodeType $ListingDuration
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setListingDuration($ListingDuration)
    {
      $this->ListingDuration = $ListingDuration;
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
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \EbayWsdl\Classes\AddTransactionConfirmationItemRequestType
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

}
