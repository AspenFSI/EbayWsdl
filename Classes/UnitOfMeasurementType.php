<?php

namespace EbayWsdl\Classes;

class UnitOfMeasurementType
{

    /**
     * @var string[] $AlternateText
     */
    protected $AlternateText = null;

    /**
     * @var string $SuggestedText
     */
    protected $SuggestedText = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string[] $AlternateText
     * @param string $SuggestedText
     * @param string $any
     */
    public function __construct(array $AlternateText = null, $SuggestedText = null, $any = null)
    {
      $this->AlternateText = $AlternateText;
      $this->SuggestedText = $SuggestedText;
      $this->any = $any;
    }

    /**
     * @return string[]
     */
    public function getAlternateText()
    {
      return $this->AlternateText;
    }

    /**
     * @param string[] $AlternateText
     * @return \EbayWsdl\Classes\UnitOfMeasurementType
     */
    public function setAlternateText(array $AlternateText)
    {
      $this->AlternateText = $AlternateText;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuggestedText()
    {
      return $this->SuggestedText;
    }

    /**
     * @param string $SuggestedText
     * @return \EbayWsdl\Classes\UnitOfMeasurementType
     */
    public function setSuggestedText($SuggestedText)
    {
      $this->SuggestedText = $SuggestedText;
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
     * @return \EbayWsdl\Classes\UnitOfMeasurementType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
