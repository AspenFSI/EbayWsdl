<?php

namespace EbayWsdl;

class AccountSummaryType
{

    /**
     * @var AccountStateCodeType $AccountState
     */
    protected $AccountState = null;

    /**
     * @var AmountType $InvoicePayment
     */
    protected $InvoicePayment = null;

    /**
     * @var AmountType $InvoiceCredit
     */
    protected $InvoiceCredit = null;

    /**
     * @var AmountType $InvoiceNewFee
     */
    protected $InvoiceNewFee = null;

    /**
     * @var AdditionalAccountType[] $AdditionalAccount
     */
    protected $AdditionalAccount = null;

    /**
     * @var AmountType $AmountPastDue
     */
    protected $AmountPastDue = null;

    /**
     * @var string $BankAccountInfo
     */
    protected $BankAccountInfo = null;

    /**
     * @var \DateTime $BankModifyDate
     */
    protected $BankModifyDate = null;

    /**
     * @var int $BillingCycleDate
     */
    protected $BillingCycleDate = null;

    /**
     * @var \DateTime $CreditCardExpiration
     */
    protected $CreditCardExpiration = null;

    /**
     * @var string $CreditCardInfo
     */
    protected $CreditCardInfo = null;

    /**
     * @var \DateTime $CreditCardModifyDate
     */
    protected $CreditCardModifyDate = null;

    /**
     * @var AmountType $CurrentBalance
     */
    protected $CurrentBalance = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var AmountType $InvoiceBalance
     */
    protected $InvoiceBalance = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var AmountType $LastAmountPaid
     */
    protected $LastAmountPaid = null;

    /**
     * @var \DateTime $LastPaymentDate
     */
    protected $LastPaymentDate = null;

    /**
     * @var boolean $PastDue
     */
    protected $PastDue = null;

    /**
     * @var SellerPaymentMethodCodeType $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AccountStateCodeType $AccountState
     * @param AmountType $InvoicePayment
     * @param AmountType $InvoiceCredit
     * @param AmountType $InvoiceNewFee
     * @param AdditionalAccountType[] $AdditionalAccount
     * @param AmountType $AmountPastDue
     * @param string $BankAccountInfo
     * @param \DateTime $BankModifyDate
     * @param int $BillingCycleDate
     * @param \DateTime $CreditCardExpiration
     * @param string $CreditCardInfo
     * @param \DateTime $CreditCardModifyDate
     * @param AmountType $CurrentBalance
     * @param string $Email
     * @param AmountType $InvoiceBalance
     * @param \DateTime $InvoiceDate
     * @param AmountType $LastAmountPaid
     * @param \DateTime $LastPaymentDate
     * @param boolean $PastDue
     * @param SellerPaymentMethodCodeType $PaymentMethod
     * @param string $any
     */
    public function __construct($AccountState = null, $InvoicePayment = null, $InvoiceCredit = null, $InvoiceNewFee = null, array $AdditionalAccount = null, $AmountPastDue = null, $BankAccountInfo = null, \DateTime $BankModifyDate = null, $BillingCycleDate = null, \DateTime $CreditCardExpiration = null, $CreditCardInfo = null, \DateTime $CreditCardModifyDate = null, $CurrentBalance = null, $Email = null, $InvoiceBalance = null, \DateTime $InvoiceDate = null, $LastAmountPaid = null, \DateTime $LastPaymentDate = null, $PastDue = null, $PaymentMethod = null, $any = null)
    {
      $this->AccountState = $AccountState;
      $this->InvoicePayment = $InvoicePayment;
      $this->InvoiceCredit = $InvoiceCredit;
      $this->InvoiceNewFee = $InvoiceNewFee;
      $this->AdditionalAccount = $AdditionalAccount;
      $this->AmountPastDue = $AmountPastDue;
      $this->BankAccountInfo = $BankAccountInfo;
      $this->BankModifyDate = $BankModifyDate ? $BankModifyDate->format(\DateTime::ATOM) : null;
      $this->BillingCycleDate = $BillingCycleDate;
      $this->CreditCardExpiration = $CreditCardExpiration ? $CreditCardExpiration->format(\DateTime::ATOM) : null;
      $this->CreditCardInfo = $CreditCardInfo;
      $this->CreditCardModifyDate = $CreditCardModifyDate ? $CreditCardModifyDate->format(\DateTime::ATOM) : null;
      $this->CurrentBalance = $CurrentBalance;
      $this->Email = $Email;
      $this->InvoiceBalance = $InvoiceBalance;
      $this->InvoiceDate = $InvoiceDate ? $InvoiceDate->format(\DateTime::ATOM) : null;
      $this->LastAmountPaid = $LastAmountPaid;
      $this->LastPaymentDate = $LastPaymentDate ? $LastPaymentDate->format(\DateTime::ATOM) : null;
      $this->PastDue = $PastDue;
      $this->PaymentMethod = $PaymentMethod;
      $this->any = $any;
    }

