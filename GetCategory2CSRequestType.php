<?php

namespace EbayWsdl;

class GetCategory2CSRequestType extends AbstractRequestType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $AttributeSystemVersion
     */
    protected $AttributeSystemVersion = null;

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
     * @param string $CategoryID
     * @param string $AttributeSystemVersion
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CategoryID = null, $AttributeSystemVersion = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategoryID = $CategoryID;
      $this->AttributeSystemVersion = $AttributeSystemVersion;
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
     * @return \EbayWsdl\GetCategory2CSRequestType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttributeSystemVersion()
    {
      return $this->AttributeSystemVersion;
    }

    /**
     * @param string $AttributeSystemVersion
     * @return \EbayWsdl\GetCategory2CSRequestType
     */
    public function setAttributeSystemVersion($AttributeSystemVersion)
    {
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      return $this;
    }

}
