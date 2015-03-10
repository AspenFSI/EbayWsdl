<?php

namespace EbayWsdl;

class DataElementSetType
{

    /**
     * @var string $DataElement
     */
    protected $DataElement = null;

    /**
     * @var int $DataElementID
     */
    protected $DataElementID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var int $attributeSetID
     */
    protected $attributeSetID = null;

    /**
     * @param string $DataElement
     * @param int $DataElementID
     * @param string $any
     * @param int $attributeSetID
     */
    public function __construct($DataElement = null, $DataElementID = null, $any = null, $attributeSetID = null)
    {
      $this->DataElement = $DataElement;
      $this->DataElementID = $DataElementID;
      $this->any = $any;
      $this->attributeSetID = $attributeSetID;
    }

    /**
     * @return string
     */
    public function getDataElement()
    {
      return $this->DataElement;
    }

    /**
     * @param string $DataElement
     * @return \EbayWsdl\DataElementSetType
     */
    public function setDataElement($DataElement)
    {
      $this->DataElement = $DataElement;
      return $this;
    }

    /**
     * @return int
     */
    public function getDataElementID()
    {
      return $this->DataElementID;
    }

    /**
     * @param int $DataElementID
     * @return \EbayWsdl\DataElementSetType
     */
    public function setDataElementID($DataElementID)
    {
      $this->DataElementID = $DataElementID;
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
     * @return \EbayWsdl\DataElementSetType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return int
     */
    public function getAttributeSetID()
    {
      return $this->attributeSetID;
    }

    /**
     * @param int $attributeSetID
     * @return \EbayWsdl\DataElementSetType
     */
    public function setAttributeSetID($attributeSetID)
    {
      $this->attributeSetID = $attributeSetID;
      return $this;
    }

}
