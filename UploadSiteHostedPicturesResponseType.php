<?php

namespace EbayWsdl;

class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{

    /**
     * @var int $PictureSystemVersion
     */
    protected $PictureSystemVersion = null;

    /**
     * @var SiteHostedPictureDetailsType $SiteHostedPictureDetails
     */
    protected $SiteHostedPictureDetails = null;

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
     * @param int $PictureSystemVersion
     * @param SiteHostedPictureDetailsType $SiteHostedPictureDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PictureSystemVersion = null, $SiteHostedPictureDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PictureSystemVersion = $PictureSystemVersion;
      $this->SiteHostedPictureDetails = $SiteHostedPictureDetails;
    }

    /**
     * @return int
     */
    public function getPictureSystemVersion()
    {
      return $this->PictureSystemVersion;
    }

    /**
     * @param int $PictureSystemVersion
     * @return \EbayWsdl\UploadSiteHostedPicturesResponseType
     */
    public function setPictureSystemVersion($PictureSystemVersion)
    {
      $this->PictureSystemVersion = $PictureSystemVersion;
      return $this;
    }

    /**
     * @return SiteHostedPictureDetailsType
     */
    public function getSiteHostedPictureDetails()
    {
      return $this->SiteHostedPictureDetails;
    }

    /**
     * @param SiteHostedPictureDetailsType $SiteHostedPictureDetails
     * @return \EbayWsdl\UploadSiteHostedPicturesResponseType
     */
    public function setSiteHostedPictureDetails($SiteHostedPictureDetails)
    {
      $this->SiteHostedPictureDetails = $SiteHostedPictureDetails;
      return $this;
    }

}
