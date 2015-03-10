<?php

namespace EbayWsdl;

class FeedbackDetailType
{

    /**
     * @var UserIDType $CommentingUser
     */
    protected $CommentingUser = null;

    /**
     * @var int $CommentingUserScore
     */
    protected $CommentingUserScore = null;

    /**
     * @var string $CommentText
     */
    protected $CommentText = null;

    /**
     * @var \DateTime $CommentTime
     */
    protected $CommentTime = null;

    /**
     * @var CommentTypeCodeType $CommentType
     */
    protected $CommentType = null;

    /**
     * @var string $FeedbackResponse
     */
    protected $FeedbackResponse = null;

    /**
     * @var string $Followup
     */
    protected $Followup = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var TradingRoleCodeType $Role
     */
    protected $Role = null;

    /**
     * @var string $ItemTitle
     */
    protected $ItemTitle = null;

    /**
     * @var AmountType $ItemPrice
     */
    protected $ItemPrice = null;

    /**
     * @var string $FeedbackID
     */
    protected $FeedbackID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var boolean $CommentReplaced
     */
    protected $CommentReplaced = null;

    /**
     * @var boolean $ResponseReplaced
     */
    protected $ResponseReplaced = null;

    /**
     * @var boolean $FollowUpReplaced
     */
    protected $FollowUpReplaced = null;

    /**
     * @var boolean $Countable
     */
    protected $Countable = null;

    /**
     * @var boolean $FeedbackRevised
     */
    protected $FeedbackRevised = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param UserIDType $CommentingUser
     * @param int $CommentingUserScore
     * @param string $CommentText
     * @param \DateTime $CommentTime
     * @param CommentTypeCodeType $CommentType
     * @param string $FeedbackResponse
     * @param string $Followup
     * @param ItemIDType $ItemID
     * @param TradingRoleCodeType $Role
     * @param string $ItemTitle
     * @param AmountType $ItemPrice
     * @param string $FeedbackID
     * @param string $TransactionID
     * @param boolean $CommentReplaced
     * @param boolean $ResponseReplaced
     * @param boolean $FollowUpReplaced
     * @param boolean $Countable
     * @param boolean $FeedbackRevised
     * @param string $OrderLineItemID
     * @param string $any
     */
    public function __construct($CommentingUser = null, $CommentingUserScore = null, $CommentText = null, \DateTime $CommentTime = null, $CommentType = null, $FeedbackResponse = null, $Followup = null, $ItemID = null, $Role = null, $ItemTitle = null, $ItemPrice = null, $FeedbackID = null, $TransactionID = null, $CommentReplaced = null, $ResponseReplaced = null, $FollowUpReplaced = null, $Countable = null, $FeedbackRevised = null, $OrderLineItemID = null, $any = null)
    {
      $this->CommentingUser = $CommentingUser;
      $this->CommentingUserScore = $CommentingUserScore;
      $this->CommentText = $CommentText;
      $this->CommentTime = $CommentTime ? $CommentTime->format(\DateTime::ATOM) : null;
      $this->CommentType = $CommentType;
      $this->FeedbackResponse = $FeedbackResponse;
      $this->Followup = $Followup;
      $this->ItemID = $ItemID;
      $this->Role = $Role;
      $this->ItemTitle = $ItemTitle;
      $this->ItemPrice = $ItemPrice;
      $this->FeedbackID = $FeedbackID;
      $this->TransactionID = $TransactionID;
      $this->CommentReplaced = $CommentReplaced;
      $this->ResponseReplaced = $ResponseReplaced;
      $this->FollowUpReplaced = $FollowUpReplaced;
      $this->Countable = $Countable;
      $this->FeedbackRevised = $FeedbackRevised;
      $this->OrderLineItemID = $OrderLineItemID;
      $this->any = $any;
    }

    /**
     * @return UserIDType
     */
    public function getCommentingUser()
    {
      return $this->CommentingUser;
    }

    /**
     * @param UserIDType $CommentingUser
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setCommentingUser($CommentingUser)
    {
      $this->CommentingUser = $CommentingUser;
      return $this;
    }

    /**
     * @return int
     */
    public function getCommentingUserScore()
    {
      return $this->CommentingUserScore;
    }

    /**
     * @param int $CommentingUserScore
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setCommentingUserScore($CommentingUserScore)
    {
      $this->CommentingUserScore = $CommentingUserScore;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommentText()
    {
      return $this->CommentText;
    }

    /**
     * @param string $CommentText
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setCommentText($CommentText)
    {
      $this->CommentText = $CommentText;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCommentTime()
    {
      if ($this->CommentTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CommentTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CommentTime
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setCommentTime(\DateTime $CommentTime)
    {
      $this->CommentTime = $CommentTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return CommentTypeCodeType
     */
    public function getCommentType()
    {
      return $this->CommentType;
    }

    /**
     * @param CommentTypeCodeType $CommentType
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setCommentType($CommentType)
    {
      $this->CommentType = $CommentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedbackResponse()
    {
      return $this->FeedbackResponse;
    }

    /**
     * @param string $FeedbackResponse
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setFeedbackResponse($FeedbackResponse)
    {
      $this->FeedbackResponse = $FeedbackResponse;
      return $this;
    }

    /**
     * @return string
     */
    public function getFollowup()
    {
      return $this->Followup;
    }

    /**
     * @param string $Followup
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setFollowup($Followup)
    {
      $this->Followup = $Followup;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return TradingRoleCodeType
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param TradingRoleCodeType $Role
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
      return $this->ItemTitle;
    }

    /**
     * @param string $ItemTitle
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setItemTitle($ItemTitle)
    {
      $this->ItemTitle = $ItemTitle;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getItemPrice()
    {
      return $this->ItemPrice;
    }

    /**
     * @param AmountType $ItemPrice
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setItemPrice($ItemPrice)
    {
      $this->ItemPrice = $ItemPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedbackID()
    {
      return $this->FeedbackID;
    }

    /**
     * @param string $FeedbackID
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setFeedbackID($FeedbackID)
    {
      $this->FeedbackID = $FeedbackID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCommentReplaced()
    {
      return $this->CommentReplaced;
    }

    /**
     * @param boolean $CommentReplaced
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setCommentReplaced($CommentReplaced)
    {
      $this->CommentReplaced = $CommentReplaced;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResponseReplaced()
    {
      return $this->ResponseReplaced;
    }

    /**
     * @param boolean $ResponseReplaced
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setResponseReplaced($ResponseReplaced)
    {
      $this->ResponseReplaced = $ResponseReplaced;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFollowUpReplaced()
    {
      return $this->FollowUpReplaced;
    }

    /**
     * @param boolean $FollowUpReplaced
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setFollowUpReplaced($FollowUpReplaced)
    {
      $this->FollowUpReplaced = $FollowUpReplaced;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCountable()
    {
      return $this->Countable;
    }

    /**
     * @param boolean $Countable
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setCountable($Countable)
    {
      $this->Countable = $Countable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFeedbackRevised()
    {
      return $this->FeedbackRevised;
    }

    /**
     * @param boolean $FeedbackRevised
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setFeedbackRevised($FeedbackRevised)
    {
      $this->FeedbackRevised = $FeedbackRevised;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineItemID()
    {
      return $this->OrderLineItemID;
    }

    /**
     * @param string $OrderLineItemID
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\FeedbackDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
