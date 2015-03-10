<?php

namespace EbayWsdl;

class BuyerProtectionDetailsType
{

    /**
     * @var BuyerProtectionSourceCodeType $BuyerProtectionSource
     */
    protected $BuyerProtectionSource = null;

    /**
     * @var BuyerProtectionCodeType $BuyerProtectionStatus
     */
    protected $BuyerProtectionStatus = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BuyerProtectionSourceCodeType $BuyerProtectionSource
     * @param BuyerProtectionCodeType $BuyerProtectionStatus
     * @param string $any
     */
    public function __construct($BuyerProtectionSource = null, $BuyerProtectionStatus = null, $any = null)
    {
      $this->BuyerProtectionSource = $BuyerProtectionSource;
      $this->BuyerProtectionStatus = $BuyerProtectionStatus;
      $this->any = $any;
    }

    /**
     * @return BuyerProtectionSourceCodeType
     */
    public function getBuyerProtectionSource()
    {
      return $this->BuyerProtectionSource;
    }

    /**
     * @param BuyerProtectionSourceCodeType $BuyerProtectionSource
     * @return \EbayWsdl\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionSource($BuyerProtectionSource)
    {
      $this->BuyerProtectionSource = $BuyerProtectionSource;
      return $this;
    }

    /**
     * @return BuyerProtectionCodeType
     */
    public function getBuyerProtectionStatus()
    {
      return $this->BuyerProtectionStatus;
    }

    /**
     * @param BuyerProtectionCodeType $BuyerProtectionStatus
     * @return \EbayWsdl\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionStatus($BuyerProtectionStatus)
    {
      $this->BuyerProtectionStatus = $BuyerProtectionStatus;
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
     * @return \EbayWsdl\BuyerProtectionDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
