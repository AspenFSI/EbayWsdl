<?php

namespace EbayWsdl\Classes;

class GetUserContactDetailsRequestType extends AbstractRequestType
{

    /**
     * @var string $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $ContactID
     */
    protected $ContactID = null;

    /**
     * @var string $RequesterID
     */
    protected $RequesterID = null;

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
     * @param string $ItemID
     * @param string $ContactID
     * @param string $RequesterID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $ContactID = null, $RequesterID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->ContactID = $ContactID;
      $this->RequesterID = $RequesterID;
    }

    /**
     * @return string
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param string $ItemID
     * @return \EbayWsdl\Classes\GetUserContactDetailsRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactID()
    {
      return $this->ContactID;
    }

    /**
     * @param string $ContactID
     * @return \EbayWsdl\Classes\GetUserContactDetailsRequestType
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequesterID()
    {
      return $this->RequesterID;
    }

    /**
     * @param string $RequesterID
     * @return \EbayWsdl\Classes\GetUserContactDetailsRequestType
     */
    public function setRequesterID($RequesterID)
    {
      $this->RequesterID = $RequesterID;
      return $this;
    }

}
