<?php

namespace EbayWsdl;

class TokenStatusType
{

    /**
     * @var TokenStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var string $EIASToken
     */
    protected $EIASToken = null;

    /**
     * @var \DateTime $ExpirationTime
     */
    protected $ExpirationTime = null;

    /**
     * @var \DateTime $RevocationTime
     */
    protected $RevocationTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TokenStatusCodeType $Status
     * @param string $EIASToken
     * @param \DateTime $ExpirationTime
     * @param \DateTime $RevocationTime
     * @param string $any
     */
    public function __construct($Status = null, $EIASToken = null, \DateTime $ExpirationTime = null, \DateTime $RevocationTime = null, $any = null)
    {
      $this->Status = $Status;
      $this->EIASToken = $EIASToken;
      $this->ExpirationTime = $ExpirationTime ? $ExpirationTime->format(\DateTime::ATOM) : null;
      $this->RevocationTime = $RevocationTime ? $RevocationTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return TokenStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param TokenStatusCodeType $Status
     * @return \EbayWsdl\TokenStatusType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getEIASToken()
    {
      return $this->EIASToken;
    }

    /**
     * @param string $EIASToken
     * @return \EbayWsdl\TokenStatusType
     */
    public function setEIASToken($EIASToken)
    {
      $this->EIASToken = $EIASToken;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationTime()
    {
      if ($this->ExpirationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationTime
     * @return \EbayWsdl\TokenStatusType
     */
    public function setExpirationTime(\DateTime $ExpirationTime)
    {
      $this->ExpirationTime = $ExpirationTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRevocationTime()
    {
      if ($this->RevocationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RevocationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RevocationTime
     * @return \EbayWsdl\TokenStatusType
     */
    public function setRevocationTime(\DateTime $RevocationTime)
    {
      $this->RevocationTime = $RevocationTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\TokenStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
