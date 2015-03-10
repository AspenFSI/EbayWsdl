<?php

namespace EbayWsdl;

class DispatchCutoffTimePreferencesType
{

    /**
     * @var time $CutoffTime
     */
    protected $CutoffTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param time $CutoffTime
     * @param string $any
     */
    public function __construct($CutoffTime = null, $any = null)
    {
      $this->CutoffTime = $CutoffTime;
      $this->any = $any;
    }

    /**
     * @return time
     */
    public function getCutoffTime()
    {
      return $this->CutoffTime;
    }

    /**
     * @param time $CutoffTime
     * @return \EbayWsdl\DispatchCutoffTimePreferencesType
     */
    public function setCutoffTime($CutoffTime)
    {
      $this->CutoffTime = $CutoffTime;
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
     * @return \EbayWsdl\DispatchCutoffTimePreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
