<?php

namespace EbayWsdl\Classes;

class ConditionValuesType
{

    /**
     * @var ConditionType[] $Condition
     */
    protected $Condition = null;

    /**
     * @var anyURI $ConditionHelpURL
     */
    protected $ConditionHelpURL = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ConditionType[] $Condition
     * @param anyURI $ConditionHelpURL
     * @param string $any
     */
    public function __construct(array $Condition = null, $ConditionHelpURL = null, $any = null)
    {
      $this->Condition = $Condition;
      $this->ConditionHelpURL = $ConditionHelpURL;
      $this->any = $any;
    }

    /**
     * @return ConditionType[]
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param ConditionType[] $Condition
     * @return \EbayWsdl\Classes\ConditionValuesType
     */
    public function setCondition(array $Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getConditionHelpURL()
    {
      return $this->ConditionHelpURL;
    }

    /**
     * @param anyURI $ConditionHelpURL
     * @return \EbayWsdl\Classes\ConditionValuesType
     */
    public function setConditionHelpURL($ConditionHelpURL)
    {
      $this->ConditionHelpURL = $ConditionHelpURL;
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
     * @return \EbayWsdl\Classes\ConditionValuesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
