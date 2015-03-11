<?php

namespace EbayWsdl\Classes;

class DisputeType
{

    /**
     * @var DisputeIDType $DisputeID
     */
    protected $DisputeID = null;

    /**
     * @var DisputeRecordTypeCodeType $DisputeRecordType
     */
    protected $DisputeRecordType = null;

    /**
     * @var DisputeStateCodeType $DisputeState
     */
    protected $DisputeState = null;

    /**
     * @var DisputeStatusCodeType $DisputeStatus
     */
    protected $DisputeStatus = null;

    /**
     * @var TradingRoleCodeType $OtherPartyRole
     */
    protected $OtherPartyRole = null;

    /**
     * @var string $OtherPartyName
     */
    protected $OtherPartyName = null;

    /**
     * @var TradingRoleCodeType $UserRole
     */
    protected $UserRole = null;

    /**
     * @var UserIDType $BuyerUserID
     */
    protected $BuyerUserID = null;

    /**
     * @var UserIDType $SellerUserID
     */
    protected $SellerUserID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var DisputeReasonCodeType $DisputeReason
     */
    protected $DisputeReason = null;

    /**
     * @var DisputeExplanationCodeType $DisputeExplanation
     */
    protected $DisputeExplanation = null;

    /**
     * @var DisputeCreditEligibilityCodeType $DisputeCreditEligibility
     */
    protected $DisputeCreditEligibility = null;

    /**
     * @var \DateTime $DisputeCreatedTime
     */
    protected $DisputeCreatedTime = null;

    /**
     * @var \DateTime $DisputeModifiedTime
     */
    protected $DisputeModifiedTime = null;

    /**
     * @var DisputeResolutionType[] $DisputeResolution
     */
    protected $DisputeResolution = null;

    /**
     * @var DisputeMessageType[] $DisputeMessage
     */
    protected $DisputeMessage = null;

    /**
     * @var boolean $Escalation
     */
    protected $Escalation = null;

    /**
     * @var boolean $PurchaseProtection
     */
    protected $PurchaseProtection = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param DisputeIDType $DisputeID
     * @param DisputeRecordTypeCodeType $DisputeRecordType
     * @param DisputeStateCodeType $DisputeState
     * @param DisputeStatusCodeType $DisputeStatus
     * @param TradingRoleCodeType $OtherPartyRole
     * @param string $OtherPartyName
     * @param TradingRoleCodeType $UserRole
     * @param UserIDType $BuyerUserID
     * @param UserIDType $SellerUserID
     * @param string $TransactionID
     * @param ItemType $Item
     * @param DisputeReasonCodeType $DisputeReason
     * @param DisputeExplanationCodeType $DisputeExplanation
     * @param DisputeCreditEligibilityCodeType $DisputeCreditEligibility
     * @param \DateTime $DisputeCreatedTime
     * @param \DateTime $DisputeModifiedTime
     * @param DisputeResolutionType[] $DisputeResolution
     * @param DisputeMessageType[] $DisputeMessage
     * @param boolean $Escalation
     * @param boolean $PurchaseProtection
     * @param string $OrderLineItemID
     * @param string $any
     */
    public function __construct($DisputeID = null, $DisputeRecordType = null, $DisputeState = null, $DisputeStatus = null, $OtherPartyRole = null, $OtherPartyName = null, $UserRole = null, $BuyerUserID = null, $SellerUserID = null, $TransactionID = null, $Item = null, $DisputeReason = null, $DisputeExplanation = null, $DisputeCreditEligibility = null, \DateTime $DisputeCreatedTime = null, \DateTime $DisputeModifiedTime = null, array $DisputeResolution = null, array $DisputeMessage = null, $Escalation = null, $PurchaseProtection = null, $OrderLineItemID = null, $any = null)
    {
      $this->DisputeID = $DisputeID;
      $this->DisputeRecordType = $DisputeRecordType;
      $this->DisputeState = $DisputeState;
      $this->DisputeStatus = $DisputeStatus;
      $this->OtherPartyRole = $OtherPartyRole;
      $this->OtherPartyName = $OtherPartyName;
      $this->UserRole = $UserRole;
      $this->BuyerUserID = $BuyerUserID;
      $this->SellerUserID = $SellerUserID;
      $this->TransactionID = $TransactionID;
      $this->Item = $Item;
      $this->DisputeReason = $DisputeReason;
      $this->DisputeExplanation = $DisputeExplanation;
      $this->DisputeCreditEligibility = $DisputeCreditEligibility;
      $this->DisputeCreatedTime = $DisputeCreatedTime ? $DisputeCreatedTime->format(\DateTime::ATOM) : null;
      $this->DisputeModifiedTime = $DisputeModifiedTime ? $DisputeModifiedTime->format(\DateTime::ATOM) : null;
      $this->DisputeResolution = $DisputeResolution;
      $this->DisputeMessage = $DisputeMessage;
      $this->Escalation = $Escalation;
      $this->PurchaseProtection = $PurchaseProtection;
      $this->OrderLineItemID = $OrderLineItemID;
      $this->any = $any;
    }

    /**
     * @return DisputeIDType
     */
    public function getDisputeID()
    {
      return $this->DisputeID;
    }

