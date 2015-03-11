<?php

namespace EbayWsdl\Classes;

class PaginatedTransactionArrayType
{

    /**
     * @var TransactionArrayType $TransactionArray
     */
    protected $TransactionArray = null;

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @param TransactionArrayType $TransactionArray
     * @param PaginationResultType $PaginationResult
     */
    public function __construct($TransactionArray = null, $PaginationResult = null)
    {
      $this->TransactionArray = $TransactionArray;
      $this->PaginationResult = $PaginationResult;
    }

    /**
     * @return TransactionArrayType
     */
    public function getTransactionArray()
    {
      return $this->TransactionArray;
    }

    /**
     * @param TransactionArrayType $TransactionArray
     * @return \EbayWsdl\Classes\PaginatedTransactionArrayType
     */
    public function setTransactionArray($TransactionArray)
    {
      $this->TransactionArray = $TransactionArray;
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
     * @return \EbayWsdl\Classes\PaginatedTransactionArrayType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

}
