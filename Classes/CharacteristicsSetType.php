<?php

namespace EbayWsdl\Classes;

class CharacteristicsSetType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $AttributeSetID
     */
    protected $AttributeSetID = null;

    /**
     * @var string $AttributeSetVersion
     */
    protected $AttributeSetVersion = null;

    /**
     * @var CharacteristicType[] $Characteristics
     */
    protected $Characteristics = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param int $AttributeSetID
     * @param string $AttributeSetVersion
     * @param CharacteristicType[] $Characteristics
     * @param string $any
     */
    public function __construct($Name = null, $AttributeSetID = null, $AttributeSetVersion = null, array $Characteristics = null, $any = null)
    {
      $this->Name = $Name;
      $this->AttributeSetID = $AttributeSetID;
      $this->AttributeSetVersion = $AttributeSetVersion;
      $this->Characteristics = $Characteristics;
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
     * @return \EbayWsdl\Classes\CharacteristicsSetType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getAttributeSetID()
    {
      return $this->AttributeSetID;
    }

    /**
     * @param int $AttributeSetID
     * @return \EbayWsdl\Classes\CharacteristicsSetType
     */
    public function setAttributeSetID($AttributeSetID)
    {
      $this->AttributeSetID = $AttributeSetID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttributeSetVersion()
    {
      return $this->AttributeSetVersion;
    }

    /**
     * @param string $AttributeSetVersion
     * @return \EbayWsdl\Classes\CharacteristicsSetType
     */
    public function setAttributeSetVersion($AttributeSetVersion)
    {
      $this->AttributeSetVersion = $AttributeSetVersion;
      return $this;
    }

    /**
     * @return CharacteristicType[]
     */
    public function getCharacteristics()
    {
      return $this->Characteristics;
    }

    /**
     * @param CharacteristicType[] $Characteristics
     * @return \EbayWsdl\Classes\CharacteristicsSetType
     */
    public function setCharacteristics(array $Characteristics)
    {
      $this->Characteristics = $Characteristics;
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
     * @return \EbayWsdl\Classes\CharacteristicsSetType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