    /**
     * @param DisputeIDType $DisputeID
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeID($DisputeID)
    {
      $this->DisputeID = $DisputeID;
      return $this;
    }

    /**
     * @return DisputeRecordTypeCodeType
     */
    public function getDisputeRecordType()
    {
      return $this->DisputeRecordType;
    }

    /**
     * @param DisputeRecordTypeCodeType $DisputeRecordType
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeRecordType($DisputeRecordType)
    {
      $this->DisputeRecordType = $DisputeRecordType;
      return $this;
    }

    /**
     * @return DisputeStateCodeType
     */
    public function getDisputeState()
    {
      return $this->DisputeState;
    }

    /**
     * @param DisputeStateCodeType $DisputeState
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeState($DisputeState)
    {
      $this->DisputeState = $DisputeState;
      return $this;
    }

    /**
     * @return DisputeStatusCodeType
     */
    public function getDisputeStatus()
    {
      return $this->DisputeStatus;
    }

    /**
     * @param DisputeStatusCodeType $DisputeStatus
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeStatus($DisputeStatus)
    {
      $this->DisputeStatus = $DisputeStatus;
      return $this;
    }

    /**
     * @return TradingRoleCodeType
     */
    public function getOtherPartyRole()
    {
      return $this->OtherPartyRole;
    }

    /**
     * @param TradingRoleCodeType $OtherPartyRole
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setOtherPartyRole($OtherPartyRole)
    {
      $this->OtherPartyRole = $OtherPartyRole;
      return $this;
    }

    /**
     * @return string
     */
    public function getOtherPartyName()
    {
      return $this->OtherPartyName;
    }

    /**
     * @param string $OtherPartyName
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setOtherPartyName($OtherPartyName)
    {
      $this->OtherPartyName = $OtherPartyName;
      return $this;
    }

    /**
     * @return TradingRoleCodeType
     */
    public function getUserRole()
    {
      return $this->UserRole;
    }

    /**
     * @param TradingRoleCodeType $UserRole
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setUserRole($UserRole)
    {
      $this->UserRole = $UserRole;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getBuyerUserID()
    {
      return $this->BuyerUserID;
    }

    /**
     * @param UserIDType $BuyerUserID
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setBuyerUserID($BuyerUserID)
    {
      $this->BuyerUserID = $BuyerUserID;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getSellerUserID()
    {
      return $this->SellerUserID;
    }

    /**
     * @param UserIDType $SellerUserID
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setSellerUserID($SellerUserID)
    {
      $this->SellerUserID = $SellerUserID;
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
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return DisputeReasonCodeType
     */
    public function getDisputeReason()
    {
      return $this->DisputeReason;
    }

    /**
     * @param DisputeReasonCodeType $DisputeReason
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeReason($DisputeReason)
    {
      $this->DisputeReason = $DisputeReason;
      return $this;
    }

    /**
     * @return DisputeExplanationCodeType
     */
    public function getDisputeExplanation()
    {
      return $this->DisputeExplanation;
    }

    /**
     * @param DisputeExplanationCodeType $DisputeExplanation
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeExplanation($DisputeExplanation)
    {
      $this->DisputeExplanation = $DisputeExplanation;
      return $this;
    }

    /**
     * @return DisputeCreditEligibilityCodeType
     */
    public function getDisputeCreditEligibility()
    {
      return $this->DisputeCreditEligibility;
    }

    /**
     * @param DisputeCreditEligibilityCodeType $DisputeCreditEligibility
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeCreditEligibility($DisputeCreditEligibility)
    {
      $this->DisputeCreditEligibility = $DisputeCreditEligibility;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDisputeCreatedTime()
    {
      if ($this->DisputeCreatedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DisputeCreatedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DisputeCreatedTime
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeCreatedTime(\DateTime $DisputeCreatedTime)
    {
      $this->DisputeCreatedTime = $DisputeCreatedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDisputeModifiedTime()
    {
      if ($this->DisputeModifiedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DisputeModifiedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DisputeModifiedTime
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeModifiedTime(\DateTime $DisputeModifiedTime)
    {
      $this->DisputeModifiedTime = $DisputeModifiedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return DisputeResolutionType[]
     */
    public function getDisputeResolution()
    {
      return $this->DisputeResolution;
    }

    /**
     * @param DisputeResolutionType[] $DisputeResolution
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeResolution(array $DisputeResolution)
    {
      $this->DisputeResolution = $DisputeResolution;
      return $this;
    }

    /**
     * @return DisputeMessageType[]
     */
    public function getDisputeMessage()
    {
      return $this->DisputeMessage;
    }

    /**
     * @param DisputeMessageType[] $DisputeMessage
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setDisputeMessage(array $DisputeMessage)
    {
      $this->DisputeMessage = $DisputeMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEscalation()
    {
      return $this->Escalation;
    }

    /**
     * @param boolean $Escalation
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setEscalation($Escalation)
    {
      $this->Escalation = $Escalation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPurchaseProtection()
    {
      return $this->PurchaseProtection;
    }

    /**
     * @param boolean $PurchaseProtection
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setPurchaseProtection($PurchaseProtection)
    {
      $this->PurchaseProtection = $PurchaseProtection;
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
     * @return \EbayWsdl\Classes\DisputeType
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
     * @return \EbayWsdl\Classes\DisputeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
