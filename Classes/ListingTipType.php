<?php

namespace EbayWsdl\Classes;

class ListingTipType
{

    /**
     * @var string $ListingTipID
     */
    protected $ListingTipID = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var ListingTipMessageType $Message
     */
    protected $Message = null;

    /**
     * @var ListingTipFieldType $Field
     */
    protected $Field = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ListingTipID
     * @param int $Priority
     * @param ListingTipMessageType $Message
     * @param ListingTipFieldType $Field
     * @param string $any
     */
    public function __construct($ListingTipID = null, $Priority = null, $Message = null, $Field = null, $any = null)
    {
      $this->ListingTipID = $ListingTipID;
      $this->Priority = $Priority;
      $this->Message = $Message;
      $this->Field = $Field;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getListingTipID()
    {
      return $this->ListingTipID;
    }

    /**
     * @param string $ListingTipID
     * @return \EbayWsdl\Classes\ListingTipType
     */
    public function setListingTipID($ListingTipID)
    {
      $this->ListingTipID = $ListingTipID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return \EbayWsdl\Classes\ListingTipType
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return ListingTipMessageType
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param ListingTipMessageType $Message
     * @return \EbayWsdl\Classes\ListingTipType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return ListingTipFieldType
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param ListingTipFieldType $Field
     * @return \EbayWsdl\Classes\ListingTipType
     */
    public function setField($Field)
    {
      $this->Field = $Field;
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
     * @return \EbayWsdl\Classes\ListingTipType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
