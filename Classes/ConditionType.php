<?php

namespace EbayWsdl\Classes;

class ConditionType
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ID
     * @param string $DisplayName
     * @param string $any
     */
    public function __construct($ID = null, $DisplayName = null, $any = null)
    {
      $this->ID = $ID;
      $this->DisplayName = $DisplayName;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\ConditionType
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \EbayWsdl\Classes\ConditionType
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
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
     * @return \EbayWsdl\Classes\ConditionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
