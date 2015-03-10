<?php

namespace EbayWsdl;

class ReviewType
{

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var int $Rating
     */
    protected $Rating = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var \DateTime $CreationTime
     */
    protected $CreationTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $URL
     * @param string $Title
     * @param int $Rating
     * @param string $Text
     * @param UserIDType $UserID
     * @param \DateTime $CreationTime
     * @param string $any
     */
    public function __construct($URL = null, $Title = null, $Rating = null, $Text = null, $UserID = null, \DateTime $CreationTime = null, $any = null)
    {
      $this->URL = $URL;
      $this->Title = $Title;
      $this->Rating = $Rating;
      $this->Text = $Text;
      $this->UserID = $UserID;
      $this->CreationTime = $CreationTime ? $CreationTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
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
     * @return \EbayWsdl\ReviewType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
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
     * @return \EbayWsdl\ReviewType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return int
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param int $Rating
     * @return \EbayWsdl\ReviewType
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
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
     * @return \EbayWsdl\ReviewType
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return \EbayWsdl\ReviewType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
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
     * @return \EbayWsdl\ReviewType
     */
    public function setCreationTime(\DateTime $CreationTime)
    {
      $this->CreationTime = $CreationTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\ReviewType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
