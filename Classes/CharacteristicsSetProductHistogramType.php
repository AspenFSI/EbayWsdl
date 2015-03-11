<?php

namespace EbayWsdl\Classes;

class CharacteristicsSetProductHistogramType
{

    /**
     * @var HistogramEntryType[] $HistogramEntry
     */
    protected $HistogramEntry = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param HistogramEntryType[] $HistogramEntry
     * @param string $any
     */
    public function __construct(array $HistogramEntry = null, $any = null)
    {
      $this->HistogramEntry = $HistogramEntry;
      $this->any = $any;
    }

    /**
     * @return HistogramEntryType[]
     */
    public function getHistogramEntry()
    {
      return $this->HistogramEntry;
    }

    /**
     * @param HistogramEntryType[] $HistogramEntry
     * @return \EbayWsdl\Classes\CharacteristicsSetProductHistogramType
     */
    public function setHistogramEntry(array $HistogramEntry)
    {
      $this->HistogramEntry = $HistogramEntry;
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
     * @return \EbayWsdl\Classes\CharacteristicsSetProductHistogramType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
