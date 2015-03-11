<?php

namespace EbayWsdl\Classes;

class GetSellingManagerInventoryFolderResponseType extends AbstractResponseType
{

    /**
     * @var SellingManagerFolderDetailsType $Folder
     */
    protected $Folder = null;

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
     * @param SellingManagerFolderDetailsType $Folder
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $Folder = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Folder = $Folder;
    }

    /**
     * @return SellingManagerFolderDetailsType
     */
    public function getFolder()
    {
      return $this->Folder;
    }

    /**
     * @param SellingManagerFolderDetailsType $Folder
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryFolderResponseType
     */
    public function setFolder($Folder)
    {
      $this->Folder = $Folder;
      return $this;
    }

}
