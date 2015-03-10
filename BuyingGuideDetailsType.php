<?php

namespace EbayWsdl;

class BuyingGuideDetailsType
{

    /**
     * @var BuyingGuideType[] $BuyingGuide
     */
    protected $BuyingGuide = null;

    /**
     * @var anyURI $BuyingGuideHub
     */
    protected $BuyingGuideHub = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BuyingGuideType[] $BuyingGuide
     * @param anyURI $BuyingGuideHub
     * @param string $any
     */
    public function __construct(array $BuyingGuide = null, $BuyingGuideHub = null, $any = null)
    {
      $this->BuyingGuide = $BuyingGuide;
      $this->BuyingGuideHub = $BuyingGuideHub;
      $this->any = $any;
    }

    /**
     * @return BuyingGuideType[]
     */
    public function getBuyingGuide()
    {
      return $this->BuyingGuide;
    }

    /**
     * @param BuyingGuideType[] $BuyingGuide
     * @return \EbayWsdl\BuyingGuideDetailsType
     */
    public function setBuyingGuide(array $BuyingGuide)
    {
      $this->BuyingGuide = $BuyingGuide;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getBuyingGuideHub()
    {
      return $this->BuyingGuideHub;
    }

    /**
     * @param anyURI $BuyingGuideHub
     * @return \EbayWsdl\BuyingGuideDetailsType
     */
    public function setBuyingGuideHub($BuyingGuideHub)
    {
      $this->BuyingGuideHub = $BuyingGuideHub;
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
     * @return \EbayWsdl\BuyingGuideDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
