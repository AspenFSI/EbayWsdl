<?php

namespace EbayWsdl\Classes;

class UnpaidItemType
{

    /**
     * @var UnpaidItemCaseStatusTypeCodeType $Status
     */
    protected $Status = null;

    /**
     * @var UnpaidItemCaseOpenTypeCodeType $Type
     */
    protected $Type = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param UnpaidItemCaseStatusTypeCodeType $Status
     * @param UnpaidItemCaseOpenTypeCodeType $Type
     * @param string $any
     */
    public function __construct($Status = null, $Type = null, $any = null)
    {
      $this->Status = $Status;
      $this->Type = $Type;
      $this->any = $any;
    }

    /**
     * @return UnpaidItemCaseStatusTypeCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param UnpaidItemCaseStatusTypeCodeType $Status
     * @return \EbayWsdl\Classes\UnpaidItemType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return UnpaidItemCaseOpenTypeCodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param UnpaidItemCaseOpenTypeCodeType $Type
     * @return \EbayWsdl\Classes\UnpaidItemType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \EbayWsdl\Classes\UnpaidItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
