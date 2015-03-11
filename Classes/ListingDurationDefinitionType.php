<?php

namespace EbayWsdl\Classes;

class ListingDurationDefinitionType
{

    /**
     * @var token[] $Duration
     */
    protected $Duration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var int $durationSetID
     */
    protected $durationSetID = null;

    /**
     * @param token[] $Duration
     * @param string $any
     * @param int $durationSetID
     */
    public function __construct(array $Duration = null, $any = null, $durationSetID = null)
    {
      $this->Duration = $Duration;
      $this->any = $any;
      $this->durationSetID = $durationSetID;
    }

    /**
     * @return token[]
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param token[] $Duration
     * @return \EbayWsdl\Classes\ListingDurationDefinitionType
     */
    public function setDuration(array $Duration)
    {
      $this->Duration = $Duration;
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
     * @return \EbayWsdl\Classes\ListingDurationDefinitionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return int
     */
    public function getDurationSetID()
    {
      return $this->durationSetID;
    }

    /**
     * @param int $durationSetID
     * @return \EbayWsdl\Classes\ListingDurationDefinitionType
     */
    public function setDurationSetID($durationSetID)
    {
      $this->durationSetID = $durationSetID;
      return $this;
    }

}
