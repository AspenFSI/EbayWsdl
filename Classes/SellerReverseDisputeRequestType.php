<?php

namespace EbayWsdl\Classes;

class SellerReverseDisputeRequestType extends AbstractRequestType
{

    /**
     * @var DisputeIDType $DisputeID
     */
    protected $DisputeID = null;

    /**
     * @var DisputeResolutionReasonCodeType $DisputeResolutionReason
     */
    protected $DisputeResolutionReason = null;

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
     * @param DisputeIDType $DisputeID
     * @param DisputeResolutionReasonCodeType $DisputeResolutionReason
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $DisputeID = null, $DisputeResolutionReason = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->DisputeID = $DisputeID;
      $this->DisputeResolutionReason = $DisputeResolutionReason;
    }

    /**
     * @return DisputeIDType
     */
    public function getDisputeID()
    {
      return $this->DisputeID;
    }

    /**
     * @param DisputeIDType $DisputeID
     * @return \EbayWsdl\Classes\SellerReverseDisputeRequestType
     */
    public function setDisputeID($DisputeID)
    {
      $this->DisputeID = $DisputeID;
      return $this;
    }

    /**
     * @return DisputeResolutionReasonCodeType
     */
    public function getDisputeResolutionReason()
    {
      return $this->DisputeResolutionReason;
    }

    /**
     * @param DisputeResolutionReasonCodeType $DisputeResolutionReason
     * @return \EbayWsdl\Classes\SellerReverseDisputeRequestType
     */
    public function setDisputeResolutionReason($DisputeResolutionReason)
    {
      $this->DisputeResolutionReason = $DisputeResolutionReason;
      return $this;
    }

}
