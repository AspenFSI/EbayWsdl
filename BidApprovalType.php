<?php

namespace EbayWsdl;

class BidApprovalType
{

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var AmountType $ApprovedBiddingLimit
     */
    protected $ApprovedBiddingLimit = null;

    /**
     * @var string $DeclinedComment
     */
    protected $DeclinedComment = null;

    /**
     * @var BidderStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param UserIDType $UserID
     * @param AmountType $ApprovedBiddingLimit
     * @param string $DeclinedComment
     * @param BidderStatusCodeType $Status
     * @param string $any
     */
    public function __construct($UserID = null, $ApprovedBiddingLimit = null, $DeclinedComment = null, $Status = null, $any = null)
    {
      $this->UserID = $UserID;
      $this->ApprovedBiddingLimit = $ApprovedBiddingLimit;
      $this->DeclinedComment = $DeclinedComment;
      $this->Status = $Status;
      $this->any = $any;
    }

    /**
     * @return UserIDType
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param UserIDType $UserID
     * @return \EbayWsdl\BidApprovalType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getApprovedBiddingLimit()
    {
      return $this->ApprovedBiddingLimit;
    }

    /**
     * @param AmountType $ApprovedBiddingLimit
     * @return \EbayWsdl\BidApprovalType
     */
    public function setApprovedBiddingLimit($ApprovedBiddingLimit)
    {
      $this->ApprovedBiddingLimit = $ApprovedBiddingLimit;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeclinedComment()
    {
      return $this->DeclinedComment;
    }

    /**
     * @param string $DeclinedComment
     * @return \EbayWsdl\BidApprovalType
     */
    public function setDeclinedComment($DeclinedComment)
    {
      $this->DeclinedComment = $DeclinedComment;
      return $this;
    }

    /**
     * @return BidderStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param BidderStatusCodeType $Status
     * @return \EbayWsdl\BidApprovalType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\BidApprovalType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
