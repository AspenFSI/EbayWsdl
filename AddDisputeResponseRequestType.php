<?php

namespace EbayWsdl;

class AddDisputeResponseRequestType extends AbstractRequestType
{

    /**
     * @var DisputeIDType $DisputeID
     */
    protected $DisputeID = null;

    /**
     * @var string $MessageText
     */
    protected $MessageText = null;

    /**
     * @var DisputeActivityCodeType $DisputeActivity
     */
    protected $DisputeActivity = null;

    /**
     * @var string $ShippingCarrierUsed
     */
    protected $ShippingCarrierUsed = null;

    /**
     * @var string $ShipmentTrackNumber
     */
    protected $ShipmentTrackNumber = null;

    /**
     * @var \DateTime $ShippingTime
     */
    protected $ShippingTime = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param DisputeIDType $DisputeID
     * @param string $MessageText
     * @param DisputeActivityCodeType $DisputeActivity
     * @param string $ShippingCarrierUsed
     * @param string $ShipmentTrackNumber
     * @param \DateTime $ShippingTime
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $DisputeID = null, $MessageText = null, $DisputeActivity = null, $ShippingCarrierUsed = null, $ShipmentTrackNumber = null, \DateTime $ShippingTime = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->DisputeID = $DisputeID;
      $this->MessageText = $MessageText;
      $this->DisputeActivity = $DisputeActivity;
      $this->ShippingCarrierUsed = $ShippingCarrierUsed;
      $this->ShipmentTrackNumber = $ShipmentTrackNumber;
      $this->ShippingTime = $ShippingTime ? $ShippingTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return DisputeIDType
     */
    public function getDisputeID()
    {
      return $this->DisputeID;
    }

    /**
     * @param DisputeIDType $DisputeID
     * @return \EbayWsdl\AddDisputeResponseRequestType
     */
    public function setDisputeID($DisputeID)
    {
      $this->DisputeID = $DisputeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
      return $this->MessageText;
    }

    /**
     * @param string $MessageText
     * @return \EbayWsdl\AddDisputeResponseRequestType
     */
    public function setMessageText($MessageText)
    {
      $this->MessageText = $MessageText;
      return $this;
    }

    /**
     * @return DisputeActivityCodeType
     */
    public function getDisputeActivity()
    {
      return $this->DisputeActivity;
    }

    /**
     * @param DisputeActivityCodeType $DisputeActivity
     * @return \EbayWsdl\AddDisputeResponseRequestType
     */
    public function setDisputeActivity($DisputeActivity)
    {
      $this->DisputeActivity = $DisputeActivity;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCarrierUsed()
    {
      return $this->ShippingCarrierUsed;
    }

    /**
     * @param string $ShippingCarrierUsed
     * @return \EbayWsdl\AddDisputeResponseRequestType
     */
    public function setShippingCarrierUsed($ShippingCarrierUsed)
    {
      $this->ShippingCarrierUsed = $ShippingCarrierUsed;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentTrackNumber()
    {
      return $this->ShipmentTrackNumber;
    }

    /**
     * @param string $ShipmentTrackNumber
     * @return \EbayWsdl\AddDisputeResponseRequestType
     */
    public function setShipmentTrackNumber($ShipmentTrackNumber)
    {
      $this->ShipmentTrackNumber = $ShipmentTrackNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippingTime()
    {
      if ($this->ShippingTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShippingTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShippingTime
     * @return \EbayWsdl\AddDisputeResponseRequestType
     */
    public function setShippingTime(\DateTime $ShippingTime)
    {
      $this->ShippingTime = $ShippingTime->format(\DateTime::ATOM);
      return $this;
    }

}
