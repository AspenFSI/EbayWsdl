<?php

namespace EbayWsdl;

class ReturnsAcceptedDetailsType
{

    /**
     * @var string $ReturnsAcceptedOption
     */
    protected $ReturnsAcceptedOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ReturnsAcceptedOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($ReturnsAcceptedOption = null, $Description = null, $any = null)
    {
      $this->ReturnsAcceptedOption = $ReturnsAcceptedOption;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getReturnsAcceptedOption()
    {
      return $this->ReturnsAcceptedOption;
    }

    /**
     * @param string $ReturnsAcceptedOption
     * @return \EbayWsdl\ReturnsAcceptedDetailsType
     */
    public function setReturnsAcceptedOption($ReturnsAcceptedOption)
    {
      $this->ReturnsAcceptedOption = $ReturnsAcceptedOption;
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
     * @return \EbayWsdl\ReturnsAcceptedDetailsType
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
     * @return \EbayWsdl\ReturnsAcceptedDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
