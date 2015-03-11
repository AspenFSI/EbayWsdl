<?php

namespace EbayWsdl\Classes;

class WarrantyDurationDetailsType
{

    /**
     * @var string $WarrantyDurationOption
     */
    protected $WarrantyDurationOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $WarrantyDurationOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($WarrantyDurationOption = null, $Description = null, $any = null)
    {
      $this->WarrantyDurationOption = $WarrantyDurationOption;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getWarrantyDurationOption()
    {
      return $this->WarrantyDurationOption;
    }

    /**
     * @param string $WarrantyDurationOption
     * @return \EbayWsdl\Classes\WarrantyDurationDetailsType
     */
    public function setWarrantyDurationOption($WarrantyDurationOption)
    {
      $this->WarrantyDurationOption = $WarrantyDurationOption;
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
     * @return \EbayWsdl\Classes\WarrantyDurationDetailsType
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
     * @return \EbayWsdl\Classes\WarrantyDurationDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
