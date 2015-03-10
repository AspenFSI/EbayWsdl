<?php

namespace EbayWsdl;

class GetFeedbackRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var string $FeedbackID
     */
    protected $FeedbackID = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var CommentTypeCodeType[] $CommentType
     */
    protected $CommentType = null;

    /**
     * @var FeedbackTypeCodeType $FeedbackType
     */
    protected $FeedbackType = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param UserIDType $UserID
     * @param string $FeedbackID
     * @param ItemIDType $ItemID
     * @param string $TransactionID
     * @param CommentTypeCodeType[] $CommentType
     * @param FeedbackTypeCodeType $FeedbackType
     * @param PaginationType $Pagination
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $UserID = null, $FeedbackID = null, $ItemID = null, $TransactionID = null, array $CommentType = null, $FeedbackType = null, $Pagination = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->UserID = $UserID;
      $this->FeedbackID = $FeedbackID;
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->CommentType = $CommentType;
      $this->FeedbackType = $FeedbackType;
      $this->Pagination = $Pagination;
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
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
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setFeedbackID($FeedbackID)
    {
      $this->FeedbackID = $FeedbackID;
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
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
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
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return CommentTypeCodeType[]
     */
    public function getCommentType()
    {
      return $this->CommentType;
    }

    /**
     * @param CommentTypeCodeType[] $CommentType
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setCommentType(array $CommentType)
    {
      $this->CommentType = $CommentType;
      return $this;
    }

    /**
     * @return FeedbackTypeCodeType
     */
    public function getFeedbackType()
    {
      return $this->FeedbackType;
    }

    /**
     * @param FeedbackTypeCodeType $FeedbackType
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setFeedbackType($FeedbackType)
    {
      $this->FeedbackType = $FeedbackType;
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
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
     * @return \EbayWsdl\GetFeedbackRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
