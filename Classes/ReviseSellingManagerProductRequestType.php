<?php

namespace EbayWsdl\Classes;

class ReviseSellingManagerProductRequestType extends AbstractRequestType
{

    /**
     * @var SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var SellingManagerFolderDetailsType $SellingManagerFolderDetails
     */
    protected $SellingManagerFolderDetails = null;

    /**
     * @var string[] $DeletedField
     */
    protected $DeletedField = null;

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
     * @param SellingManagerFolderDetailsType $SellingManagerFolderDetails
     * @param string[] $DeletedField
     * @param SellingManagerProductSpecificsType $SellingManagerProductSpecifics
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SellingManagerProductDetails = null, $SellingManagerFolderDetails = null, array $DeletedField = null, $SellingManagerProductSpecifics = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      $this->SellingManagerFolderDetails = $SellingManagerFolderDetails;
      $this->DeletedField = $DeletedField;
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
     * @return \EbayWsdl\Classes\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductDetails($SellingManagerProductDetails)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      return $this;
    }

    /**
     * @return SellingManagerFolderDetailsType
     */
    public function getSellingManagerFolderDetails()
    {
      return $this->SellingManagerFolderDetails;
    }

    /**
     * @param SellingManagerFolderDetailsType $SellingManagerFolderDetails
     * @return \EbayWsdl\Classes\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerFolderDetails($SellingManagerFolderDetails)
    {
      $this->SellingManagerFolderDetails = $SellingManagerFolderDetails;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDeletedField()
    {
      return $this->DeletedField;
    }

    /**
     * @param string[] $DeletedField
     * @return \EbayWsdl\Classes\ReviseSellingManagerProductRequestType
     */
    public function setDeletedField(array $DeletedField)
    {
      $this->DeletedField = $DeletedField;
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
     * @return \EbayWsdl\Classes\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductSpecifics($SellingManagerProductSpecifics)
    {
      $this->SellingManagerProductSpecifics = $SellingManagerProductSpecifics;
      return $this;
    }

}
