<?php

namespace EbayWsdl;

class ShipmentType
{

    /**
     * @var \DateTime $EstimatedDeliveryDate
     */
    protected $EstimatedDeliveryDate = null;

    /**
     * @var AmountType $InsuredValue
     */
    protected $InsuredValue = null;

    /**
     * @var MeasureType $PackageDepth
     */
    protected $PackageDepth = null;

    /**
     * @var MeasureType $PackageLength
     */
    protected $PackageLength = null;

    /**
     * @var MeasureType $PackageWidth
     */
    protected $PackageWidth = null;

    /**
     * @var string $PayPalShipmentID
     */
    protected $PayPalShipmentID = null;

    /**
     * @var int $ShipmentID
     */
    protected $ShipmentID = null;

    /**
     * @var AmountType $PostageTotal
     */
    protected $PostageTotal = null;

    /**
     * @var \DateTime $PrintedTime
     */
    protected $PrintedTime = null;

    /**
     * @var AddressType $ShipFromAddress
     */
    protected $ShipFromAddress = null;

    /**
     * @var AddressType $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var string $ShippingCarrierUsed
     */
    protected $ShippingCarrierUsed = null;

    /**
     * @var ShippingFeatureCodeType[] $ShippingFeature
     */
    protected $ShippingFeature = null;

    /**
     * @var ShippingPackageCodeType $ShippingPackage
     */
    protected $ShippingPackage = null;

    /**
     * @var string $ShippingServiceUsed
     */
    protected $ShippingServiceUsed = null;

    /**
     * @var string $ShipmentTrackingNumber
     */
    protected $ShipmentTrackingNumber = null;

    /**
     * @var MeasureType $WeightMajor
     */
    protected $WeightMajor = null;

    /**
     * @var MeasureType $WeightMinor
     */
    protected $WeightMinor = null;

    /**
     * @var ItemTransactionIDType[] $ItemTransactionID
     */
    protected $ItemTransactionID = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var ShipmentDeliveryStatusCodeType $DeliveryStatus
     */
    protected $DeliveryStatus = null;

    /**
     * @var \DateTime $RefundGrantedTime
     */
    protected $RefundGrantedTime = null;

    /**
     * @var \DateTime $RefundRequestedTime
     */
    protected $RefundRequestedTime = null;

    /**
     * @var ShipmentStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $ShippedTime
     */
    protected $ShippedTime = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
     */
    protected $ShipmentTrackingDetails = null;

