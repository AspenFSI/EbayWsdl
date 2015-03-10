<?php

namespace EbayWsdl;

class BuyingGuideType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var int $ProductFinderID
     */
    protected $ProductFinderID = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var \DateTime $CreationTime
     */
    protected $CreationTime = null;

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param anyURI $URL
     * @param string $CategoryID
     * @param int $ProductFinderID
     * @param string $Title
     * @param string $Text
     * @param \DateTime $CreationTime
     * @param UserIDType $UserID
     * @param string $any
     */
    public function __construct($Name = null, $URL = null, $CategoryID = null, $ProductFinderID = null, $Title = null, $Text = null, \DateTime $CreationTime = null, $UserID = null, $any = null)
    {
      $this->Name = $Name;
      $this->URL = $URL;
      $this->CategoryID = $CategoryID;
      $this->ProductFinderID = $ProductFinderID;
      $this->Title = $Title;
      $this->Text = $Text;
      $this->CreationTime = $CreationTime ? $CreationTime->format(\DateTime::ATOM) : null;
      $this->UserID = $UserID;
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
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI $URL
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductFinderID()
    {
      return $this->ProductFinderID;
    }

    /**
     * @param int $ProductFinderID
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setProductFinderID($ProductFinderID)
    {
      $this->ProductFinderID = $ProductFinderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationTime()
    {
      if ($this->CreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationTime
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setCreationTime(\DateTime $CreationTime)
    {
      $this->CreationTime = $CreationTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
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
     * @return \EbayWsdl\BuyingGuideType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
