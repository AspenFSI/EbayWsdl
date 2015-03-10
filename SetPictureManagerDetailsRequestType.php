<?php

namespace EbayWsdl;

class SetPictureManagerDetailsRequestType extends AbstractRequestType
{

    /**
     * @var PictureManagerDetailsType $PictureManagerDetails
     */
    protected $PictureManagerDetails = null;

    /**
     * @var PictureManagerActionCodeType $Action
     */
    protected $Action = null;

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
     * @param PictureManagerDetailsType $PictureManagerDetails
     * @param PictureManagerActionCodeType $Action
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PictureManagerDetails = null, $Action = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PictureManagerDetails = $PictureManagerDetails;
      $this->Action = $Action;
    }

    /**
     * @return PictureManagerDetailsType
     */
    public function getPictureManagerDetails()
    {
      return $this->PictureManagerDetails;
    }

    /**
     * @param PictureManagerDetailsType $PictureManagerDetails
     * @return \EbayWsdl\SetPictureManagerDetailsRequestType
     */
    public function setPictureManagerDetails($PictureManagerDetails)
    {
      $this->PictureManagerDetails = $PictureManagerDetails;
      return $this;
    }

    /**
     * @return PictureManagerActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param PictureManagerActionCodeType $Action
     * @return \EbayWsdl\SetPictureManagerDetailsRequestType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

}
