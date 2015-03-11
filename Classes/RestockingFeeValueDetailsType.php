<?php

namespace EbayWsdl\Classes;

class RestockingFeeValueDetailsType
{

    /**
     * @var string $RestockingFeeValueOption
     */
    protected $RestockingFeeValueOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $RestockingFeeValueOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($RestockingFeeValueOption = null, $Description = null, $any = null)
    {
      $this->RestockingFeeValueOption = $RestockingFeeValueOption;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getRestockingFeeValueOption()
    {
      return $this->RestockingFeeValueOption;
    }

    /**
     * @param string $RestockingFeeValueOption
     * @return \EbayWsdl\Classes\RestockingFeeValueDetailsType
     */
    public function setRestockingFeeValueOption($RestockingFeeValueOption)
    {
      $this->RestockingFeeValueOption = $RestockingFeeValueOption;
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
     * @return \EbayWsdl\Classes\RestockingFeeValueDetailsType
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
     * @return \EbayWsdl\Classes\RestockingFeeValueDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
