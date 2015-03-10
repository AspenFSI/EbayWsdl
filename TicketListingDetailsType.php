<?php

namespace EbayWsdl;

class TicketListingDetailsType
{

    /**
     * @var string $EventTitle
     */
    protected $EventTitle = null;

    /**
     * @var string $Venue
     */
    protected $Venue = null;

    /**
     * @var string $PrintedDate
     */
    protected $PrintedDate = null;

    /**
     * @var string $PrintedTime
     */
    protected $PrintedTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $EventTitle
     * @param string $Venue
     * @param string $PrintedDate
     * @param string $PrintedTime
     * @param string $any
     */
    public function __construct($EventTitle = null, $Venue = null, $PrintedDate = null, $PrintedTime = null, $any = null)
    {
      $this->EventTitle = $EventTitle;
      $this->Venue = $Venue;
      $this->PrintedDate = $PrintedDate;
      $this->PrintedTime = $PrintedTime;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getEventTitle()
    {
      return $this->EventTitle;
    }

    /**
     * @param string $EventTitle
     * @return \EbayWsdl\TicketListingDetailsType
     */
    public function setEventTitle($EventTitle)
    {
      $this->EventTitle = $EventTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getVenue()
    {
      return $this->Venue;
    }

    /**
     * @param string $Venue
     * @return \EbayWsdl\TicketListingDetailsType
     */
    public function setVenue($Venue)
    {
      $this->Venue = $Venue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintedDate()
    {
      return $this->PrintedDate;
    }

    /**
     * @param string $PrintedDate
     * @return \EbayWsdl\TicketListingDetailsType
     */
    public function setPrintedDate($PrintedDate)
    {
      $this->PrintedDate = $PrintedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintedTime()
    {
      return $this->PrintedTime;
    }

    /**
     * @param string $PrintedTime
     * @return \EbayWsdl\TicketListingDetailsType
     */
    public function setPrintedTime($PrintedTime)
    {
      $this->PrintedTime = $PrintedTime;
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
     * @return \EbayWsdl\TicketListingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
