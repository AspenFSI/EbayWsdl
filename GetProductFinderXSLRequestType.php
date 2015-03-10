<?php

namespace EbayWsdl;

class GetProductFinderXSLRequestType extends AbstractRequestType
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $FileVersion
     */
    protected $FileVersion = null;

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
     * @param string $FileName
     * @param string $FileVersion
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $FileName = null, $FileVersion = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->FileName = $FileName;
      $this->FileVersion = $FileVersion;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \EbayWsdl\GetProductFinderXSLRequestType
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileVersion()
    {
      return $this->FileVersion;
    }

    /**
     * @param string $FileVersion
     * @return \EbayWsdl\GetProductFinderXSLRequestType
     */
    public function setFileVersion($FileVersion)
    {
      $this->FileVersion = $FileVersion;
      return $this;
    }

}
