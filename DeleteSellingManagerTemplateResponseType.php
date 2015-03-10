<?php

namespace EbayWsdl;

class DeleteSellingManagerTemplateResponseType extends AbstractResponseType
{

    /**
     * @var string $DeletedSaleTemplateID
     */
    protected $DeletedSaleTemplateID = null;

    /**
     * @var string $DeletedSaleTemplateName
     */
    protected $DeletedSaleTemplateName = null;

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
     * @param string $DeletedSaleTemplateID
     * @param string $DeletedSaleTemplateName
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $DeletedSaleTemplateID = null, $DeletedSaleTemplateName = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->DeletedSaleTemplateID = $DeletedSaleTemplateID;
      $this->DeletedSaleTemplateName = $DeletedSaleTemplateName;
    }

    /**
     * @return string
     */
    public function getDeletedSaleTemplateID()
    {
      return $this->DeletedSaleTemplateID;
    }

    /**
     * @param string $DeletedSaleTemplateID
     * @return \EbayWsdl\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateID($DeletedSaleTemplateID)
    {
      $this->DeletedSaleTemplateID = $DeletedSaleTemplateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeletedSaleTemplateName()
    {
      return $this->DeletedSaleTemplateName;
    }

    /**
     * @param string $DeletedSaleTemplateName
     * @return \EbayWsdl\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateName($DeletedSaleTemplateName)
    {
      $this->DeletedSaleTemplateName = $DeletedSaleTemplateName;
      return $this;
    }

}
