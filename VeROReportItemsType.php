<?php

namespace EbayWsdl;

class VeROReportItemsType
{

    /**
     * @var VeROReportItemType[] $ReportItem
     */
    protected $ReportItem = null;

    /**
     * @param VeROReportItemType[] $ReportItem
     */
    public function __construct(array $ReportItem = null)
    {
      $this->ReportItem = $ReportItem;
    }

    /**
     * @return VeROReportItemType[]
     */
    public function getReportItem()
    {
      return $this->ReportItem;
    }

    /**
     * @param VeROReportItemType[] $ReportItem
     * @return \EbayWsdl\VeROReportItemsType
     */
    public function setReportItem(array $ReportItem)
    {
      $this->ReportItem = $ReportItem;
      return $this;
    }

}
