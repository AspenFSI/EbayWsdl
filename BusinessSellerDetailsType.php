<?php

namespace EbayWsdl;

class BusinessSellerDetailsType
{

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $AdditionalContactInformation
     */
    protected $AdditionalContactInformation = null;

    /**
     * @var string $TradeRegistrationNumber
     */
    protected $TradeRegistrationNumber = null;

    /**
     * @var boolean $LegalInvoice
     */
    protected $LegalInvoice = null;

    /**
     * @var string $TermsAndConditions
     */
    protected $TermsAndConditions = null;

    /**
     * @var VATDetailsType $VATDetails
     */
    protected $VATDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AddressType $Address
     * @param string $Fax
     * @param string $Email
     * @param string $AdditionalContactInformation
     * @param string $TradeRegistrationNumber
     * @param boolean $LegalInvoice
     * @param string $TermsAndConditions
     * @param VATDetailsType $VATDetails
     * @param string $any
     */
    public function __construct($Address = null, $Fax = null, $Email = null, $AdditionalContactInformation = null, $TradeRegistrationNumber = null, $LegalInvoice = null, $TermsAndConditions = null, $VATDetails = null, $any = null)
    {
      $this->Address = $Address;
      $this->Fax = $Fax;
      $this->Email = $Email;
      $this->AdditionalContactInformation = $AdditionalContactInformation;
      $this->TradeRegistrationNumber = $TradeRegistrationNumber;
      $this->LegalInvoice = $LegalInvoice;
      $this->TermsAndConditions = $TermsAndConditions;
      $this->VATDetails = $VATDetails;
      $this->any = $any;
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
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
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
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalContactInformation()
    {
      return $this->AdditionalContactInformation;
    }

    /**
     * @param string $AdditionalContactInformation
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setAdditionalContactInformation($AdditionalContactInformation)
    {
      $this->AdditionalContactInformation = $AdditionalContactInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradeRegistrationNumber()
    {
      return $this->TradeRegistrationNumber;
    }

    /**
     * @param string $TradeRegistrationNumber
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setTradeRegistrationNumber($TradeRegistrationNumber)
    {
      $this->TradeRegistrationNumber = $TradeRegistrationNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLegalInvoice()
    {
      return $this->LegalInvoice;
    }

    /**
     * @param boolean $LegalInvoice
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setLegalInvoice($LegalInvoice)
    {
      $this->LegalInvoice = $LegalInvoice;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsAndConditions()
    {
      return $this->TermsAndConditions;
    }

    /**
     * @param string $TermsAndConditions
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setTermsAndConditions($TermsAndConditions)
    {
      $this->TermsAndConditions = $TermsAndConditions;
      return $this;
    }

    /**
     * @return VATDetailsType
     */
    public function getVATDetails()
    {
      return $this->VATDetails;
    }

    /**
     * @param VATDetailsType $VATDetails
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setVATDetails($VATDetails)
    {
      $this->VATDetails = $VATDetails;
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
     * @return \EbayWsdl\BusinessSellerDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
