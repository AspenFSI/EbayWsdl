<?php

namespace EbayWsdl;

class NameValueListType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string[] $Value
     */
    protected $Value = null;

    /**
     * @var ItemSpecificSourceCodeType $Source
     */
    protected $Source = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param string[] $Value
     * @param ItemSpecificSourceCodeType $Source
     * @param string $any
     */
    public function __construct($Name = null, array $Value = null, $Source = null, $any = null)
    {
      $this->Name = $Name;
      $this->Value = $Value;
      $this->Source = $Source;
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
     * @return \EbayWsdl\NameValueListType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string[] $Value
     * @return \EbayWsdl\NameValueListType
     */
    public function setValue(array $Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return ItemSpecificSourceCodeType
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param ItemSpecificSourceCodeType $Source
     * @return \EbayWsdl\NameValueListType
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
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
     * @return \EbayWsdl\NameValueListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
