<?php

namespace EbayWsdl\Classes;

class ItemPolicyViolationType
{

    /**
     * @var int $PolicyID
     */
    protected $PolicyID = null;

    /**
     * @var string $PolicyText
     */
    protected $PolicyText = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PolicyID
     * @param string $PolicyText
     * @param string $any
     */
    public function __construct($PolicyID = null, $PolicyText = null, $any = null)
    {
      $this->PolicyID = $PolicyID;
      $this->PolicyText = $PolicyText;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPolicyID()
    {
      return $this->PolicyID;
    }

    /**
     * @param int $PolicyID
     * @return \EbayWsdl\Classes\ItemPolicyViolationType
     */
    public function setPolicyID($PolicyID)
    {
      $this->PolicyID = $PolicyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyText()
    {
      return $this->PolicyText;
    }

    /**
     * @param string $PolicyText
     * @return \EbayWsdl\Classes\ItemPolicyViolationType
     */
    public function setPolicyText($PolicyText)
    {
      $this->PolicyText = $PolicyText;
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
     * @return \EbayWsdl\Classes\ItemPolicyViolationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
