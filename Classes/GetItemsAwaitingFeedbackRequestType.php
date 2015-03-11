<?php

namespace EbayWsdl\Classes;

class GetItemsAwaitingFeedbackRequestType extends AbstractRequestType
{

    /**
     * @var ItemSortTypeCodeType $Sort
     */
    protected $Sort = null;

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
     * @param ItemSortTypeCodeType $Sort
     * @param PaginationType $Pagination
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Sort = null, $Pagination = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Sort = $Sort;
      $this->Pagination = $Pagination;
    }

    /**
     * @return ItemSortTypeCodeType
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param ItemSortTypeCodeType $Sort
     * @return \EbayWsdl\Classes\GetItemsAwaitingFeedbackRequestType
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
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
     * @return \EbayWsdl\Classes\GetItemsAwaitingFeedbackRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

}
