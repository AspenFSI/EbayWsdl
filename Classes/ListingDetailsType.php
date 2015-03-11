<?php

namespace EbayWsdl\Classes;

class ListingDetailsType
{

    /**
     * @var boolean $Adult
     */
    protected $Adult = null;

    /**
     * @var boolean $BindingAuction
     */
    protected $BindingAuction = null;

    /**
     * @var boolean $CheckoutEnabled
     */
    protected $CheckoutEnabled = null;

    /**
     * @var AmountType $ConvertedBuyItNowPrice
     */
    protected $ConvertedBuyItNowPrice = null;

    /**
     * @var AmountType $ConvertedStartPrice
     */
    protected $ConvertedStartPrice = null;

    /**
     * @var AmountType $ConvertedReservePrice
     */
    protected $ConvertedReservePrice = null;

    /**
     * @var boolean $HasReservePrice
     */
    protected $HasReservePrice = null;

    /**
     * @var ItemIDType $RelistedItemID
     */
    protected $RelistedItemID = null;

    /**
     * @var ItemIDType $SecondChanceOriginalItemID
     */
    protected $SecondChanceOriginalItemID = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var anyURI $ViewItemURL
     */
    protected $ViewItemURL = null;

    /**
     * @var boolean $HasUnansweredQuestions
     */
    protected $HasUnansweredQuestions = null;

    /**
     * @var boolean $HasPublicMessages
     */
    protected $HasPublicMessages = null;

    /**
     * @var boolean $BuyItNowAvailable
     */
    protected $BuyItNowAvailable = null;

    /**
     * @var SellerBusinessCodeType $SellerBusinessType
     */
    protected $SellerBusinessType = null;

    /**
     * @var AmountType $MinimumBestOfferPrice
     */
    protected $MinimumBestOfferPrice = null;

    /**
     * @var string $MinimumBestOfferMessage
     */
    protected $MinimumBestOfferMessage = null;

    /**
     * @var string $LocalListingDistance
     */
    protected $LocalListingDistance = null;

    /**
     * @var ItemIDType $TCROriginalItemID
     */
    protected $TCROriginalItemID = null;

    /**
     * @var anyURI $ViewItemURLForNaturalSearch
     */
    protected $ViewItemURLForNaturalSearch = null;

    /**
     * @var boolean $PayPerLeadEnabled
     */
    protected $PayPerLeadEnabled = null;

    /**
     * @var AmountType $BestOfferAutoAcceptPrice
     */
    protected $BestOfferAutoAcceptPrice = null;

