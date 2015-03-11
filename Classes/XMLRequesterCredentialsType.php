<?php

namespace EbayWsdl\Classes;

class XMLRequesterCredentialsType
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $eBayAuthToken
     */
    protected $eBayAuthToken = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Username
     * @param string $Password
     * @param string $eBayAuthToken
     * @param string $any
     */
    public function __construct($Username = null, $Password = null, $eBayAuthToken = null, $any = null)
    {
      $this->Username = $Username;
      $this->Password = $Password;
      $this->eBayAuthToken = $eBayAuthToken;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\XMLRequesterCredentialsType
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
     * @return \EbayWsdl\Classes\XMLRequesterCredentialsType
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getEBayAuthToken()
    {
      return $this->eBayAuthToken;
    }

    /**
     * @param string $eBayAuthToken
     * @return \EbayWsdl\Classes\XMLRequesterCredentialsType
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
      $this->eBayAuthToken = $eBayAuthToken;
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
     * @return \EbayWsdl\Classes\XMLRequesterCredentialsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
