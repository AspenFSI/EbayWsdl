<?php

namespace EbayWsdl\Classes;

class CharityAffiliationsType
{

    /**
     * @var CharityIDType[] $CharityID
     */
    protected $CharityID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CharityIDType[] $CharityID
     * @param string $any
     */
    public function __construct(array $CharityID = null, $any = null)
    {
      $this->CharityID = $CharityID;
      $this->any = $any;
    }

    /**
     * @return CharityIDType[]
     */
    public function getCharityID()
    {
      return $this->CharityID;
    }

    /**
     * @param CharityIDType[] $CharityID
     * @return \EbayWsdl\Classes\CharityAffiliationsType
     */
    public function setCharityID(array $CharityID)
    {
      $this->CharityID = $CharityID;
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
     * @return \EbayWsdl\Classes\CharityAffiliationsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
