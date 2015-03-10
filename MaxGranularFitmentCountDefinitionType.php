<?php

namespace EbayWsdl;

class MaxGranularFitmentCountDefinitionType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any = null)
    {
      $this->any = $any;
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
     * @return \EbayWsdl\MaxGranularFitmentCountDefinitionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
