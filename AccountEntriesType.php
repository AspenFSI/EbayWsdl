<?php

namespace EbayWsdl;

class AccountEntriesType
{

    /**
     * @var AccountEntryType[] $AccountEntry
     */
    protected $AccountEntry = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AccountEntryType[] $AccountEntry
     * @param string $any
     */
    public function __construct(array $AccountEntry = null, $any = null)
    {
      $this->AccountEntry = $AccountEntry;
      $this->any = $any;
    }

    /**
     * @return AccountEntryType[]
     */
    public function getAccountEntry()
    {
      return $this->AccountEntry;
    }

    /**
     * @param AccountEntryType[] $AccountEntry
     * @return \EbayWsdl\AccountEntriesType
     */
    public function setAccountEntry(array $AccountEntry)
    {
      $this->AccountEntry = $AccountEntry;
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
     * @return \EbayWsdl\AccountEntriesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
