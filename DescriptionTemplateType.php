<?php

namespace EbayWsdl;

class DescriptionTemplateType
{

    /**
     * @var int $GroupID
     */
    protected $GroupID = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var anyURI $ImageURL
     */
    protected $ImageURL = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $TemplateXML
     */
    protected $TemplateXML = null;

    /**
     * @var DescriptionTemplateCodeType $Type
     */
    protected $Type = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $GroupID
     * @param int $ID
     * @param anyURI $ImageURL
     * @param string $Name
     * @param string $TemplateXML
     * @param DescriptionTemplateCodeType $Type
     * @param string $any
     */
    public function __construct($GroupID = null, $ID = null, $ImageURL = null, $Name = null, $TemplateXML = null, $Type = null, $any = null)
    {
      $this->GroupID = $GroupID;
      $this->ID = $ID;
      $this->ImageURL = $ImageURL;
      $this->Name = $Name;
      $this->TemplateXML = $TemplateXML;
      $this->Type = $Type;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getGroupID()
    {
      return $this->GroupID;
    }

    /**
     * @param int $GroupID
     * @return \EbayWsdl\DescriptionTemplateType
     */
    public function setGroupID($GroupID)
    {
      $this->GroupID = $GroupID;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \EbayWsdl\DescriptionTemplateType
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getImageURL()
    {
      return $this->ImageURL;
    }

    /**
     * @param anyURI $ImageURL
     * @return \EbayWsdl\DescriptionTemplateType
     */
    public function setImageURL($ImageURL)
    {
      $this->ImageURL = $ImageURL;
      return $this;
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
     * @return \EbayWsdl\DescriptionTemplateType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getTemplateXML()
    {
      return $this->TemplateXML;
    }

    /**
     * @param string $TemplateXML
     * @return \EbayWsdl\DescriptionTemplateType
     */
    public function setTemplateXML($TemplateXML)
    {
      $this->TemplateXML = $TemplateXML;
      return $this;
    }

    /**
     * @return DescriptionTemplateCodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DescriptionTemplateCodeType $Type
     * @return \EbayWsdl\DescriptionTemplateType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \EbayWsdl\DescriptionTemplateType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
