<?php

namespace EbayWsdl;

class WantItNowPostType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ItemIDType $PostID
     */
    protected $PostID = null;

    /**
     * @var SiteCodeType $Site
     */
    protected $Site = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var int $ResponseCount
     */
    protected $ResponseCount = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @param string $CategoryID
     * @param string $Description
     * @param ItemIDType $PostID
     * @param SiteCodeType $Site
     * @param \DateTime $StartTime
     * @param int $ResponseCount
     * @param string $Title
     */
    public function __construct($CategoryID = null, $Description = null, $PostID = null, $Site = null, \DateTime $StartTime = null, $ResponseCount = null, $Title = null)
    {
      $this->CategoryID = $CategoryID;
      $this->Description = $Description;
      $this->PostID = $PostID;
      $this->Site = $Site;
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->ResponseCount = $ResponseCount;
      $this->Title = $Title;
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
     * @return \EbayWsdl\WantItNowPostType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\WantItNowPostType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getPostID()
    {
      return $this->PostID;
    }

    /**
     * @param ItemIDType $PostID
     * @return \EbayWsdl\WantItNowPostType
     */
    public function setPostID($PostID)
    {
      $this->PostID = $PostID;
      return $this;
    }

    /**
     * @return SiteCodeType
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param SiteCodeType $Site
     * @return \EbayWsdl\WantItNowPostType
     */
    public function setSite($Site)
    {
      $this->Site = $Site;
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
     * @return \EbayWsdl\WantItNowPostType
     */
    public function setStartTime(\DateTime $StartTime)
    {
      $this->StartTime = $StartTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getResponseCount()
    {
      return $this->ResponseCount;
    }

    /**
     * @param int $ResponseCount
     * @return \EbayWsdl\WantItNowPostType
     */
    public function setResponseCount($ResponseCount)
    {
      $this->ResponseCount = $ResponseCount;
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
     * @return \EbayWsdl\WantItNowPostType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
