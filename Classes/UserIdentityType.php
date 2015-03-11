<?php

namespace EbayWsdl\Classes;

class UserIdentityType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var UserIdentityCodeType $type
     */
    protected $type = null;

    /**
     * @param string $_
     * @param UserIdentityCodeType $type
     */
    public function __construct($_ = null, $type = null)
    {
      $this->_ = $_;
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \EbayWsdl\Classes\UserIdentityType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return UserIdentityCodeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param UserIdentityCodeType $type
     * @return \EbayWsdl\Classes\UserIdentityType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
