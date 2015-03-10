<?php

namespace EbayWsdl;

class GetProductFinderRequestType extends AbstractRequestType
{

    /**
     * @var string $AttributeSystemVersion
     */
    protected $AttributeSystemVersion = null;

    /**
     * @var int[] $ProductFinderID
     */
    protected $ProductFinderID = null;

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
     * @param string $AttributeSystemVersion
     * @param int[] $ProductFinderID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $AttributeSystemVersion = null, array $ProductFinderID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      $this->ProductFinderID = $ProductFinderID;
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
     * @return \EbayWsdl\GetProductFinderRequestType
     */
    public function setAttributeSystemVersion($AttributeSystemVersion)
    {
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getProductFinderID()
    {
      return $this->ProductFinderID;
    }

    /**
     * @param int[] $ProductFinderID
     * @return \EbayWsdl\GetProductFinderRequestType
     */
    public function setProductFinderID(array $ProductFinderID)
    {
      $this->ProductFinderID = $ProductFinderID;
      return $this;
    }

}