    /**
     * @var ShipmentLineItemType $ShipmentLineItem
     */
    protected $ShipmentLineItem = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $EstimatedDeliveryDate
     * @param AmountType $InsuredValue
     * @param MeasureType $PackageDepth
     * @param MeasureType $PackageLength
     * @param MeasureType $PackageWidth
     * @param string $PayPalShipmentID
     * @param int $ShipmentID
     * @param AmountType $PostageTotal
     * @param \DateTime $PrintedTime
     * @param AddressType $ShipFromAddress
     * @param AddressType $ShippingAddress
     * @param string $ShippingCarrierUsed
     * @param ShippingFeatureCodeType[] $ShippingFeature
     * @param ShippingPackageCodeType $ShippingPackage
     * @param string $ShippingServiceUsed
     * @param string $ShipmentTrackingNumber
     * @param MeasureType $WeightMajor
     * @param MeasureType $WeightMinor
     * @param ItemTransactionIDType[] $ItemTransactionID
     * @param \DateTime $DeliveryDate
     * @param ShipmentDeliveryStatusCodeType $DeliveryStatus
     * @param \DateTime $RefundGrantedTime
     * @param \DateTime $RefundRequestedTime
     * @param ShipmentStatusCodeType $Status
     * @param \DateTime $ShippedTime
     * @param string $Notes
     * @param ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
     * @param ShipmentLineItemType $ShipmentLineItem
     * @param string $any
     */
    public function __construct(\DateTime $EstimatedDeliveryDate = null, $InsuredValue = null, $PackageDepth = null, $PackageLength = null, $PackageWidth = null, $PayPalShipmentID = null, $ShipmentID = null, $PostageTotal = null, \DateTime $PrintedTime = null, $ShipFromAddress = null, $ShippingAddress = null, $ShippingCarrierUsed = null, array $ShippingFeature = null, $ShippingPackage = null, $ShippingServiceUsed = null, $ShipmentTrackingNumber = null, $WeightMajor = null, $WeightMinor = null, array $ItemTransactionID = null, \DateTime $DeliveryDate = null, $DeliveryStatus = null, \DateTime $RefundGrantedTime = null, \DateTime $RefundRequestedTime = null, $Status = null, \DateTime $ShippedTime = null, $Notes = null, array $ShipmentTrackingDetails = null, $ShipmentLineItem = null, $any = null)
    {
      $this->EstimatedDeliveryDate = $EstimatedDeliveryDate ? $EstimatedDeliveryDate->format(\DateTime::ATOM) : null;
      $this->InsuredValue = $InsuredValue;
      $this->PackageDepth = $PackageDepth;
      $this->PackageLength = $PackageLength;
      $this->PackageWidth = $PackageWidth;
      $this->PayPalShipmentID = $PayPalShipmentID;
      $this->ShipmentID = $ShipmentID;
      $this->PostageTotal = $PostageTotal;
      $this->PrintedTime = $PrintedTime ? $PrintedTime->format(\DateTime::ATOM) : null;
      $this->ShipFromAddress = $ShipFromAddress;
      $this->ShippingAddress = $ShippingAddress;
      $this->ShippingCarrierUsed = $ShippingCarrierUsed;
      $this->ShippingFeature = $ShippingFeature;
      $this->ShippingPackage = $ShippingPackage;
      $this->ShippingServiceUsed = $ShippingServiceUsed;
      $this->ShipmentTrackingNumber = $ShipmentTrackingNumber;
      $this->WeightMajor = $WeightMajor;
      $this->WeightMinor = $WeightMinor;
      $this->ItemTransactionID = $ItemTransactionID;
      $this->DeliveryDate = $DeliveryDate ? $DeliveryDate->format(\DateTime::ATOM) : null;
      $this->DeliveryStatus = $DeliveryStatus;
      $this->RefundGrantedTime = $RefundGrantedTime ? $RefundGrantedTime->format(\DateTime::ATOM) : null;
      $this->RefundRequestedTime = $RefundRequestedTime ? $RefundRequestedTime->format(\DateTime::ATOM) : null;
      $this->Status = $Status;
      $this->ShippedTime = $ShippedTime ? $ShippedTime->format(\DateTime::ATOM) : null;
      $this->Notes = $Notes;
      $this->ShipmentTrackingDetails = $ShipmentTrackingDetails;
      $this->ShipmentLineItem = $ShipmentLineItem;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
      if ($this->EstimatedDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EstimatedDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EstimatedDeliveryDate
     * @return \EbayWsdl\ShipmentType
     */
    public function setEstimatedDeliveryDate(\DateTime $EstimatedDeliveryDate)
    {
      $this->EstimatedDeliveryDate = $EstimatedDeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInsuredValue()
    {
      return $this->InsuredValue;
    }

    /**
     * @param AmountType $InsuredValue
     * @return \EbayWsdl\ShipmentType
     */
    public function setInsuredValue($InsuredValue)
    {
      $this->InsuredValue = $InsuredValue;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getPackageDepth()
    {
      return $this->PackageDepth;
    }

    /**
     * @param MeasureType $PackageDepth
     * @return \EbayWsdl\ShipmentType
     */
    public function setPackageDepth($PackageDepth)
    {
      $this->PackageDepth = $PackageDepth;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getPackageLength()
    {
      return $this->PackageLength;
    }

    /**
     * @param MeasureType $PackageLength
     * @return \EbayWsdl\ShipmentType
     */
    public function setPackageLength($PackageLength)
    {
      $this->PackageLength = $PackageLength;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getPackageWidth()
    {
      return $this->PackageWidth;
    }

    /**
     * @param MeasureType $PackageWidth
     * @return \EbayWsdl\ShipmentType
     */
    public function setPackageWidth($PackageWidth)
    {
      $this->PackageWidth = $PackageWidth;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalShipmentID()
    {
      return $this->PayPalShipmentID;
    }

    /**
     * @param string $PayPalShipmentID
     * @return \EbayWsdl\ShipmentType
     */
    public function setPayPalShipmentID($PayPalShipmentID)
    {
      $this->PayPalShipmentID = $PayPalShipmentID;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentID()
    {
      return $this->ShipmentID;
    }

    /**
     * @param int $ShipmentID
     * @return \EbayWsdl\ShipmentType
     */
    public function setShipmentID($ShipmentID)
    {
      $this->ShipmentID = $ShipmentID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPostageTotal()
    {
      return $this->PostageTotal;
    }

    /**
     * @param AmountType $PostageTotal
     * @return \EbayWsdl\ShipmentType
     */
    public function setPostageTotal($PostageTotal)
    {
      $this->PostageTotal = $PostageTotal;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPrintedTime()
    {
      if ($this->PrintedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PrintedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PrintedTime
     * @return \EbayWsdl\ShipmentType
     */
    public function setPrintedTime(\DateTime $PrintedTime)
    {
      $this->PrintedTime = $PrintedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShipFromAddress()
    {
      return $this->ShipFromAddress;
    }

    /**
     * @param AddressType $ShipFromAddress
     * @return \EbayWsdl\ShipmentType
     */
    public function setShipFromAddress($ShipFromAddress)
    {
      $this->ShipFromAddress = $ShipFromAddress;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShippingAddress()
    {
      return $this->ShippingAddress;
    }

    /**
     * @param AddressType $ShippingAddress
     * @return \EbayWsdl\ShipmentType
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
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
     * @return \EbayWsdl\ShipmentType
     */
    public function setShippingCarrierUsed($ShippingCarrierUsed)
    {
      $this->ShippingCarrierUsed = $ShippingCarrierUsed;
      return $this;
    }

    /**
     * @return ShippingFeatureCodeType[]
     */
    public function getShippingFeature()
    {
      return $this->ShippingFeature;
    }

    /**
     * @param ShippingFeatureCodeType[] $ShippingFeature
     * @return \EbayWsdl\ShipmentType
     */
    public function setShippingFeature(array $ShippingFeature)
    {
      $this->ShippingFeature = $ShippingFeature;
      return $this;
    }

    /**
     * @return ShippingPackageCodeType
     */
    public function getShippingPackage()
    {
      return $this->ShippingPackage;
    }

    /**
     * @param ShippingPackageCodeType $ShippingPackage
     * @return \EbayWsdl\ShipmentType
     */
    public function setShippingPackage($ShippingPackage)
    {
      $this->ShippingPackage = $ShippingPackage;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingServiceUsed()
    {
      return $this->ShippingServiceUsed;
    }

    /**
     * @param string $ShippingServiceUsed
     * @return \EbayWsdl\ShipmentType
     */
    public function setShippingServiceUsed($ShippingServiceUsed)
    {
      $this->ShippingServiceUsed = $ShippingServiceUsed;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
      return $this->ShipmentTrackingNumber;
    }

    /**
     * @param string $ShipmentTrackingNumber
     * @return \EbayWsdl\ShipmentType
     */
    public function setShipmentTrackingNumber($ShipmentTrackingNumber)
    {
      $this->ShipmentTrackingNumber = $ShipmentTrackingNumber;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getWeightMajor()
    {
      return $this->WeightMajor;
    }

    /**
     * @param MeasureType $WeightMajor
     * @return \EbayWsdl\ShipmentType
     */
    public function setWeightMajor($WeightMajor)
    {
      $this->WeightMajor = $WeightMajor;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getWeightMinor()
    {
      return $this->WeightMinor;
    }

    /**
     * @param MeasureType $WeightMinor
     * @return \EbayWsdl\ShipmentType
     */
    public function setWeightMinor($WeightMinor)
    {
      $this->WeightMinor = $WeightMinor;
      return $this;
    }

    /**
     * @return ItemTransactionIDType[]
     */
    public function getItemTransactionID()
    {
      return $this->ItemTransactionID;
    }

    /**
     * @param ItemTransactionIDType[] $ItemTransactionID
     * @return \EbayWsdl\ShipmentType
     */
    public function setItemTransactionID(array $ItemTransactionID)
    {
      $this->ItemTransactionID = $ItemTransactionID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \EbayWsdl\ShipmentType
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ShipmentDeliveryStatusCodeType
     */
    public function getDeliveryStatus()
    {
      return $this->DeliveryStatus;
    }

    /**
     * @param ShipmentDeliveryStatusCodeType $DeliveryStatus
     * @return \EbayWsdl\ShipmentType
     */
    public function setDeliveryStatus($DeliveryStatus)
    {
      $this->DeliveryStatus = $DeliveryStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRefundGrantedTime()
    {
      if ($this->RefundGrantedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RefundGrantedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RefundGrantedTime
     * @return \EbayWsdl\ShipmentType
     */
    public function setRefundGrantedTime(\DateTime $RefundGrantedTime)
    {
      $this->RefundGrantedTime = $RefundGrantedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRefundRequestedTime()
    {
      if ($this->RefundRequestedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RefundRequestedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RefundRequestedTime
     * @return \EbayWsdl\ShipmentType
     */
    public function setRefundRequestedTime(\DateTime $RefundRequestedTime)
    {
      $this->RefundRequestedTime = $RefundRequestedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ShipmentStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ShipmentStatusCodeType $Status
     * @return \EbayWsdl\ShipmentType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippedTime()
    {
      if ($this->ShippedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShippedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShippedTime
     * @return \EbayWsdl\ShipmentType
     */
    public function setShippedTime(\DateTime $ShippedTime)
    {
      $this->ShippedTime = $ShippedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \EbayWsdl\ShipmentType
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return ShipmentTrackingDetailsType[]
     */
    public function getShipmentTrackingDetails()
    {
      return $this->ShipmentTrackingDetails;
    }

    /**
     * @param ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
     * @return \EbayWsdl\ShipmentType
     */
    public function setShipmentTrackingDetails(array $ShipmentTrackingDetails)
    {
      $this->ShipmentTrackingDetails = $ShipmentTrackingDetails;
      return $this;
    }

    /**
     * @return ShipmentLineItemType
     */
    public function getShipmentLineItem()
    {
      return $this->ShipmentLineItem;
    }

    /**
     * @param ShipmentLineItemType $ShipmentLineItem
     * @return \EbayWsdl\ShipmentType
     */
    public function setShipmentLineItem($ShipmentLineItem)
    {
      $this->ShipmentLineItem = $ShipmentLineItem;
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
     * @return \EbayWsdl\ShipmentType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
