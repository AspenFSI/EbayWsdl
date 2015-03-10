<?php

namespace EbayWsdl;

class ReturnsWithinDetailsType
{

    /**
     * @var string $ReturnsWithinOption
     */
    protected $ReturnsWithinOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ReturnsWithinOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($ReturnsWithinOption = null, $Description = null, $any = null)
    {
      $this->ReturnsWithinOption = $ReturnsWithinOption;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getReturnsWithinOption()
    {
      return $this->ReturnsWithinOption;
    }

    /**
     * @param string $ReturnsWithinOption
     * @return \EbayWsdl\ReturnsWithinDetailsType
     */
    public function setReturnsWithinOption($ReturnsWithinOption)
    {
      $this->ReturnsWithinOption = $ReturnsWithinOption;
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
     * @return \EbayWsdl\ReturnsWithinDetailsType
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
     * @return \EbayWsdl\ReturnsWithinDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
