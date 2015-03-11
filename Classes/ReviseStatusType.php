<?php

namespace EbayWsdl\Classes;

class ReviseStatusType
{

    /**
     * @var boolean $ItemRevised
     */
    protected $ItemRevised = null;

    /**
     * @var boolean $BuyItNowAdded
     */
    protected $BuyItNowAdded = null;

    /**
     * @var boolean $BuyItNowLowered
     */
    protected $BuyItNowLowered = null;

    /**
     * @var boolean $ReserveLowered
     */
    protected $ReserveLowered = null;

    /**
     * @var boolean $ReserveRemoved
     */
    protected $ReserveRemoved = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $ItemRevised
     * @param boolean $BuyItNowAdded
     * @param boolean $BuyItNowLowered
     * @param boolean $ReserveLowered
     * @param boolean $ReserveRemoved
     * @param string $any
     */
    public function __construct($ItemRevised = null, $BuyItNowAdded = null, $BuyItNowLowered = null, $ReserveLowered = null, $ReserveRemoved = null, $any = null)
    {
      $this->ItemRevised = $ItemRevised;
      $this->BuyItNowAdded = $BuyItNowAdded;
      $this->BuyItNowLowered = $BuyItNowLowered;
      $this->ReserveLowered = $ReserveLowered;
      $this->ReserveRemoved = $ReserveRemoved;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getItemRevised()
    {
      return $this->ItemRevised;
    }

    /**
     * @param boolean $ItemRevised
     * @return \EbayWsdl\Classes\ReviseStatusType
     */
    public function setItemRevised($ItemRevised)
    {
      $this->ItemRevised = $ItemRevised;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuyItNowAdded()
    {
      return $this->BuyItNowAdded;
    }

    /**
     * @param boolean $BuyItNowAdded
     * @return \EbayWsdl\Classes\ReviseStatusType
     */
    public function setBuyItNowAdded($BuyItNowAdded)
    {
      $this->BuyItNowAdded = $BuyItNowAdded;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuyItNowLowered()
    {
      return $this->BuyItNowLowered;
    }

    /**
     * @param boolean $BuyItNowLowered
     * @return \EbayWsdl\Classes\ReviseStatusType
     */
    public function setBuyItNowLowered($BuyItNowLowered)
    {
      $this->BuyItNowLowered = $BuyItNowLowered;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReserveLowered()
    {
      return $this->ReserveLowered;
    }

    /**
     * @param boolean $ReserveLowered
     * @return \EbayWsdl\Classes\ReviseStatusType
     */
    public function setReserveLowered($ReserveLowered)
    {
      $this->ReserveLowered = $ReserveLowered;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReserveRemoved()
    {
      return $this->ReserveRemoved;
    }

    /**
     * @param boolean $ReserveRemoved
     * @return \EbayWsdl\Classes\ReviseStatusType
     */
    public function setReserveRemoved($ReserveRemoved)
    {
      $this->ReserveRemoved = $ReserveRemoved;
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
     * @return \EbayWsdl\Classes\ReviseStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
