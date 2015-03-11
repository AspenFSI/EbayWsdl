<?php

namespace EbayWsdl\Classes;

class WarrantyTypeDetailsType
{

    /**
     * @var string $WarrantyTypeOption
     */
    protected $WarrantyTypeOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $WarrantyTypeOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($WarrantyTypeOption = null, $Description = null, $any = null)
    {
      $this->WarrantyTypeOption = $WarrantyTypeOption;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getWarrantyTypeOption()
    {
      return $this->WarrantyTypeOption;
    }

    /**
     * @param string $WarrantyTypeOption
     * @return \EbayWsdl\Classes\WarrantyTypeDetailsType
     */
    public function setWarrantyTypeOption($WarrantyTypeOption)
    {
      $this->WarrantyTypeOption = $WarrantyTypeOption;
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
     * @return \EbayWsdl\Classes\WarrantyTypeDetailsType
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
     * @return \EbayWsdl\Classes\WarrantyTypeDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
