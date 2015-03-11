<?php

namespace EbayWsdl\Classes;

class EndItemResponseContainerType
{

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var string $CorrelationID
     */
    protected $CorrelationID = null;

    /**
     * @var ErrorType[] $Errors
     */
    protected $Errors = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $EndTime
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $any
     */
    public function __construct(\DateTime $EndTime = null, $CorrelationID = null, array $Errors = null, $any = null)
    {
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->CorrelationID = $CorrelationID;
      $this->Errors = $Errors;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \EbayWsdl\Classes\EndItemResponseContainerType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationID()
    {
      return $this->CorrelationID;
    }

    /**
     * @param string $CorrelationID
     * @return \EbayWsdl\Classes\EndItemResponseContainerType
     */
    public function setCorrelationID($CorrelationID)
    {
      $this->CorrelationID = $CorrelationID;
      return $this;
    }

    /**
     * @return ErrorType[]
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ErrorType[] $Errors
     * @return \EbayWsdl\Classes\EndItemResponseContainerType
     */
    public function setErrors(array $Errors)
    {
      $this->Errors = $Errors;
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
     * @return \EbayWsdl\Classes\EndItemResponseContainerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
