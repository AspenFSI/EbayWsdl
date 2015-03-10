<?php

namespace EbayWsdl;

class GetContextualKeywordsRequestType extends AbstractRequestType
{

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var string[] $CategoryID
     */
    protected $CategoryID = null;

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
     * @param anyURI $URL
     * @param string $Encoding
     * @param string[] $CategoryID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $URL = null, $Encoding = null, array $CategoryID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->URL = $URL;
      $this->Encoding = $Encoding;
      $this->CategoryID = $CategoryID;
    }

    /**
     * @return anyURI
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI $URL
     * @return \EbayWsdl\GetContextualKeywordsRequestType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param string $Encoding
     * @return \EbayWsdl\GetContextualKeywordsRequestType
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string[] $CategoryID
     * @return \EbayWsdl\GetContextualKeywordsRequestType
     */
    public function setCategoryID(array $CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

}
