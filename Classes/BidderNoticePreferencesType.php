<?php

namespace EbayWsdl\Classes;

class BidderNoticePreferencesType
{

    /**
     * @var boolean $UnsuccessfulBidderNoticeIncludeMyItems
     */
    protected $UnsuccessfulBidderNoticeIncludeMyItems = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $UnsuccessfulBidderNoticeIncludeMyItems
     * @param string $any
     */
    public function __construct($UnsuccessfulBidderNoticeIncludeMyItems = null, $any = null)
    {
      $this->UnsuccessfulBidderNoticeIncludeMyItems = $UnsuccessfulBidderNoticeIncludeMyItems;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getUnsuccessfulBidderNoticeIncludeMyItems()
    {
      return $this->UnsuccessfulBidderNoticeIncludeMyItems;
    }

    /**
     * @param boolean $UnsuccessfulBidderNoticeIncludeMyItems
     * @return \EbayWsdl\Classes\BidderNoticePreferencesType
     */
    public function setUnsuccessfulBidderNoticeIncludeMyItems($UnsuccessfulBidderNoticeIncludeMyItems)
    {
      $this->UnsuccessfulBidderNoticeIncludeMyItems = $UnsuccessfulBidderNoticeIncludeMyItems;
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
     * @return \EbayWsdl\Classes\BidderNoticePreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
