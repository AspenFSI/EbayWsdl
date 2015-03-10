<?php

namespace EbayWsdl;

class DisputeFilterCountType
{

    /**
     * @var DisputeFilterTypeCodeType $DisputeFilterType
     */
    protected $DisputeFilterType = null;

    /**
     * @var int $TotalAvailable
     */
    protected $TotalAvailable = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param DisputeFilterTypeCodeType $DisputeFilterType
     * @param int $TotalAvailable
     * @param string $any
     */
    public function __construct($DisputeFilterType = null, $TotalAvailable = null, $any = null)
    {
      $this->DisputeFilterType = $DisputeFilterType;
      $this->TotalAvailable = $TotalAvailable;
      $this->any = $any;
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
     * @return \EbayWsdl\DisputeFilterCountType
     */
    public function setDisputeFilterType($DisputeFilterType)
    {
      $this->DisputeFilterType = $DisputeFilterType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalAvailable()
    {
      return $this->TotalAvailable;
    }

    /**
     * @param int $TotalAvailable
     * @return \EbayWsdl\DisputeFilterCountType
     */
    public function setTotalAvailable($TotalAvailable)
    {
      $this->TotalAvailable = $TotalAvailable;
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
     * @return \EbayWsdl\DisputeFilterCountType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
