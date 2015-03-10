<?php

namespace EbayWsdl;

class FlatShippingDiscountType
{

    /**
     * @var DiscountNameCodeType $DiscountName
     */
    protected $DiscountName = null;

    /**
     * @var DiscountProfileType[] $DiscountProfile
     */
    protected $DiscountProfile = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param DiscountNameCodeType $DiscountName
     * @param DiscountProfileType[] $DiscountProfile
     * @param string $any
     */
    public function __construct($DiscountName = null, array $DiscountProfile = null, $any = null)
    {
      $this->DiscountName = $DiscountName;
      $this->DiscountProfile = $DiscountProfile;
      $this->any = $any;
    }

    /**
     * @return DiscountNameCodeType
     */
    public function getDiscountName()
    {
      return $this->DiscountName;
    }

    /**
     * @param DiscountNameCodeType $DiscountName
     * @return \EbayWsdl\FlatShippingDiscountType
     */
    public function setDiscountName($DiscountName)
    {
      $this->DiscountName = $DiscountName;
      return $this;
    }

    /**
     * @return DiscountProfileType[]
     */
    public function getDiscountProfile()
    {
      return $this->DiscountProfile;
    }

    /**
     * @param DiscountProfileType[] $DiscountProfile
     * @return \EbayWsdl\FlatShippingDiscountType
     */
    public function setDiscountProfile(array $DiscountProfile)
    {
      $this->DiscountProfile = $DiscountProfile;
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
     * @return \EbayWsdl\FlatShippingDiscountType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
