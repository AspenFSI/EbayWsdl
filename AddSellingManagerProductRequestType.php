<?php

namespace EbayWsdl;

class AddSellingManagerProductRequestType extends AbstractRequestType
{

    /**
     * @var SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var SellingManagerProductSpecificsType $SellingManagerProductSpecifics
     */
    protected $SellingManagerProductSpecifics = null;

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
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @param int $FolderID
     * @param SellingManagerProductSpecificsType $SellingManagerProductSpecifics
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SellingManagerProductDetails = null, $FolderID = null, $SellingManagerProductSpecifics = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      $this->FolderID = $FolderID;
      $this->SellingManagerProductSpecifics = $SellingManagerProductSpecifics;
    }

    /**
     * @return SellingManagerProductDetailsType
     */
    public function getSellingManagerProductDetails()
    {
      return $this->SellingManagerProductDetails;
    }

    /**
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @return \EbayWsdl\AddSellingManagerProductRequestType
     */
    public function setSellingManagerProductDetails($SellingManagerProductDetails)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getFolderID()
    {
      return $this->FolderID;
    }

    /**
     * @param int $FolderID
     * @return \EbayWsdl\AddSellingManagerProductRequestType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return SellingManagerProductSpecificsType
     */
    public function getSellingManagerProductSpecifics()
    {
      return $this->SellingManagerProductSpecifics;
    }

    /**
     * @param SellingManagerProductSpecificsType $SellingManagerProductSpecifics
     * @return \EbayWsdl\AddSellingManagerProductRequestType
     */
    public function setSellingManagerProductSpecifics($SellingManagerProductSpecifics)
    {
      $this->SellingManagerProductSpecifics = $SellingManagerProductSpecifics;
      return $this;
    }

}