    /**
     * @var EndReasonCodeType $EndingReason
     */
    protected $EndingReason = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $Adult
     * @param boolean $BindingAuction
     * @param boolean $CheckoutEnabled
     * @param AmountType $ConvertedBuyItNowPrice
     * @param AmountType $ConvertedStartPrice
     * @param AmountType $ConvertedReservePrice
     * @param boolean $HasReservePrice
     * @param ItemIDType $RelistedItemID
     * @param ItemIDType $SecondChanceOriginalItemID
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     * @param anyURI $ViewItemURL
     * @param boolean $HasUnansweredQuestions
     * @param boolean $HasPublicMessages
     * @param boolean $BuyItNowAvailable
     * @param SellerBusinessCodeType $SellerBusinessType
     * @param AmountType $MinimumBestOfferPrice
     * @param string $MinimumBestOfferMessage
     * @param string $LocalListingDistance
     * @param ItemIDType $TCROriginalItemID
     * @param anyURI $ViewItemURLForNaturalSearch
     * @param boolean $PayPerLeadEnabled
     * @param AmountType $BestOfferAutoAcceptPrice
     * @param EndReasonCodeType $EndingReason
     * @param string $any
     */
    public function __construct($Adult = null, $BindingAuction = null, $CheckoutEnabled = null, $ConvertedBuyItNowPrice = null, $ConvertedStartPrice = null, $ConvertedReservePrice = null, $HasReservePrice = null, $RelistedItemID = null, $SecondChanceOriginalItemID = null, \DateTime $StartTime = null, \DateTime $EndTime = null, $ViewItemURL = null, $HasUnansweredQuestions = null, $HasPublicMessages = null, $BuyItNowAvailable = null, $SellerBusinessType = null, $MinimumBestOfferPrice = null, $MinimumBestOfferMessage = null, $LocalListingDistance = null, $TCROriginalItemID = null, $ViewItemURLForNaturalSearch = null, $PayPerLeadEnabled = null, $BestOfferAutoAcceptPrice = null, $EndingReason = null, $any = null)
    {
      $this->Adult = $Adult;
      $this->BindingAuction = $BindingAuction;
      $this->CheckoutEnabled = $CheckoutEnabled;
      $this->ConvertedBuyItNowPrice = $ConvertedBuyItNowPrice;
      $this->ConvertedStartPrice = $ConvertedStartPrice;
      $this->ConvertedReservePrice = $ConvertedReservePrice;
      $this->HasReservePrice = $HasReservePrice;
      $this->RelistedItemID = $RelistedItemID;
      $this->SecondChanceOriginalItemID = $SecondChanceOriginalItemID;
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->ViewItemURL = $ViewItemURL;
      $this->HasUnansweredQuestions = $HasUnansweredQuestions;
      $this->HasPublicMessages = $HasPublicMessages;
      $this->BuyItNowAvailable = $BuyItNowAvailable;
      $this->SellerBusinessType = $SellerBusinessType;
      $this->MinimumBestOfferPrice = $MinimumBestOfferPrice;
      $this->MinimumBestOfferMessage = $MinimumBestOfferMessage;
      $this->LocalListingDistance = $LocalListingDistance;
      $this->TCROriginalItemID = $TCROriginalItemID;
      $this->ViewItemURLForNaturalSearch = $ViewItemURLForNaturalSearch;
      $this->PayPerLeadEnabled = $PayPerLeadEnabled;
      $this->BestOfferAutoAcceptPrice = $BestOfferAutoAcceptPrice;
      $this->EndingReason = $EndingReason;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getAdult()
    {
      return $this->Adult;
    }

    /**
     * @param boolean $Adult
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setAdult($Adult)
    {
      $this->Adult = $Adult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBindingAuction()
    {
      return $this->BindingAuction;
    }

    /**
     * @param boolean $BindingAuction
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setBindingAuction($BindingAuction)
    {
      $this->BindingAuction = $BindingAuction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckoutEnabled()
    {
      return $this->CheckoutEnabled;
    }

    /**
     * @param boolean $CheckoutEnabled
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setCheckoutEnabled($CheckoutEnabled)
    {
      $this->CheckoutEnabled = $CheckoutEnabled;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedBuyItNowPrice()
    {
      return $this->ConvertedBuyItNowPrice;
    }

    /**
     * @param AmountType $ConvertedBuyItNowPrice
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setConvertedBuyItNowPrice($ConvertedBuyItNowPrice)
    {
      $this->ConvertedBuyItNowPrice = $ConvertedBuyItNowPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedStartPrice()
    {
      return $this->ConvertedStartPrice;
    }

    /**
     * @param AmountType $ConvertedStartPrice
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setConvertedStartPrice($ConvertedStartPrice)
    {
      $this->ConvertedStartPrice = $ConvertedStartPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedReservePrice()
    {
      return $this->ConvertedReservePrice;
    }

    /**
     * @param AmountType $ConvertedReservePrice
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setConvertedReservePrice($ConvertedReservePrice)
    {
      $this->ConvertedReservePrice = $ConvertedReservePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasReservePrice()
    {
      return $this->HasReservePrice;
    }

    /**
     * @param boolean $HasReservePrice
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setHasReservePrice($HasReservePrice)
    {
      $this->HasReservePrice = $HasReservePrice;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getRelistedItemID()
    {
      return $this->RelistedItemID;
    }

    /**
     * @param ItemIDType $RelistedItemID
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setRelistedItemID($RelistedItemID)
    {
      $this->RelistedItemID = $RelistedItemID;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getSecondChanceOriginalItemID()
    {
      return $this->SecondChanceOriginalItemID;
    }

    /**
     * @param ItemIDType $SecondChanceOriginalItemID
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setSecondChanceOriginalItemID($SecondChanceOriginalItemID)
    {
      $this->SecondChanceOriginalItemID = $SecondChanceOriginalItemID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setStartTime(\DateTime $StartTime)
    {
      $this->StartTime = $StartTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getViewItemURL()
    {
      return $this->ViewItemURL;
    }

    /**
     * @param anyURI $ViewItemURL
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setViewItemURL($ViewItemURL)
    {
      $this->ViewItemURL = $ViewItemURL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasUnansweredQuestions()
    {
      return $this->HasUnansweredQuestions;
    }

    /**
     * @param boolean $HasUnansweredQuestions
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setHasUnansweredQuestions($HasUnansweredQuestions)
    {
      $this->HasUnansweredQuestions = $HasUnansweredQuestions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasPublicMessages()
    {
      return $this->HasPublicMessages;
    }

    /**
     * @param boolean $HasPublicMessages
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setHasPublicMessages($HasPublicMessages)
    {
      $this->HasPublicMessages = $HasPublicMessages;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuyItNowAvailable()
    {
      return $this->BuyItNowAvailable;
    }

    /**
     * @param boolean $BuyItNowAvailable
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setBuyItNowAvailable($BuyItNowAvailable)
    {
      $this->BuyItNowAvailable = $BuyItNowAvailable;
      return $this;
    }

    /**
     * @return SellerBusinessCodeType
     */
    public function getSellerBusinessType()
    {
      return $this->SellerBusinessType;
    }

    /**
     * @param SellerBusinessCodeType $SellerBusinessType
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setSellerBusinessType($SellerBusinessType)
    {
      $this->SellerBusinessType = $SellerBusinessType;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMinimumBestOfferPrice()
    {
      return $this->MinimumBestOfferPrice;
    }

    /**
     * @param AmountType $MinimumBestOfferPrice
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setMinimumBestOfferPrice($MinimumBestOfferPrice)
    {
      $this->MinimumBestOfferPrice = $MinimumBestOfferPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimumBestOfferMessage()
    {
      return $this->MinimumBestOfferMessage;
    }

    /**
     * @param string $MinimumBestOfferMessage
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setMinimumBestOfferMessage($MinimumBestOfferMessage)
    {
      $this->MinimumBestOfferMessage = $MinimumBestOfferMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalListingDistance()
    {
      return $this->LocalListingDistance;
    }

    /**
     * @param string $LocalListingDistance
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setLocalListingDistance($LocalListingDistance)
    {
      $this->LocalListingDistance = $LocalListingDistance;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getTCROriginalItemID()
    {
      return $this->TCROriginalItemID;
    }

    /**
     * @param ItemIDType $TCROriginalItemID
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setTCROriginalItemID($TCROriginalItemID)
    {
      $this->TCROriginalItemID = $TCROriginalItemID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getViewItemURLForNaturalSearch()
    {
      return $this->ViewItemURLForNaturalSearch;
    }

    /**
     * @param anyURI $ViewItemURLForNaturalSearch
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setViewItemURLForNaturalSearch($ViewItemURLForNaturalSearch)
    {
      $this->ViewItemURLForNaturalSearch = $ViewItemURLForNaturalSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPerLeadEnabled()
    {
      return $this->PayPerLeadEnabled;
    }

    /**
     * @param boolean $PayPerLeadEnabled
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setPayPerLeadEnabled($PayPerLeadEnabled)
    {
      $this->PayPerLeadEnabled = $PayPerLeadEnabled;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBestOfferAutoAcceptPrice()
    {
      return $this->BestOfferAutoAcceptPrice;
    }

    /**
     * @param AmountType $BestOfferAutoAcceptPrice
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setBestOfferAutoAcceptPrice($BestOfferAutoAcceptPrice)
    {
      $this->BestOfferAutoAcceptPrice = $BestOfferAutoAcceptPrice;
      return $this;
    }

    /**
     * @return EndReasonCodeType
     */
    public function getEndingReason()
    {
      return $this->EndingReason;
    }

    /**
     * @param EndReasonCodeType $EndingReason
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setEndingReason($EndingReason)
    {
      $this->EndingReason = $EndingReason;
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
     * @return \EbayWsdl\Classes\ListingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
