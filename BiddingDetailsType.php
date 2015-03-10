<?php

namespace EbayWsdl;

class BiddingDetailsType
{

    /**
     * @var AmountType $ConvertedMaxBid
     */
    protected $ConvertedMaxBid = null;

    /**
     * @var AmountType $MaxBid
     */
    protected $MaxBid = null;

    /**
     * @var int $QuantityBid
     */
    protected $QuantityBid = null;

    /**
     * @var int $QuantityWon
     */
    protected $QuantityWon = null;

    /**
     * @var boolean $Winning
     */
    protected $Winning = null;

    /**
     * @var boolean $BidAssistant
     */
    protected $BidAssistant = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $ConvertedMaxBid
     * @param AmountType $MaxBid
     * @param int $QuantityBid
     * @param int $QuantityWon
     * @param boolean $Winning
     * @param boolean $BidAssistant
     * @param string $any
     */
    public function __construct($ConvertedMaxBid = null, $MaxBid = null, $QuantityBid = null, $QuantityWon = null, $Winning = null, $BidAssistant = null, $any = null)
    {
      $this->ConvertedMaxBid = $ConvertedMaxBid;
      $this->MaxBid = $MaxBid;
      $this->QuantityBid = $QuantityBid;
      $this->QuantityWon = $QuantityWon;
      $this->Winning = $Winning;
      $this->BidAssistant = $BidAssistant;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getConvertedMaxBid()
    {
      return $this->ConvertedMaxBid;
    }

    /**
     * @param AmountType $ConvertedMaxBid
     * @return \EbayWsdl\BiddingDetailsType
     */
    public function setConvertedMaxBid($ConvertedMaxBid)
    {
      $this->ConvertedMaxBid = $ConvertedMaxBid;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMaxBid()
    {
      return $this->MaxBid;
    }

    /**
     * @param AmountType $MaxBid
     * @return \EbayWsdl\BiddingDetailsType
     */
    public function setMaxBid($MaxBid)
    {
      $this->MaxBid = $MaxBid;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityBid()
    {
      return $this->QuantityBid;
    }

    /**
     * @param int $QuantityBid
     * @return \EbayWsdl\BiddingDetailsType
     */
    public function setQuantityBid($QuantityBid)
    {
      $this->QuantityBid = $QuantityBid;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityWon()
    {
      return $this->QuantityWon;
    }

    /**
     * @param int $QuantityWon
     * @return \EbayWsdl\BiddingDetailsType
     */
    public function setQuantityWon($QuantityWon)
    {
      $this->QuantityWon = $QuantityWon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWinning()
    {
      return $this->Winning;
    }

    /**
     * @param boolean $Winning
     * @return \EbayWsdl\BiddingDetailsType
     */
    public function setWinning($Winning)
    {
      $this->Winning = $Winning;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBidAssistant()
    {
      return $this->BidAssistant;
    }

    /**
     * @param boolean $BidAssistant
     * @return \EbayWsdl\BiddingDetailsType
     */
    public function setBidAssistant($BidAssistant)
    {
      $this->BidAssistant = $BidAssistant;
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
     * @return \EbayWsdl\BiddingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
