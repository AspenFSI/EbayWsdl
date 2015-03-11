<?php

namespace EbayWsdl\Classes;

class TransactionReferenceType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var TransactionReferenceCodeType $type
     */
    protected $type = null;

    /**
     * @param string $_
     * @param TransactionReferenceCodeType $type
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
     * @return \EbayWsdl\Classes\TransactionReferenceType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return TransactionReferenceCodeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TransactionReferenceCodeType $type
     * @return \EbayWsdl\Classes\TransactionReferenceType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
