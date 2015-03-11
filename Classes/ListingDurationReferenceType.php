<?php

namespace EbayWsdl\Classes;

class ListingDurationReferenceType
{

    /**
     * @var int $_
     */
    protected $_ = null;

    /**
     * @var ListingTypeCodeType $type
     */
    protected $type = null;

    /**
     * @param int $_
     * @param ListingTypeCodeType $type
     */
    public function __construct($_ = null, $type = null)
    {
      $this->_ = $_;
      $this->type = $type;
    }

    /**
     * @return int
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param int $_
     * @return \EbayWsdl\Classes\ListingDurationReferenceType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return ListingTypeCodeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param ListingTypeCodeType $type
     * @return \EbayWsdl\Classes\ListingDurationReferenceType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
