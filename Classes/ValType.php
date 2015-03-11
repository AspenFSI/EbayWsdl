<?php

namespace EbayWsdl\Classes;

class ValType
{

    /**
     * @var string $ValueLiteral
     */
    protected $ValueLiteral = null;

    /**
     * @var string[] $SuggestedValueLiteral
     */
    protected $SuggestedValueLiteral = null;

    /**
     * @var int $ValueID
     */
    protected $ValueID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ValueLiteral
     * @param string[] $SuggestedValueLiteral
     * @param int $ValueID
     * @param string $any
     */
    public function __construct($ValueLiteral = null, array $SuggestedValueLiteral = null, $ValueID = null, $any = null)
    {
      $this->ValueLiteral = $ValueLiteral;
      $this->SuggestedValueLiteral = $SuggestedValueLiteral;
      $this->ValueID = $ValueID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getValueLiteral()
    {
      return $this->ValueLiteral;
    }

    /**
     * @param string $ValueLiteral
     * @return \EbayWsdl\Classes\ValType
     */
    public function setValueLiteral($ValueLiteral)
    {
      $this->ValueLiteral = $ValueLiteral;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSuggestedValueLiteral()
    {
      return $this->SuggestedValueLiteral;
    }

    /**
     * @param string[] $SuggestedValueLiteral
     * @return \EbayWsdl\Classes\ValType
     */
    public function setSuggestedValueLiteral(array $SuggestedValueLiteral)
    {
      $this->SuggestedValueLiteral = $SuggestedValueLiteral;
      return $this;
    }

    /**
     * @return int
     */
    public function getValueID()
    {
      return $this->ValueID;
    }

    /**
     * @param int $ValueID
     * @return \EbayWsdl\Classes\ValType
     */
    public function setValueID($ValueID)
    {
      $this->ValueID = $ValueID;
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
     * @return \EbayWsdl\Classes\ValType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
