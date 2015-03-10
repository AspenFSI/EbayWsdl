<?php

namespace EbayWsdl;

class CharityIDType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var CharityAffiliationTypeCodeType $type
     */
    protected $type = null;

    /**
     * @param string $_
     * @param CharityAffiliationTypeCodeType $type
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
     * @return \EbayWsdl\CharityIDType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return CharityAffiliationTypeCodeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CharityAffiliationTypeCodeType $type
     * @return \EbayWsdl\CharityIDType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