    /**
     * @return AccountStateCodeType
     */
    public function getAccountState()
    {
      return $this->AccountState;
    }

    /**
     * @param AccountStateCodeType $AccountState
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setAccountState($AccountState)
    {
      $this->AccountState = $AccountState;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInvoicePayment()
    {
      return $this->InvoicePayment;
    }

    /**
     * @param AmountType $InvoicePayment
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setInvoicePayment($InvoicePayment)
    {
      $this->InvoicePayment = $InvoicePayment;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInvoiceCredit()
    {
      return $this->InvoiceCredit;
    }

    /**
     * @param AmountType $InvoiceCredit
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setInvoiceCredit($InvoiceCredit)
    {
      $this->InvoiceCredit = $InvoiceCredit;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInvoiceNewFee()
    {
      return $this->InvoiceNewFee;
    }

    /**
     * @param AmountType $InvoiceNewFee
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setInvoiceNewFee($InvoiceNewFee)
    {
      $this->InvoiceNewFee = $InvoiceNewFee;
      return $this;
    }

    /**
     * @return AdditionalAccountType[]
     */
    public function getAdditionalAccount()
    {
      return $this->AdditionalAccount;
    }

    /**
     * @param AdditionalAccountType[] $AdditionalAccount
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setAdditionalAccount(array $AdditionalAccount)
    {
      $this->AdditionalAccount = $AdditionalAccount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAmountPastDue()
    {
      return $this->AmountPastDue;
    }

    /**
     * @param AmountType $AmountPastDue
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setAmountPastDue($AmountPastDue)
    {
      $this->AmountPastDue = $AmountPastDue;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountInfo()
    {
      return $this->BankAccountInfo;
    }

    /**
     * @param string $BankAccountInfo
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setBankAccountInfo($BankAccountInfo)
    {
      $this->BankAccountInfo = $BankAccountInfo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBankModifyDate()
    {
      if ($this->BankModifyDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BankModifyDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BankModifyDate
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setBankModifyDate(\DateTime $BankModifyDate)
    {
      $this->BankModifyDate = $BankModifyDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingCycleDate()
    {
      return $this->BillingCycleDate;
    }

    /**
     * @param int $BillingCycleDate
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setBillingCycleDate($BillingCycleDate)
    {
      $this->BillingCycleDate = $BillingCycleDate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreditCardExpiration()
    {
      if ($this->CreditCardExpiration == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreditCardExpiration);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreditCardExpiration
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setCreditCardExpiration(\DateTime $CreditCardExpiration)
    {
      $this->CreditCardExpiration = $CreditCardExpiration->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardInfo()
    {
      return $this->CreditCardInfo;
    }

    /**
     * @param string $CreditCardInfo
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setCreditCardInfo($CreditCardInfo)
    {
      $this->CreditCardInfo = $CreditCardInfo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreditCardModifyDate()
    {
      if ($this->CreditCardModifyDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreditCardModifyDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreditCardModifyDate
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setCreditCardModifyDate(\DateTime $CreditCardModifyDate)
    {
      $this->CreditCardModifyDate = $CreditCardModifyDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCurrentBalance()
    {
      return $this->CurrentBalance;
    }

    /**
     * @param AmountType $CurrentBalance
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setCurrentBalance($CurrentBalance)
    {
      $this->CurrentBalance = $CurrentBalance;
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
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInvoiceBalance()
    {
      return $this->InvoiceBalance;
    }

    /**
     * @param AmountType $InvoiceBalance
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setInvoiceBalance($InvoiceBalance)
    {
      $this->InvoiceBalance = $InvoiceBalance;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
      if ($this->InvoiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getLastAmountPaid()
    {
      return $this->LastAmountPaid;
    }

    /**
     * @param AmountType $LastAmountPaid
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setLastAmountPaid($LastAmountPaid)
    {
      $this->LastAmountPaid = $LastAmountPaid;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPaymentDate()
    {
      if ($this->LastPaymentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPaymentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPaymentDate
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setLastPaymentDate(\DateTime $LastPaymentDate)
    {
      $this->LastPaymentDate = $LastPaymentDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPastDue()
    {
      return $this->PastDue;
    }

    /**
     * @param boolean $PastDue
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setPastDue($PastDue)
    {
      $this->PastDue = $PastDue;
      return $this;
    }

    /**
     * @return SellerPaymentMethodCodeType
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param SellerPaymentMethodCodeType $PaymentMethod
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
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
     * @return \EbayWsdl\AccountSummaryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
