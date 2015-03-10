<?php

namespace EbayWsdl;

class DuplicateInvocationDetailsType
{

    /**
     * @var UUIDType $DuplicateInvocationID
     */
    protected $DuplicateInvocationID = null;

    /**
     * @var InvocationStatusType $Status
     */
    protected $Status = null;

    /**
     * @var string $InvocationTrackingID
     */
    protected $InvocationTrackingID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param UUIDType $DuplicateInvocationID
     * @param InvocationStatusType $Status
     * @param string $InvocationTrackingID
     * @param string $any
     */
    public function __construct($DuplicateInvocationID = null, $Status = null, $InvocationTrackingID = null, $any = null)
    {
      $this->DuplicateInvocationID = $DuplicateInvocationID;
      $this->Status = $Status;
      $this->InvocationTrackingID = $InvocationTrackingID;
      $this->any = $any;
    }

    /**
     * @return UUIDType
     */
    public function getDuplicateInvocationID()
    {
      return $this->DuplicateInvocationID;
    }

    /**
     * @param UUIDType $DuplicateInvocationID
     * @return \EbayWsdl\DuplicateInvocationDetailsType
     */
    public function setDuplicateInvocationID($DuplicateInvocationID)
    {
      $this->DuplicateInvocationID = $DuplicateInvocationID;
      return $this;
    }

    /**
     * @return InvocationStatusType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param InvocationStatusType $Status
     * @return \EbayWsdl\DuplicateInvocationDetailsType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvocationTrackingID()
    {
      return $this->InvocationTrackingID;
    }

    /**
     * @param string $InvocationTrackingID
     * @return \EbayWsdl\DuplicateInvocationDetailsType
     */
    public function setInvocationTrackingID($InvocationTrackingID)
    {
      $this->InvocationTrackingID = $InvocationTrackingID;
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
     * @return \EbayWsdl\DuplicateInvocationDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
