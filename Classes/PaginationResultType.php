<?php

namespace EbayWsdl\Classes;

class PaginationResultType
{

    /**
     * @var int $TotalNumberOfPages
     */
    protected $TotalNumberOfPages = null;

    /**
     * @var int $TotalNumberOfEntries
     */
    protected $TotalNumberOfEntries = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $TotalNumberOfPages
     * @param int $TotalNumberOfEntries
     * @param string $any
     */
    public function __construct($TotalNumberOfPages = null, $TotalNumberOfEntries = null, $any = null)
    {
      $this->TotalNumberOfPages = $TotalNumberOfPages;
      $this->TotalNumberOfEntries = $TotalNumberOfEntries;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfPages()
    {
      return $this->TotalNumberOfPages;
    }

    /**
     * @param int $TotalNumberOfPages
     * @return \EbayWsdl\Classes\PaginationResultType
     */
    public function setTotalNumberOfPages($TotalNumberOfPages)
    {
      $this->TotalNumberOfPages = $TotalNumberOfPages;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfEntries()
    {
      return $this->TotalNumberOfEntries;
    }

    /**
     * @param int $TotalNumberOfEntries
     * @return \EbayWsdl\Classes\PaginationResultType
     */
    public function setTotalNumberOfEntries($TotalNumberOfEntries)
    {
      $this->TotalNumberOfEntries = $TotalNumberOfEntries;
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
     * @return \EbayWsdl\Classes\PaginationResultType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
