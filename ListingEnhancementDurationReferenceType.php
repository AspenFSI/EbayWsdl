<?php

namespace EbayWsdl;

class ListingEnhancementDurationReferenceType
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
     * @param token[] $Duration
     * @param string $any
     */
    public function __construct(array $Duration = null, $any = null)
    {
      $this->Duration = $Duration;
      $this->any = $any;
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
     * @return \EbayWsdl\ListingEnhancementDurationReferenceType
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
     * @return \EbayWsdl\ListingEnhancementDurationReferenceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
