<?php

namespace EbayWsdl\Classes;

class PaginatedOrderTransactionArrayType
{

    /**
     * @var OrderTransactionArrayType $OrderTransactionArray
     */
    protected $OrderTransactionArray = null;

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param OrderTransactionArrayType $OrderTransactionArray
     * @param PaginationResultType $PaginationResult
     * @param string $any
     */
    public function __construct($OrderTransactionArray = null, $PaginationResult = null, $any = null)
    {
      $this->OrderTransactionArray = $OrderTransactionArray;
      $this->PaginationResult = $PaginationResult;
      $this->any = $any;
    }

    /**
     * @return OrderTransactionArrayType
     */
    public function getOrderTransactionArray()
    {
      return $this->OrderTransactionArray;
    }

    /**
     * @param OrderTransactionArrayType $OrderTransactionArray
     * @return \EbayWsdl\Classes\PaginatedOrderTransactionArrayType
     */
    public function setOrderTransactionArray($OrderTransactionArray)
    {
      $this->OrderTransactionArray = $OrderTransactionArray;
      return $this;
    }

    /**
     * @return PaginationResultType
     */
    public function getPaginationResult()
    {
      return $this->PaginationResult;
    }

    /**
     * @param PaginationResultType $PaginationResult
     * @return \EbayWsdl\Classes\PaginatedOrderTransactionArrayType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
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
     * @return \EbayWsdl\Classes\PaginatedOrderTransactionArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
