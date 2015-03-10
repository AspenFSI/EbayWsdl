<?php

namespace EbayWsdl;

class LeaveFeedbackRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $CommentText
     */
    protected $CommentText = null;

    /**
     * @var CommentTypeCodeType $CommentType
     */
    protected $CommentType = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var UserIDType $TargetUser
     */
    protected $TargetUser = null;

    /**
     * @var ItemRatingDetailArrayType $SellerItemRatingDetailArray
     */
    protected $SellerItemRatingDetailArray = null;

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
     * @param ItemIDType $ItemID
     * @param string $CommentText
     * @param CommentTypeCodeType $CommentType
     * @param string $TransactionID
     * @param UserIDType $TargetUser
     * @param ItemRatingDetailArrayType $SellerItemRatingDetailArray
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $CommentText = null, $CommentType = null, $TransactionID = null, $TargetUser = null, $SellerItemRatingDetailArray = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->CommentText = $CommentText;
      $this->CommentType = $CommentType;
      $this->TransactionID = $TransactionID;
      $this->TargetUser = $TargetUser;
      $this->SellerItemRatingDetailArray = $SellerItemRatingDetailArray;
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\LeaveFeedbackRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
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
     * @return \EbayWsdl\LeaveFeedbackRequestType
     */
    public function setCommentText($CommentText)
    {
      $this->CommentText = $CommentText;
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
     * @return \EbayWsdl\LeaveFeedbackRequestType
     */
    public function setCommentType($CommentType)
    {
      $this->CommentType = $CommentType;
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
     * @return \EbayWsdl\LeaveFeedbackRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getTargetUser()
    {
      return $this->TargetUser;
    }

    /**
     * @param UserIDType $TargetUser
     * @return \EbayWsdl\LeaveFeedbackRequestType
     */
    public function setTargetUser($TargetUser)
    {
      $this->TargetUser = $TargetUser;
      return $this;
    }

    /**
     * @return ItemRatingDetailArrayType
     */
    public function getSellerItemRatingDetailArray()
    {
      return $this->SellerItemRatingDetailArray;
    }

    /**
     * @param ItemRatingDetailArrayType $SellerItemRatingDetailArray
     * @return \EbayWsdl\LeaveFeedbackRequestType
     */
    public function setSellerItemRatingDetailArray($SellerItemRatingDetailArray)
    {
      $this->SellerItemRatingDetailArray = $SellerItemRatingDetailArray;
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
     * @return \EbayWsdl\LeaveFeedbackRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
