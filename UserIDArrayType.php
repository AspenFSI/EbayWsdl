<?php

namespace EbayWsdl;

class UserIDArrayType
{

    /**
     * @var UserIDType[] $UserID
     */
    protected $UserID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param UserIDType[] $UserID
     * @param string $any
     */
    public function __construct(array $UserID = null, $any = null)
    {
      $this->UserID = $UserID;
      $this->any = $any;
    }

    /**
     * @return UserIDType[]
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param UserIDType[] $UserID
     * @return \EbayWsdl\UserIDArrayType
     */
    public function setUserID(array $UserID)
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
     * @return \EbayWsdl\UserIDArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
