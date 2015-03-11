<?php

namespace EbayWsdl\Classes;

class GetVeROReportStatusRequestType extends AbstractRequestType
{

    /**
     * @var int $VeROReportPacketID
     */
    protected $VeROReportPacketID = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var boolean $IncludeReportedItemDetails
     */
    protected $IncludeReportedItemDetails = null;

    /**
     * @var \DateTime $TimeFrom
     */
    protected $TimeFrom = null;

    /**
     * @var \DateTime $TimeTo
     */
    protected $TimeTo = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

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
     * @param int $VeROReportPacketID
     * @param ItemIDType $ItemID
     * @param boolean $IncludeReportedItemDetails
     * @param \DateTime $TimeFrom
     * @param \DateTime $TimeTo
     * @param PaginationType $Pagination
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $VeROReportPacketID = null, $ItemID = null, $IncludeReportedItemDetails = null, \DateTime $TimeFrom = null, \DateTime $TimeTo = null, $Pagination = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->VeROReportPacketID = $VeROReportPacketID;
      $this->ItemID = $ItemID;
      $this->IncludeReportedItemDetails = $IncludeReportedItemDetails;
      $this->TimeFrom = $TimeFrom ? $TimeFrom->format(\DateTime::ATOM) : null;
      $this->TimeTo = $TimeTo ? $TimeTo->format(\DateTime::ATOM) : null;
      $this->Pagination = $Pagination;
    }

    /**
     * @return int
     */
    public function getVeROReportPacketID()
    {
      return $this->VeROReportPacketID;
    }

    /**
     * @param int $VeROReportPacketID
     * @return \EbayWsdl\Classes\GetVeROReportStatusRequestType
     */
    public function setVeROReportPacketID($VeROReportPacketID)
    {
      $this->VeROReportPacketID = $VeROReportPacketID;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\Classes\GetVeROReportStatusRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeReportedItemDetails()
    {
      return $this->IncludeReportedItemDetails;
    }

    /**
     * @param boolean $IncludeReportedItemDetails
     * @return \EbayWsdl\Classes\GetVeROReportStatusRequestType
     */
    public function setIncludeReportedItemDetails($IncludeReportedItemDetails)
    {
      $this->IncludeReportedItemDetails = $IncludeReportedItemDetails;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeFrom()
    {
      if ($this->TimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeFrom
     * @return \EbayWsdl\Classes\GetVeROReportStatusRequestType
     */
    public function setTimeFrom(\DateTime $TimeFrom)
    {
      $this->TimeFrom = $TimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeTo()
    {
      if ($this->TimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeTo
     * @return \EbayWsdl\Classes\GetVeROReportStatusRequestType
     */
    public function setTimeTo(\DateTime $TimeTo)
    {
      $this->TimeTo = $TimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\Classes\GetVeROReportStatusRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

}
