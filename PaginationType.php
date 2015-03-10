<?php

namespace EbayWsdl;

class PaginationType
{

    /**
     * @var int $EntriesPerPage
     */
    protected $EntriesPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $EntriesPerPage
     * @param int $PageNumber
     * @param string $any
     */
    public function __construct($EntriesPerPage = null, $PageNumber = null, $any = null)
    {
      $this->EntriesPerPage = $EntriesPerPage;
      $this->PageNumber = $PageNumber;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getEntriesPerPage()
    {
      return $this->EntriesPerPage;
    }

    /**
     * @param int $EntriesPerPage
     * @return \EbayWsdl\PaginationType
     */
    public function setEntriesPerPage($EntriesPerPage)
    {
      $this->EntriesPerPage = $EntriesPerPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->PageNumber;
    }

    /**
     * @param int $PageNumber
     * @return \EbayWsdl\PaginationType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
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
     * @return \EbayWsdl\PaginationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
