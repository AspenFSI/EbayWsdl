<?php

namespace EbayWsdl;

class FeedbackRequirementsType
{

    /**
     * @var boolean $_
     */
    protected $_ = null;

    /**
     * @var string $minimum
     */
    protected $minimum = null;

    /**
     * @param boolean $_
     * @param string $minimum
     */
    public function __construct($_ = null, $minimum = null)
    {
      $this->_ = $_;
      $this->minimum = $minimum;
    }

    /**
     * @return boolean
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param boolean $_
     * @return \EbayWsdl\FeedbackRequirementsType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimum()
    {
      return $this->minimum;
    }

    /**
     * @param string $minimum
     * @return \EbayWsdl\FeedbackRequirementsType
     */
    public function setMinimum($minimum)
    {
      $this->minimum = $minimum;
      return $this;
    }

}
