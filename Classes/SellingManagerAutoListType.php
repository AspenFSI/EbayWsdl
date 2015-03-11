<?php

namespace EbayWsdl\Classes;

class SellingManagerAutoListType
{

    /**
     * @var int $SourceSaleTemplateID
     */
    protected $SourceSaleTemplateID = null;

    /**
     * @var SellingManagerAutoListMinActiveItemsType $KeepMinActive
     */
    protected $KeepMinActive = null;

    /**
     * @var SellingManagerAutoListAccordingToScheduleType $ListAccordingToSchedule
     */
    protected $ListAccordingToSchedule = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $SourceSaleTemplateID
     * @param SellingManagerAutoListMinActiveItemsType $KeepMinActive
     * @param SellingManagerAutoListAccordingToScheduleType $ListAccordingToSchedule
     * @param string $any
     */
    public function __construct($SourceSaleTemplateID = null, $KeepMinActive = null, $ListAccordingToSchedule = null, $any = null)
    {
      $this->SourceSaleTemplateID = $SourceSaleTemplateID;
      $this->KeepMinActive = $KeepMinActive;
      $this->ListAccordingToSchedule = $ListAccordingToSchedule;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getSourceSaleTemplateID()
    {
      return $this->SourceSaleTemplateID;
    }

    /**
     * @param int $SourceSaleTemplateID
     * @return \EbayWsdl\Classes\SellingManagerAutoListType
     */
    public function setSourceSaleTemplateID($SourceSaleTemplateID)
    {
      $this->SourceSaleTemplateID = $SourceSaleTemplateID;
      return $this;
    }

    /**
     * @return SellingManagerAutoListMinActiveItemsType
     */
    public function getKeepMinActive()
    {
      return $this->KeepMinActive;
    }

    /**
     * @param SellingManagerAutoListMinActiveItemsType $KeepMinActive
     * @return \EbayWsdl\Classes\SellingManagerAutoListType
     */
    public function setKeepMinActive($KeepMinActive)
    {
      $this->KeepMinActive = $KeepMinActive;
      return $this;
    }

    /**
     * @return SellingManagerAutoListAccordingToScheduleType
     */
    public function getListAccordingToSchedule()
    {
      return $this->ListAccordingToSchedule;
    }

    /**
     * @param SellingManagerAutoListAccordingToScheduleType $ListAccordingToSchedule
     * @return \EbayWsdl\Classes\SellingManagerAutoListType
     */
    public function setListAccordingToSchedule($ListAccordingToSchedule)
    {
      $this->ListAccordingToSchedule = $ListAccordingToSchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\Classes\SellingManagerAutoListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
