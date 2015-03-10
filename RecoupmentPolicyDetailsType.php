<?php

namespace EbayWsdl;

class RecoupmentPolicyDetailsType
{

    /**
     * @var boolean $EnforcedOnListingSite
     */
    protected $EnforcedOnListingSite = null;

    /**
     * @var boolean $EnforcedOnRegistrationSite
     */
    protected $EnforcedOnRegistrationSite = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $EnforcedOnListingSite
     * @param boolean $EnforcedOnRegistrationSite
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($EnforcedOnListingSite = null, $EnforcedOnRegistrationSite = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->EnforcedOnListingSite = $EnforcedOnListingSite;
      $this->EnforcedOnRegistrationSite = $EnforcedOnRegistrationSite;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getEnforcedOnListingSite()
    {
      return $this->EnforcedOnListingSite;
    }

    /**
     * @param boolean $EnforcedOnListingSite
     * @return \EbayWsdl\RecoupmentPolicyDetailsType
     */
    public function setEnforcedOnListingSite($EnforcedOnListingSite)
    {
      $this->EnforcedOnListingSite = $EnforcedOnListingSite;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnforcedOnRegistrationSite()
    {
      return $this->EnforcedOnRegistrationSite;
    }

    /**
     * @param boolean $EnforcedOnRegistrationSite
     * @return \EbayWsdl\RecoupmentPolicyDetailsType
     */
    public function setEnforcedOnRegistrationSite($EnforcedOnRegistrationSite)
    {
      $this->EnforcedOnRegistrationSite = $EnforcedOnRegistrationSite;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\RecoupmentPolicyDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\RecoupmentPolicyDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\RecoupmentPolicyDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
