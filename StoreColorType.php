<?php

namespace EbayWsdl;

class StoreColorType
{

    /**
     * @var string $Primary
     */
    protected $Primary = null;

    /**
     * @var string $Secondary
     */
    protected $Secondary = null;

    /**
     * @var string $Accent
     */
    protected $Accent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Primary
     * @param string $Secondary
     * @param string $Accent
     * @param string $any
     */
    public function __construct($Primary = null, $Secondary = null, $Accent = null, $any = null)
    {
      $this->Primary = $Primary;
      $this->Secondary = $Secondary;
      $this->Accent = $Accent;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getPrimary()
    {
      return $this->Primary;
    }

    /**
     * @param string $Primary
     * @return \EbayWsdl\StoreColorType
     */
    public function setPrimary($Primary)
    {
      $this->Primary = $Primary;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondary()
    {
      return $this->Secondary;
    }

    /**
     * @param string $Secondary
     * @return \EbayWsdl\StoreColorType
     */
    public function setSecondary($Secondary)
    {
      $this->Secondary = $Secondary;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccent()
    {
      return $this->Accent;
    }

    /**
     * @param string $Accent
     * @return \EbayWsdl\StoreColorType
     */
    public function setAccent($Accent)
    {
      $this->Accent = $Accent;
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
     * @return \EbayWsdl\StoreColorType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
