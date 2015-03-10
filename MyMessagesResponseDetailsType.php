<?php

namespace EbayWsdl;

class MyMessagesResponseDetailsType
{

    /**
     * @var boolean $ResponseEnabled
     */
    protected $ResponseEnabled = null;

    /**
     * @var anyURI $ResponseURL
     */
    protected $ResponseURL = null;

    /**
     * @var \DateTime $UserResponseDate
     */
    protected $UserResponseDate = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $ResponseEnabled
     * @param anyURI $ResponseURL
     * @param \DateTime $UserResponseDate
     * @param string $any
     */
    public function __construct($ResponseEnabled = null, $ResponseURL = null, \DateTime $UserResponseDate = null, $any = null)
    {
      $this->ResponseEnabled = $ResponseEnabled;
      $this->ResponseURL = $ResponseURL;
      $this->UserResponseDate = $UserResponseDate ? $UserResponseDate->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getResponseEnabled()
    {
      return $this->ResponseEnabled;
    }

    /**
     * @param boolean $ResponseEnabled
     * @return \EbayWsdl\MyMessagesResponseDetailsType
     */
    public function setResponseEnabled($ResponseEnabled)
    {
      $this->ResponseEnabled = $ResponseEnabled;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getResponseURL()
    {
      return $this->ResponseURL;
    }

    /**
     * @param anyURI $ResponseURL
     * @return \EbayWsdl\MyMessagesResponseDetailsType
     */
    public function setResponseURL($ResponseURL)
    {
      $this->ResponseURL = $ResponseURL;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUserResponseDate()
    {
      if ($this->UserResponseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UserResponseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UserResponseDate
     * @return \EbayWsdl\MyMessagesResponseDetailsType
     */
    public function setUserResponseDate(\DateTime $UserResponseDate)
    {
      $this->UserResponseDate = $UserResponseDate->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\MyMessagesResponseDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
