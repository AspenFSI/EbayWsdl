<?php

namespace EbayWsdl\Classes;

class RefundDetailsType
{

    /**
     * @var string $RefundOption
     */
    protected $RefundOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $RefundOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($RefundOption = null, $Description = null, $any = null)
    {
      $this->RefundOption = $RefundOption;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getRefundOption()
    {
      return $this->RefundOption;
    }

    /**
     * @param string $RefundOption
     * @return \EbayWsdl\Classes\RefundDetailsType
     */
    public function setRefundOption($RefundOption)
    {
      $this->RefundOption = $RefundOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\RefundDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \EbayWsdl\Classes\RefundDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
