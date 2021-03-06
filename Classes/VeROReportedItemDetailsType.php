<?php

namespace EbayWsdl\Classes;

class VeROReportedItemDetailsType
{

    /**
     * @var VeROReportedItemType[] $ReportedItem
     */
    protected $ReportedItem = null;

    /**
     * @param VeROReportedItemType[] $ReportedItem
     */
    public function __construct(array $ReportedItem = null)
    {
      $this->ReportedItem = $ReportedItem;
    }

    /**
     * @return VeROReportedItemType[]
     */
    public function getReportedItem()
    {
      return $this->ReportedItem;
    }

    /**
     * @param VeROReportedItemType[] $ReportedItem
     * @return \EbayWsdl\Classes\VeROReportedItemDetailsType
     */
    public function setReportedItem(array $ReportedItem)
    {
      $this->ReportedItem = $ReportedItem;
      return $this;
    }

}
