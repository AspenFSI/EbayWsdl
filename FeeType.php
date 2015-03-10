<?php

namespace EbayWsdl;

class FeeType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var AmountType $Fee
     */
    protected $Fee = null;

    /**
     * @var AmountType $PromotionalDiscount
     */
    protected $PromotionalDiscount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param AmountType $Fee
     * @param AmountType $PromotionalDiscount
     * @param string $any
     */
    public function __construct($Name = null, $Fee = null, $PromotionalDiscount = null, $any = null)
    {
      $this->Name = $Name;
      $this->Fee = $Fee;
      $this->PromotionalDiscount = $PromotionalDiscount;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\FeeType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param AmountType $Fee
     * @return \EbayWsdl\FeeType
     */
    public function setFee($Fee)
    {
      $this->Fee = $Fee;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPromotionalDiscount()
    {
      return $this->PromotionalDiscount;
    }

    /**
     * @param AmountType $PromotionalDiscount
     * @return \EbayWsdl\FeeType
     */
    public function setPromotionalDiscount($PromotionalDiscount)
    {
      $this->PromotionalDiscount = $PromotionalDiscount;
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
     * @return \EbayWsdl\FeeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
