<?php

namespace EbayWsdl;

class DisputeResolutionType
{

    /**
     * @var DisputeResolutionRecordTypeCodeType $DisputeResolutionRecordType
     */
    protected $DisputeResolutionRecordType = null;

    /**
     * @var DisputeResolutionReasonCodeType $DisputeResolutionReason
     */
    protected $DisputeResolutionReason = null;

    /**
     * @var \DateTime $ResolutionTime
     */
    protected $ResolutionTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param DisputeResolutionRecordTypeCodeType $DisputeResolutionRecordType
     * @param DisputeResolutionReasonCodeType $DisputeResolutionReason
     * @param \DateTime $ResolutionTime
     * @param string $any
     */
    public function __construct($DisputeResolutionRecordType = null, $DisputeResolutionReason = null, \DateTime $ResolutionTime = null, $any = null)
    {
      $this->DisputeResolutionRecordType = $DisputeResolutionRecordType;
      $this->DisputeResolutionReason = $DisputeResolutionReason;
      $this->ResolutionTime = $ResolutionTime ? $ResolutionTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return DisputeResolutionRecordTypeCodeType
     */
    public function getDisputeResolutionRecordType()
    {
      return $this->DisputeResolutionRecordType;
    }

    /**
     * @param DisputeResolutionRecordTypeCodeType $DisputeResolutionRecordType
     * @return \EbayWsdl\DisputeResolutionType
     */
    public function setDisputeResolutionRecordType($DisputeResolutionRecordType)
    {
      $this->DisputeResolutionRecordType = $DisputeResolutionRecordType;
      return $this;
    }

    /**
     * @return DisputeResolutionReasonCodeType
     */
    public function getDisputeResolutionReason()
    {
      return $this->DisputeResolutionReason;
    }

    /**
     * @param DisputeResolutionReasonCodeType $DisputeResolutionReason
     * @return \EbayWsdl\DisputeResolutionType
     */
    public function setDisputeResolutionReason($DisputeResolutionReason)
    {
      $this->DisputeResolutionReason = $DisputeResolutionReason;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getResolutionTime()
    {
      if ($this->ResolutionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ResolutionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ResolutionTime
     * @return \EbayWsdl\DisputeResolutionType
     */
    public function setResolutionTime(\DateTime $ResolutionTime)
    {
      $this->ResolutionTime = $ResolutionTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\DisputeResolutionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
