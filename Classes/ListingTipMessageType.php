<?php

namespace EbayWsdl\Classes;

class ListingTipMessageType
{

    /**
     * @var string $ListingTipMessageID
     */
    protected $ListingTipMessageID = null;

    /**
     * @var string $ShortMessage
     */
    protected $ShortMessage = null;

    /**
     * @var string $LongMessage
     */
    protected $LongMessage = null;

    /**
     * @var string $HelpURLPath
     */
    protected $HelpURLPath = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ListingTipMessageID
     * @param string $ShortMessage
     * @param string $LongMessage
     * @param string $HelpURLPath
     * @param string $any
     */
    public function __construct($ListingTipMessageID = null, $ShortMessage = null, $LongMessage = null, $HelpURLPath = null, $any = null)
    {
      $this->ListingTipMessageID = $ListingTipMessageID;
      $this->ShortMessage = $ShortMessage;
      $this->LongMessage = $LongMessage;
      $this->HelpURLPath = $HelpURLPath;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getListingTipMessageID()
    {
      return $this->ListingTipMessageID;
    }

    /**
     * @param string $ListingTipMessageID
     * @return \EbayWsdl\Classes\ListingTipMessageType
     */
    public function setListingTipMessageID($ListingTipMessageID)
    {
      $this->ListingTipMessageID = $ListingTipMessageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortMessage()
    {
      return $this->ShortMessage;
    }

    /**
     * @param string $ShortMessage
     * @return \EbayWsdl\Classes\ListingTipMessageType
     */
    public function setShortMessage($ShortMessage)
    {
      $this->ShortMessage = $ShortMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongMessage()
    {
      return $this->LongMessage;
    }

    /**
     * @param string $LongMessage
     * @return \EbayWsdl\Classes\ListingTipMessageType
     */
    public function setLongMessage($LongMessage)
    {
      $this->LongMessage = $LongMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getHelpURLPath()
    {
      return $this->HelpURLPath;
    }

    /**
     * @param string $HelpURLPath
     * @return \EbayWsdl\Classes\ListingTipMessageType
     */
    public function setHelpURLPath($HelpURLPath)
    {
      $this->HelpURLPath = $HelpURLPath;
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
     * @return \EbayWsdl\Classes\ListingTipMessageType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
