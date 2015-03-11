<?php

namespace EbayWsdl\Classes;

class WarrantyOfferedDetailsType
{

    /**
     * @var string $WarrantyOfferedOption
     */
    protected $WarrantyOfferedOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $WarrantyOfferedOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($WarrantyOfferedOption = null, $Description = null, $any = null)
    {
      $this->WarrantyOfferedOption = $WarrantyOfferedOption;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getWarrantyOfferedOption()
    {
      return $this->WarrantyOfferedOption;
    }

    /**
     * @param string $WarrantyOfferedOption
     * @return \EbayWsdl\Classes\WarrantyOfferedDetailsType
     */
    public function setWarrantyOfferedOption($WarrantyOfferedOption)
    {
      $this->WarrantyOfferedOption = $WarrantyOfferedOption;
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
     * @return \EbayWsdl\Classes\WarrantyOfferedDetailsType
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
     * @return \EbayWsdl\Classes\WarrantyOfferedDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
