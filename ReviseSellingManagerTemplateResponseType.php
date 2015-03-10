<?php

namespace EbayWsdl;

class ReviseSellingManagerTemplateResponseType extends AbstractResponseType
{

    /**
     * @var int $SaleTemplateID
     */
    protected $SaleTemplateID = null;

    /**
     * @var FeesType $Fees
     */
    protected $Fees = null;

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $Category2ID
     */
    protected $Category2ID = null;

    /**
     * @var boolean $VerifyOnly
     */
    protected $VerifyOnly = null;

    /**
     * @var string $SaleTemplateName
     */
    protected $SaleTemplateName = null;

    /**
     * @var SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    protected $SellingManagerProductDetails = null;

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
     * @param int $SaleTemplateID
     * @param FeesType $Fees
     * @param string $CategoryID
     * @param string $Category2ID
     * @param boolean $VerifyOnly
     * @param string $SaleTemplateName
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $SaleTemplateID = null, $Fees = null, $CategoryID = null, $Category2ID = null, $VerifyOnly = null, $SaleTemplateName = null, $SellingManagerProductDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SaleTemplateID = $SaleTemplateID;
      $this->Fees = $Fees;
      $this->CategoryID = $CategoryID;
      $this->Category2ID = $Category2ID;
      $this->VerifyOnly = $VerifyOnly;
      $this->SaleTemplateName = $SaleTemplateName;
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
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
     * @return \EbayWsdl\ReviseSellingManagerTemplateResponseType
     */
    public function setSaleTemplateID($SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
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
     * @return \EbayWsdl\ReviseSellingManagerTemplateResponseType
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\ReviseSellingManagerTemplateResponseType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory2ID()
    {
      return $this->Category2ID;
    }

    /**
     * @param string $Category2ID
     * @return \EbayWsdl\ReviseSellingManagerTemplateResponseType
     */
    public function setCategory2ID($Category2ID)
    {
      $this->Category2ID = $Category2ID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVerifyOnly()
    {
      return $this->VerifyOnly;
    }

    /**
     * @param boolean $VerifyOnly
     * @return \EbayWsdl\ReviseSellingManagerTemplateResponseType
     */
    public function setVerifyOnly($VerifyOnly)
    {
      $this->VerifyOnly = $VerifyOnly;
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
     * @return \EbayWsdl\ReviseSellingManagerTemplateResponseType
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
     * @return \EbayWsdl\ReviseSellingManagerTemplateResponseType
     */
    public function setSellingManagerProductDetails($SellingManagerProductDetails)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      return $this;
    }

}
