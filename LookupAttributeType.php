<?php

namespace EbayWsdl;

class LookupAttributeType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param string $Value
     * @param string $any
     */
    public function __construct($Name = null, $Value = null, $any = null)
    {
      $this->Name = $Name;
      $this->Value = $Value;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\LookupAttributeType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \EbayWsdl\LookupAttributeType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
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
     * @return \EbayWsdl\LookupAttributeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
