<?php

namespace EbayWsdl\Classes;

class PaginatedItemArrayType
{

    /**
     * @var ItemArrayType $ItemArray
     */
    protected $ItemArray = null;

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemArrayType $ItemArray
     * @param PaginationResultType $PaginationResult
     * @param string $any
     */
    public function __construct($ItemArray = null, $PaginationResult = null, $any = null)
    {
      $this->ItemArray = $ItemArray;
      $this->PaginationResult = $PaginationResult;
      $this->any = $any;
    }

    /**
     * @return ItemArrayType
     */
    public function getItemArray()
    {
      return $this->ItemArray;
    }

    /**
     * @param ItemArrayType $ItemArray
     * @return \EbayWsdl\Classes\PaginatedItemArrayType
     */
    public function setItemArray($ItemArray)
    {
      $this->ItemArray = $ItemArray;
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
     * @return \EbayWsdl\Classes\PaginatedItemArrayType
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
     * @return \EbayWsdl\Classes\PaginatedItemArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
