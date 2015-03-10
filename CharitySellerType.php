<?php

namespace EbayWsdl;

class CharitySellerType
{

    /**
     * @var CharitySellerStatusCodeType $CharitySellerStatus
     */
    protected $CharitySellerStatus = null;

    /**
     * @var CharityAffiliationType[] $CharityAffiliation
     */
    protected $CharityAffiliation = null;

    /**
     * @var boolean $TermsAndConditionsAccepted
     */
    protected $TermsAndConditionsAccepted = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CharitySellerStatusCodeType $CharitySellerStatus
     * @param CharityAffiliationType[] $CharityAffiliation
     * @param boolean $TermsAndConditionsAccepted
     * @param string $any
     */
    public function __construct($CharitySellerStatus = null, array $CharityAffiliation = null, $TermsAndConditionsAccepted = null, $any = null)
    {
      $this->CharitySellerStatus = $CharitySellerStatus;
      $this->CharityAffiliation = $CharityAffiliation;
      $this->TermsAndConditionsAccepted = $TermsAndConditionsAccepted;
      $this->any = $any;
    }

    /**
     * @return CharitySellerStatusCodeType
     */
    public function getCharitySellerStatus()
    {
      return $this->CharitySellerStatus;
    }

    /**
     * @param CharitySellerStatusCodeType $CharitySellerStatus
     * @return \EbayWsdl\CharitySellerType
     */
    public function setCharitySellerStatus($CharitySellerStatus)
    {
      $this->CharitySellerStatus = $CharitySellerStatus;
      return $this;
    }

    /**
     * @return CharityAffiliationType[]
     */
    public function getCharityAffiliation()
    {
      return $this->CharityAffiliation;
    }

    /**
     * @param CharityAffiliationType[] $CharityAffiliation
     * @return \EbayWsdl\CharitySellerType
     */
    public function setCharityAffiliation(array $CharityAffiliation)
    {
      $this->CharityAffiliation = $CharityAffiliation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTermsAndConditionsAccepted()
    {
      return $this->TermsAndConditionsAccepted;
    }

    /**
     * @param boolean $TermsAndConditionsAccepted
     * @return \EbayWsdl\CharitySellerType
     */
    public function setTermsAndConditionsAccepted($TermsAndConditionsAccepted)
    {
      $this->TermsAndConditionsAccepted = $TermsAndConditionsAccepted;
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
     * @return \EbayWsdl\CharitySellerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
