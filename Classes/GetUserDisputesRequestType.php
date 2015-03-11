<?php

namespace EbayWsdl\Classes;

class GetUserDisputesRequestType extends AbstractRequestType
{

    /**
     * @var DisputeFilterTypeCodeType $DisputeFilterType
     */
    protected $DisputeFilterType = null;

    /**
     * @var DisputeSortTypeCodeType $DisputeSortType
     */
    protected $DisputeSortType = null;

    /**
     * @var \DateTime $ModTimeFrom
     */
    protected $ModTimeFrom = null;

    /**
     * @var \DateTime $ModTimeTo
     */
    protected $ModTimeTo = null;

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
     * @param DisputeFilterTypeCodeType $DisputeFilterType
     * @param DisputeSortTypeCodeType $DisputeSortType
     * @param \DateTime $ModTimeFrom
     * @param \DateTime $ModTimeTo
     * @param PaginationType $Pagination
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $DisputeFilterType = null, $DisputeSortType = null, \DateTime $ModTimeFrom = null, \DateTime $ModTimeTo = null, $Pagination = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->DisputeFilterType = $DisputeFilterType;
      $this->DisputeSortType = $DisputeSortType;
      $this->ModTimeFrom = $ModTimeFrom ? $ModTimeFrom->format(\DateTime::ATOM) : null;
      $this->ModTimeTo = $ModTimeTo ? $ModTimeTo->format(\DateTime::ATOM) : null;
      $this->Pagination = $Pagination;
    }

    /**
     * @return DisputeFilterTypeCodeType
     */
    public function getDisputeFilterType()
    {
      return $this->DisputeFilterType;
    }

    /**
     * @param DisputeFilterTypeCodeType $DisputeFilterType
     * @return \EbayWsdl\Classes\GetUserDisputesRequestType
     */
    public function setDisputeFilterType($DisputeFilterType)
    {
      $this->DisputeFilterType = $DisputeFilterType;
      return $this;
    }

    /**
     * @return DisputeSortTypeCodeType
     */
    public function getDisputeSortType()
    {
      return $this->DisputeSortType;
    }

    /**
     * @param DisputeSortTypeCodeType $DisputeSortType
     * @return \EbayWsdl\Classes\GetUserDisputesRequestType
     */
    public function setDisputeSortType($DisputeSortType)
    {
      $this->DisputeSortType = $DisputeSortType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModTimeFrom()
    {
      if ($this->ModTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModTimeFrom
     * @return \EbayWsdl\Classes\GetUserDisputesRequestType
     */
    public function setModTimeFrom(\DateTime $ModTimeFrom)
    {
      $this->ModTimeFrom = $ModTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModTimeTo()
    {
      if ($this->ModTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModTimeTo
     * @return \EbayWsdl\Classes\GetUserDisputesRequestType
     */
    public function setModTimeTo(\DateTime $ModTimeTo)
    {
      $this->ModTimeTo = $ModTimeTo->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\GetUserDisputesRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

}
