<?php

namespace EbayWsdl;

class UserIdPasswordType
{

    /**
     * @var string $AppId
     */
    protected $AppId = null;

    /**
     * @var string $DevId
     */
    protected $DevId = null;

    /**
     * @var string $AuthCert
     */
    protected $AuthCert = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $AppId
     * @param string $DevId
     * @param string $AuthCert
     * @param string $Username
     * @param string $Password
     * @param string $any
     */
    public function __construct($AppId = null, $DevId = null, $AuthCert = null, $Username = null, $Password = null, $any = null)
    {
      $this->AppId = $AppId;
      $this->DevId = $DevId;
      $this->AuthCert = $AuthCert;
      $this->Username = $Username;
      $this->Password = $Password;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->AppId;
    }

    /**
     * @param string $AppId
     * @return \EbayWsdl\UserIdPasswordType
     */
    public function setAppId($AppId)
    {
      $this->AppId = $AppId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDevId()
    {
      return $this->DevId;
    }

    /**
     * @param string $DevId
     * @return \EbayWsdl\UserIdPasswordType
     */
    public function setDevId($DevId)
    {
      $this->DevId = $DevId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCert()
    {
      return $this->AuthCert;
    }

    /**
     * @param string $AuthCert
     * @return \EbayWsdl\UserIdPasswordType
     */
    public function setAuthCert($AuthCert)
    {
      $this->AuthCert = $AuthCert;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \EbayWsdl\UserIdPasswordType
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \EbayWsdl\UserIdPasswordType
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return \EbayWsdl\UserIdPasswordType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
