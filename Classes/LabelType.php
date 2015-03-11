<?php

namespace EbayWsdl\Classes;

class LabelType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $visible
     */
    protected $visible = null;

    /**
     * @param string $Name
     * @param string $any
     * @param boolean $visible
     */
    public function __construct($Name = null, $any = null, $visible = null)
    {
      $this->Name = $Name;
      $this->any = $any;
      $this->visible = $visible;
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
     * @return \EbayWsdl\Classes\LabelType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \EbayWsdl\Classes\LabelType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVisible()
    {
      return $this->visible;
    }

    /**
     * @param boolean $visible
     * @return \EbayWsdl\Classes\LabelType
     */
    public function setVisible($visible)
    {
      $this->visible = $visible;
      return $this;
    }

}
