<?php

namespace EbayWsdl;

class ModifyNameType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NewName
     */
    protected $NewName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param string $NewName
     * @param string $any
     */
    public function __construct($Name = null, $NewName = null, $any = null)
    {
      $this->Name = $Name;
      $this->NewName = $NewName;
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
     * @return \EbayWsdl\ModifyNameType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewName()
    {
      return $this->NewName;
    }

    /**
     * @param string $NewName
     * @return \EbayWsdl\ModifyNameType
     */
    public function setNewName($NewName)
    {
      $this->NewName = $NewName;
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
     * @return \EbayWsdl\ModifyNameType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
