<?php

namespace EbayWsdl;

class AdFormatLeadType
{

    /**
     * @var string $AdditionalInformation
     */
    protected $AdditionalInformation = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @var string $BestTimeToCall
     */
    protected $BestTimeToCall = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var \DateTime $SubmittedTime
     */
    protected $SubmittedTime = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $ItemTitle
     */
    protected $ItemTitle = null;

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var MemberMessageExchangeArrayType $MemberMessage
     */
    protected $MemberMessage = null;

    /**
     * @var AdFormatLeadStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var AmountType $LeadFee
     */
    protected $LeadFee = null;

    /**
     * @var string $ExternalEmail
     */
    protected $ExternalEmail = null;

    /**
     * @var string $PurchaseTimeFrame
     */
    protected $PurchaseTimeFrame = null;

    /**
     * @var string $TradeInYear
     */
    protected $TradeInYear = null;

    /**
     * @var string $TradeInMake
     */
    protected $TradeInMake = null;

    /**
     * @var string $TradeInModel
     */
    protected $TradeInModel = null;

    /**
     * @var boolean $FinancingAnswer
     */
    protected $FinancingAnswer = null;

    /**
     * @var boolean $Answer1
     */
    protected $Answer1 = null;

    /**
     * @var boolean $Answer2
     */
    protected $Answer2 = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $AdditionalInformation
     * @param AddressType $Address
     * @param string $BestTimeToCall
     * @param string $Email
     * @param \DateTime $SubmittedTime
     * @param ItemIDType $ItemID
     * @param string $ItemTitle
     * @param UserIDType $UserID
     * @param MemberMessageExchangeArrayType $MemberMessage
     * @param AdFormatLeadStatusCodeType $Status
     * @param AmountType $LeadFee
     * @param string $ExternalEmail
     * @param string $PurchaseTimeFrame
     * @param string $TradeInYear
     * @param string $TradeInMake
     * @param string $TradeInModel
     * @param boolean $FinancingAnswer
     * @param boolean $Answer1
     * @param boolean $Answer2
     * @param string $any
     */
    public function __construct($AdditionalInformation = null, $Address = null, $BestTimeToCall = null, $Email = null, \DateTime $SubmittedTime = null, $ItemID = null, $ItemTitle = null, $UserID = null, $MemberMessage = null, $Status = null, $LeadFee = null, $ExternalEmail = null, $PurchaseTimeFrame = null, $TradeInYear = null, $TradeInMake = null, $TradeInModel = null, $FinancingAnswer = null, $Answer1 = null, $Answer2 = null, $any = null)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      $this->Address = $Address;
      $this->BestTimeToCall = $BestTimeToCall;
      $this->Email = $Email;
      $this->SubmittedTime = $SubmittedTime ? $SubmittedTime->format(\DateTime::ATOM) : null;
      $this->ItemID = $ItemID;
      $this->ItemTitle = $ItemTitle;
      $this->UserID = $UserID;
      $this->MemberMessage = $MemberMessage;
      $this->Status = $Status;
      $this->LeadFee = $LeadFee;
      $this->ExternalEmail = $ExternalEmail;
      $this->PurchaseTimeFrame = $PurchaseTimeFrame;
      $this->TradeInYear = $TradeInYear;
      $this->TradeInMake = $TradeInMake;
      $this->TradeInModel = $TradeInModel;
      $this->FinancingAnswer = $FinancingAnswer;
      $this->Answer1 = $Answer1;
      $this->Answer2 = $Answer2;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
      return $this->AdditionalInformation;
    }

    /**
     * @param string $AdditionalInformation
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setAdditionalInformation($AdditionalInformation)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressType $Address
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getBestTimeToCall()
    {
      return $this->BestTimeToCall;
    }

    /**
     * @param string $BestTimeToCall
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setBestTimeToCall($BestTimeToCall)
    {
      $this->BestTimeToCall = $BestTimeToCall;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubmittedTime()
    {
      if ($this->SubmittedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SubmittedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SubmittedTime
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setSubmittedTime(\DateTime $SubmittedTime)
    {
      $this->SubmittedTime = $SubmittedTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
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
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setItemTitle($ItemTitle)
    {
      $this->ItemTitle = $ItemTitle;
      return $this;
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
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return MemberMessageExchangeArrayType
     */
    public function getMemberMessage()
    {
      return $this->MemberMessage;
    }

    /**
     * @param MemberMessageExchangeArrayType $MemberMessage
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setMemberMessage($MemberMessage)
    {
      $this->MemberMessage = $MemberMessage;
      return $this;
    }

    /**
     * @return AdFormatLeadStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param AdFormatLeadStatusCodeType $Status
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getLeadFee()
    {
      return $this->LeadFee;
    }

    /**
     * @param AmountType $LeadFee
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setLeadFee($LeadFee)
    {
      $this->LeadFee = $LeadFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalEmail()
    {
      return $this->ExternalEmail;
    }

    /**
     * @param string $ExternalEmail
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setExternalEmail($ExternalEmail)
    {
      $this->ExternalEmail = $ExternalEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseTimeFrame()
    {
      return $this->PurchaseTimeFrame;
    }

    /**
     * @param string $PurchaseTimeFrame
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setPurchaseTimeFrame($PurchaseTimeFrame)
    {
      $this->PurchaseTimeFrame = $PurchaseTimeFrame;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradeInYear()
    {
      return $this->TradeInYear;
    }

    /**
     * @param string $TradeInYear
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setTradeInYear($TradeInYear)
    {
      $this->TradeInYear = $TradeInYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradeInMake()
    {
      return $this->TradeInMake;
    }

    /**
     * @param string $TradeInMake
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setTradeInMake($TradeInMake)
    {
      $this->TradeInMake = $TradeInMake;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradeInModel()
    {
      return $this->TradeInModel;
    }

    /**
     * @param string $TradeInModel
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setTradeInModel($TradeInModel)
    {
      $this->TradeInModel = $TradeInModel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFinancingAnswer()
    {
      return $this->FinancingAnswer;
    }

    /**
     * @param boolean $FinancingAnswer
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setFinancingAnswer($FinancingAnswer)
    {
      $this->FinancingAnswer = $FinancingAnswer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAnswer1()
    {
      return $this->Answer1;
    }

    /**
     * @param boolean $Answer1
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setAnswer1($Answer1)
    {
      $this->Answer1 = $Answer1;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAnswer2()
    {
      return $this->Answer2;
    }

    /**
     * @param boolean $Answer2
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setAnswer2($Answer2)
    {
      $this->Answer2 = $Answer2;
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
     * @return \EbayWsdl\AdFormatLeadType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
