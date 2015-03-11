<?php

namespace EbayWsdl\Classes;

class ReasonCodeDetailType
{

    /**
     * @var string $BriefText
     */
    protected $BriefText = null;

    /**
     * @var string $DetailedText
     */
    protected $DetailedText = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var int $codeID
     */
    protected $codeID = null;

    /**
     * @param string $BriefText
     * @param string $DetailedText
     * @param string $any
     * @param int $codeID
     */
    public function __construct($BriefText = null, $DetailedText = null, $any = null, $codeID = null)
    {
      $this->BriefText = $BriefText;
      $this->DetailedText = $DetailedText;
      $this->any = $any;
      $this->codeID = $codeID;
    }

    /**
     * @return string
     */
    public function getBriefText()
    {
      return $this->BriefText;
    }

    /**
     * @param string $BriefText
     * @return \EbayWsdl\Classes\ReasonCodeDetailType
     */
    public function setBriefText($BriefText)
    {
      $this->BriefText = $BriefText;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailedText()
    {
      return $this->DetailedText;
    }

    /**
     * @param string $DetailedText
     * @return \EbayWsdl\Classes\ReasonCodeDetailType
     */
    public function setDetailedText($DetailedText)
    {
      $this->DetailedText = $DetailedText;
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
     * @return \EbayWsdl\Classes\ReasonCodeDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodeID()
    {
      return $this->codeID;
    }

    /**
     * @param int $codeID
     * @return \EbayWsdl\Classes\ReasonCodeDetailType
     */
    public function setCodeID($codeID)
    {
      $this->codeID = $codeID;
      return $this;
    }

}
