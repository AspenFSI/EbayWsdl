<?php

namespace EbayWsdl\Classes;

class RefundLineArrayType
{

    /**
     * @var RefundLineType[] $RefundLine
     */
    protected $RefundLine = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RefundLineType[] $RefundLine
     * @param string $any
     */
    public function __construct(array $RefundLine = null, $any = null)
    {
      $this->RefundLine = $RefundLine;
      $this->any = $any;
    }

    /**
     * @return RefundLineType[]
     */
    public function getRefundLine()
    {
      return $this->RefundLine;
    }

    /**
     * @param RefundLineType[] $RefundLine
     * @return \EbayWsdl\Classes\RefundLineArrayType
     */
    public function setRefundLine(array $RefundLine)
    {
      $this->RefundLine = $RefundLine;
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
     * @return \EbayWsdl\Classes\RefundLineArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
