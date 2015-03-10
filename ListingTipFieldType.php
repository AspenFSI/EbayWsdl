<?php

namespace EbayWsdl;

class ListingTipFieldType
{

    /**
     * @var string $ListingTipFieldID
     */
    protected $ListingTipFieldID = null;

    /**
     * @var string $FieldTip
     */
    protected $FieldTip = null;

    /**
     * @var string $CurrentFieldText
     */
    protected $CurrentFieldText = null;

    /**
     * @var string $CurrentFieldValue
     */
    protected $CurrentFieldValue = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ListingTipFieldID
     * @param string $FieldTip
     * @param string $CurrentFieldText
     * @param string $CurrentFieldValue
     * @param string $any
     */
    public function __construct($ListingTipFieldID = null, $FieldTip = null, $CurrentFieldText = null, $CurrentFieldValue = null, $any = null)
    {
      $this->ListingTipFieldID = $ListingTipFieldID;
      $this->FieldTip = $FieldTip;
      $this->CurrentFieldText = $CurrentFieldText;
      $this->CurrentFieldValue = $CurrentFieldValue;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getListingTipFieldID()
    {
      return $this->ListingTipFieldID;
    }

    /**
     * @param string $ListingTipFieldID
     * @return \EbayWsdl\ListingTipFieldType
     */
    public function setListingTipFieldID($ListingTipFieldID)
    {
      $this->ListingTipFieldID = $ListingTipFieldID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldTip()
    {
      return $this->FieldTip;
    }

    /**
     * @param string $FieldTip
     * @return \EbayWsdl\ListingTipFieldType
     */
    public function setFieldTip($FieldTip)
    {
      $this->FieldTip = $FieldTip;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentFieldText()
    {
      return $this->CurrentFieldText;
    }

    /**
     * @param string $CurrentFieldText
     * @return \EbayWsdl\ListingTipFieldType
     */
    public function setCurrentFieldText($CurrentFieldText)
    {
      $this->CurrentFieldText = $CurrentFieldText;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentFieldValue()
    {
      return $this->CurrentFieldValue;
    }

    /**
     * @param string $CurrentFieldValue
     * @return \EbayWsdl\ListingTipFieldType
     */
    public function setCurrentFieldValue($CurrentFieldValue)
    {
      $this->CurrentFieldValue = $CurrentFieldValue;
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
     * @return \EbayWsdl\ListingTipFieldType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
