<?php

namespace EbayWsdl;

class RateTableDetailsType
{

    /**
     * @var string $DomesticRateTable
     */
    protected $DomesticRateTable = null;

    /**
     * @var string $InternationalRateTable
     */
    protected $InternationalRateTable = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $DomesticRateTable
     * @param string $InternationalRateTable
     * @param string $any
     */
    public function __construct($DomesticRateTable = null, $InternationalRateTable = null, $any = null)
    {
      $this->DomesticRateTable = $DomesticRateTable;
      $this->InternationalRateTable = $InternationalRateTable;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getDomesticRateTable()
    {
      return $this->DomesticRateTable;
    }

    /**
     * @param string $DomesticRateTable
     * @return \EbayWsdl\RateTableDetailsType
     */
    public function setDomesticRateTable($DomesticRateTable)
    {
      $this->DomesticRateTable = $DomesticRateTable;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternationalRateTable()
    {
      return $this->InternationalRateTable;
    }

    /**
     * @param string $InternationalRateTable
     * @return \EbayWsdl\RateTableDetailsType
     */
    public function setInternationalRateTable($InternationalRateTable)
    {
      $this->InternationalRateTable = $InternationalRateTable;
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
     * @return \EbayWsdl\RateTableDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
