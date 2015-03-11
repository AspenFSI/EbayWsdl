<?php

namespace EbayWsdl\Classes;

class MyMessagesForwardDetailsType
{

    /**
     * @var \DateTime $UserForwardDate
     */
    protected $UserForwardDate = null;

    /**
     * @var string $ForwardMessageEncoding
     */
    protected $ForwardMessageEncoding = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $UserForwardDate
     * @param string $ForwardMessageEncoding
     * @param string $any
     */
    public function __construct(\DateTime $UserForwardDate = null, $ForwardMessageEncoding = null, $any = null)
    {
      $this->UserForwardDate = $UserForwardDate ? $UserForwardDate->format(\DateTime::ATOM) : null;
      $this->ForwardMessageEncoding = $ForwardMessageEncoding;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getUserForwardDate()
    {
      if ($this->UserForwardDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UserForwardDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UserForwardDate
     * @return \EbayWsdl\Classes\MyMessagesForwardDetailsType
     */
    public function setUserForwardDate(\DateTime $UserForwardDate)
    {
      $this->UserForwardDate = $UserForwardDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getForwardMessageEncoding()
    {
      return $this->ForwardMessageEncoding;
    }

    /**
     * @param string $ForwardMessageEncoding
     * @return \EbayWsdl\Classes\MyMessagesForwardDetailsType
     */
    public function setForwardMessageEncoding($ForwardMessageEncoding)
    {
      $this->ForwardMessageEncoding = $ForwardMessageEncoding;
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
     * @return \EbayWsdl\Classes\MyMessagesForwardDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
