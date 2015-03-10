<?php

namespace EbayWsdl;

class AddSellingManagerTemplateResponseType extends AbstractResponseType
{

    /**
     * @var int $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var int $Category2ID
     */
    protected $Category2ID = null;

    /**
     * @var int $SaleTemplateID
     */
    protected $SaleTemplateID = null;

    /**
     * @var int $SaleTemplateGroupID
     */
    protected $SaleTemplateGroupID = null;

    /**
     * @var string $SaleTemplateName
     */
    protected $SaleTemplateName = null;

    /**
     * @var SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var FeesType $Fees
     */
    protected $Fees = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param int $CategoryID
     * @param int $Category2ID
     * @param int $SaleTemplateID
     * @param int $SaleTemplateGroupID
     * @param string $SaleTemplateName
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @param FeesType $Fees
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CategoryID = null, $Category2ID = null, $SaleTemplateID = null, $SaleTemplateGroupID = null, $SaleTemplateName = null, $SellingManagerProductDetails = null, $Fees = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CategoryID = $CategoryID;
      $this->Category2ID = $Category2ID;
      $this->SaleTemplateID = $SaleTemplateID;
      $this->SaleTemplateGroupID = $SaleTemplateGroupID;
      $this->SaleTemplateName = $SaleTemplateName;
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      $this->Fees = $Fees;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param int $CategoryID
     * @return \EbayWsdl\AddSellingManagerTemplateResponseType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategory2ID()
    {
      return $this->Category2ID;
    }

    /**
     * @param int $Category2ID
     * @return \EbayWsdl\AddSellingManagerTemplateResponseType
     */
    public function setCategory2ID($Category2ID)
    {
      $this->Category2ID = $Category2ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSaleTemplateID()
    {
      return $this->SaleTemplateID;
    }

    /**
     * @param int $SaleTemplateID
     * @return \EbayWsdl\AddSellingManagerTemplateResponseType
     */
    public function setSaleTemplateID($SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSaleTemplateGroupID()
    {
      return $this->SaleTemplateGroupID;
    }

    /**
     * @param int $SaleTemplateGroupID
     * @return \EbayWsdl\AddSellingManagerTemplateResponseType
     */
    public function setSaleTemplateGroupID($SaleTemplateGroupID)
    {
      $this->SaleTemplateGroupID = $SaleTemplateGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSaleTemplateName()
    {
      return $this->SaleTemplateName;
    }

    /**
     * @param string $SaleTemplateName
     * @return \EbayWsdl\AddSellingManagerTemplateResponseType
     */
    public function setSaleTemplateName($SaleTemplateName)
    {
      $this->SaleTemplateName = $SaleTemplateName;
      return $this;
    }

    /**
     * @return SellingManagerProductDetailsType
     */
    public function getSellingManagerProductDetails()
    {
      return $this->SellingManagerProductDetails;
    }

    /**
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @return \EbayWsdl\AddSellingManagerTemplateResponseType
     */
    public function setSellingManagerProductDetails($SellingManagerProductDetails)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      return $this;
    }

    /**
     * @return FeesType
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param FeesType $Fees
     * @return \EbayWsdl\AddSellingManagerTemplateResponseType
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

}
