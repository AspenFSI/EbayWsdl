<?php

namespace EbayWsdl;

class BidAssistantListType
{

    /**
     * @var int $BidGroupID
     */
    protected $BidGroupID = null;

    /**
     * @var boolean $IncludeNotes
     */
    protected $IncludeNotes = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $BidGroupID
     * @param boolean $IncludeNotes
     * @param string $any
     */
    public function __construct($BidGroupID = null, $IncludeNotes = null, $any = null)
    {
      $this->BidGroupID = $BidGroupID;
      $this->IncludeNotes = $IncludeNotes;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getBidGroupID()
    {
      return $this->BidGroupID;
    }

    /**
     * @param int $BidGroupID
     * @return \EbayWsdl\BidAssistantListType
     */
    public function setBidGroupID($BidGroupID)
    {
      $this->BidGroupID = $BidGroupID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeNotes()
    {
      return $this->IncludeNotes;
    }

    /**
     * @param boolean $IncludeNotes
     * @return \EbayWsdl\BidAssistantListType
     */
    public function setIncludeNotes($IncludeNotes)
    {
      $this->IncludeNotes = $IncludeNotes;
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
     * @return \EbayWsdl\BidAssistantListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
