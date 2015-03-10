<?php

namespace EbayWsdl;

class EndOfAuctionEmailPreferencesType
{

    /**
     * @var string $TemplateText
     */
    protected $TemplateText = null;

    /**
     * @var anyURI $LogoURL
     */
    protected $LogoURL = null;

    /**
     * @var EndOfAuctionLogoTypeCodeType $LogoType
     */
    protected $LogoType = null;

    /**
     * @var boolean $EmailCustomized
     */
    protected $EmailCustomized = null;

    /**
     * @var boolean $TextCustomized
     */
    protected $TextCustomized = null;

    /**
     * @var boolean $LogoCustomized
     */
    protected $LogoCustomized = null;

    /**
     * @var boolean $CopyEmail
     */
    protected $CopyEmail = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $TemplateText
     * @param anyURI $LogoURL
     * @param EndOfAuctionLogoTypeCodeType $LogoType
     * @param boolean $EmailCustomized
     * @param boolean $TextCustomized
     * @param boolean $LogoCustomized
     * @param boolean $CopyEmail
     * @param string $any
     */
    public function __construct($TemplateText = null, $LogoURL = null, $LogoType = null, $EmailCustomized = null, $TextCustomized = null, $LogoCustomized = null, $CopyEmail = null, $any = null)
    {
      $this->TemplateText = $TemplateText;
      $this->LogoURL = $LogoURL;
      $this->LogoType = $LogoType;
      $this->EmailCustomized = $EmailCustomized;
      $this->TextCustomized = $TextCustomized;
      $this->LogoCustomized = $LogoCustomized;
      $this->CopyEmail = $CopyEmail;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getTemplateText()
    {
      return $this->TemplateText;
    }

    /**
     * @param string $TemplateText
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setTemplateText($TemplateText)
    {
      $this->TemplateText = $TemplateText;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getLogoURL()
    {
      return $this->LogoURL;
    }

    /**
     * @param anyURI $LogoURL
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setLogoURL($LogoURL)
    {
      $this->LogoURL = $LogoURL;
      return $this;
    }

    /**
     * @return EndOfAuctionLogoTypeCodeType
     */
    public function getLogoType()
    {
      return $this->LogoType;
    }

    /**
     * @param EndOfAuctionLogoTypeCodeType $LogoType
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setLogoType($LogoType)
    {
      $this->LogoType = $LogoType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailCustomized()
    {
      return $this->EmailCustomized;
    }

    /**
     * @param boolean $EmailCustomized
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setEmailCustomized($EmailCustomized)
    {
      $this->EmailCustomized = $EmailCustomized;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTextCustomized()
    {
      return $this->TextCustomized;
    }

    /**
     * @param boolean $TextCustomized
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setTextCustomized($TextCustomized)
    {
      $this->TextCustomized = $TextCustomized;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLogoCustomized()
    {
      return $this->LogoCustomized;
    }

    /**
     * @param boolean $LogoCustomized
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setLogoCustomized($LogoCustomized)
    {
      $this->LogoCustomized = $LogoCustomized;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCopyEmail()
    {
      return $this->CopyEmail;
    }

    /**
     * @param boolean $CopyEmail
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setCopyEmail($CopyEmail)
    {
      $this->CopyEmail = $CopyEmail;
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
     * @return \EbayWsdl\EndOfAuctionEmailPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
