<?php

namespace EbayWsdl;

class ShippingServiceDetailsType
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $ExpeditedService
     */
    protected $ExpeditedService = null;

    /**
     * @var boolean $InternationalService
     */
    protected $InternationalService = null;

    /**
     * @var string $ShippingService
     */
    protected $ShippingService = null;

    /**
     * @var int $ShippingServiceID
     */
    protected $ShippingServiceID = null;

    /**
     * @var int $ShippingTimeMax
     */
    protected $ShippingTimeMax = null;

    /**
     * @var int $ShippingTimeMin
     */
    protected $ShippingTimeMin = null;

    /**
     * @var ShippingServiceCodeType $ShippingServiceCode
     */
    protected $ShippingServiceCode = null;

    /**
     * @var ShippingTypeCodeType[] $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var ShippingPackageCodeType[] $ShippingPackage
     */
    protected $ShippingPackage = null;

    /**
     * @var boolean $DimensionsRequired
     */
    protected $DimensionsRequired = null;

    /**
     * @var boolean $ValidForSellingFlow
     */
    protected $ValidForSellingFlow = null;

    /**
     * @var boolean $SurchargeApplicable
     */
    protected $SurchargeApplicable = null;

    /**
     * @var ShippingCarrierCodeType[] $ShippingCarrier
     */
    protected $ShippingCarrier = null;

    /**
     * @var boolean $CODService
     */
    protected $CODService = null;

    /**
     * @var AnnouncementMessageType[] $DeprecationDetails
     */
    protected $DeprecationDetails = null;

    /**
     * @var int $MappedToShippingServiceID
     */
    protected $MappedToShippingServiceID = null;

    /**
     * @var string $CostGroupFlat
     */
    protected $CostGroupFlat = null;

    /**
     * @var ShippingServicePackageDetailsType[] $ShippingServicePackageDetails
     */
    protected $ShippingServicePackageDetails = null;

    /**
     * @var boolean $WeightRequired
     */
    protected $WeightRequired = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $ShippingCategory
     */
    protected $ShippingCategory = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Description
     * @param boolean $ExpeditedService
     * @param boolean $InternationalService
     * @param string $ShippingService
     * @param int $ShippingServiceID
     * @param int $ShippingTimeMax
     * @param int $ShippingTimeMin
     * @param ShippingServiceCodeType $ShippingServiceCode
     * @param ShippingTypeCodeType[] $ServiceType
     * @param ShippingPackageCodeType[] $ShippingPackage
     * @param boolean $DimensionsRequired
     * @param boolean $ValidForSellingFlow
     * @param boolean $SurchargeApplicable
     * @param ShippingCarrierCodeType[] $ShippingCarrier
     * @param boolean $CODService
     * @param AnnouncementMessageType[] $DeprecationDetails
     * @param int $MappedToShippingServiceID
     * @param string $CostGroupFlat
     * @param ShippingServicePackageDetailsType[] $ShippingServicePackageDetails
     * @param boolean $WeightRequired
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $ShippingCategory
     * @param string $any
     */
    public function __construct($Description = null, $ExpeditedService = null, $InternationalService = null, $ShippingService = null, $ShippingServiceID = null, $ShippingTimeMax = null, $ShippingTimeMin = null, $ShippingServiceCode = null, array $ServiceType = null, array $ShippingPackage = null, $DimensionsRequired = null, $ValidForSellingFlow = null, $SurchargeApplicable = null, array $ShippingCarrier = null, $CODService = null, array $DeprecationDetails = null, $MappedToShippingServiceID = null, $CostGroupFlat = null, array $ShippingServicePackageDetails = null, $WeightRequired = null, $DetailVersion = null, \DateTime $UpdateTime = null, $ShippingCategory = null, $any = null)
    {
      $this->Description = $Description;
      $this->ExpeditedService = $ExpeditedService;
      $this->InternationalService = $InternationalService;
      $this->ShippingService = $ShippingService;
      $this->ShippingServiceID = $ShippingServiceID;
      $this->ShippingTimeMax = $ShippingTimeMax;
      $this->ShippingTimeMin = $ShippingTimeMin;
      $this->ShippingServiceCode = $ShippingServiceCode;
      $this->ServiceType = $ServiceType;
      $this->ShippingPackage = $ShippingPackage;
      $this->DimensionsRequired = $DimensionsRequired;
      $this->ValidForSellingFlow = $ValidForSellingFlow;
      $this->SurchargeApplicable = $SurchargeApplicable;
      $this->ShippingCarrier = $ShippingCarrier;
      $this->CODService = $CODService;
      $this->DeprecationDetails = $DeprecationDetails;
      $this->MappedToShippingServiceID = $MappedToShippingServiceID;
      $this->CostGroupFlat = $CostGroupFlat;
      $this->ShippingServicePackageDetails = $ShippingServicePackageDetails;
      $this->WeightRequired = $WeightRequired;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->ShippingCategory = $ShippingCategory;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpeditedService()
    {
      return $this->ExpeditedService;
    }

    /**
     * @param boolean $ExpeditedService
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setExpeditedService($ExpeditedService)
    {
      $this->ExpeditedService = $ExpeditedService;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternationalService()
    {
      return $this->InternationalService;
    }

    /**
     * @param boolean $InternationalService
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setInternationalService($InternationalService)
    {
      $this->InternationalService = $InternationalService;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingService()
    {
      return $this->ShippingService;
    }

    /**
     * @param string $ShippingService
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingService($ShippingService)
    {
      $this->ShippingService = $ShippingService;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingServiceID()
    {
      return $this->ShippingServiceID;
    }

    /**
     * @param int $ShippingServiceID
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingServiceID($ShippingServiceID)
    {
      $this->ShippingServiceID = $ShippingServiceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingTimeMax()
    {
      return $this->ShippingTimeMax;
    }

    /**
     * @param int $ShippingTimeMax
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingTimeMax($ShippingTimeMax)
    {
      $this->ShippingTimeMax = $ShippingTimeMax;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingTimeMin()
    {
      return $this->ShippingTimeMin;
    }

    /**
     * @param int $ShippingTimeMin
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingTimeMin($ShippingTimeMin)
    {
      $this->ShippingTimeMin = $ShippingTimeMin;
      return $this;
    }

    /**
     * @return ShippingServiceCodeType
     */
    public function getShippingServiceCode()
    {
      return $this->ShippingServiceCode;
    }

    /**
     * @param ShippingServiceCodeType $ShippingServiceCode
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingServiceCode($ShippingServiceCode)
    {
      $this->ShippingServiceCode = $ShippingServiceCode;
      return $this;
    }

    /**
     * @return ShippingTypeCodeType[]
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param ShippingTypeCodeType[] $ServiceType
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setServiceType(array $ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return ShippingPackageCodeType[]
     */
    public function getShippingPackage()
    {
      return $this->ShippingPackage;
    }

    /**
     * @param ShippingPackageCodeType[] $ShippingPackage
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingPackage(array $ShippingPackage)
    {
      $this->ShippingPackage = $ShippingPackage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDimensionsRequired()
    {
      return $this->DimensionsRequired;
    }

    /**
     * @param boolean $DimensionsRequired
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setDimensionsRequired($DimensionsRequired)
    {
      $this->DimensionsRequired = $DimensionsRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidForSellingFlow()
    {
      return $this->ValidForSellingFlow;
    }

    /**
     * @param boolean $ValidForSellingFlow
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setValidForSellingFlow($ValidForSellingFlow)
    {
      $this->ValidForSellingFlow = $ValidForSellingFlow;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSurchargeApplicable()
    {
      return $this->SurchargeApplicable;
    }

    /**
     * @param boolean $SurchargeApplicable
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setSurchargeApplicable($SurchargeApplicable)
    {
      $this->SurchargeApplicable = $SurchargeApplicable;
      return $this;
    }

    /**
     * @return ShippingCarrierCodeType[]
     */
    public function getShippingCarrier()
    {
      return $this->ShippingCarrier;
    }

    /**
     * @param ShippingCarrierCodeType[] $ShippingCarrier
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingCarrier(array $ShippingCarrier)
    {
      $this->ShippingCarrier = $ShippingCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCODService()
    {
      return $this->CODService;
    }

    /**
     * @param boolean $CODService
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setCODService($CODService)
    {
      $this->CODService = $CODService;
      return $this;
    }

    /**
     * @return AnnouncementMessageType[]
     */
    public function getDeprecationDetails()
    {
      return $this->DeprecationDetails;
    }

    /**
     * @param AnnouncementMessageType[] $DeprecationDetails
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setDeprecationDetails(array $DeprecationDetails)
    {
      $this->DeprecationDetails = $DeprecationDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getMappedToShippingServiceID()
    {
      return $this->MappedToShippingServiceID;
    }

    /**
     * @param int $MappedToShippingServiceID
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setMappedToShippingServiceID($MappedToShippingServiceID)
    {
      $this->MappedToShippingServiceID = $MappedToShippingServiceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostGroupFlat()
    {
      return $this->CostGroupFlat;
    }

    /**
     * @param string $CostGroupFlat
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setCostGroupFlat($CostGroupFlat)
    {
      $this->CostGroupFlat = $CostGroupFlat;
      return $this;
    }

    /**
     * @return ShippingServicePackageDetailsType[]
     */
    public function getShippingServicePackageDetails()
    {
      return $this->ShippingServicePackageDetails;
    }

    /**
     * @param ShippingServicePackageDetailsType[] $ShippingServicePackageDetails
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingServicePackageDetails(array $ShippingServicePackageDetails)
    {
      $this->ShippingServicePackageDetails = $ShippingServicePackageDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWeightRequired()
    {
      return $this->WeightRequired;
    }

    /**
     * @param boolean $WeightRequired
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setWeightRequired($WeightRequired)
    {
      $this->WeightRequired = $WeightRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCategory()
    {
      return $this->ShippingCategory;
    }

    /**
     * @param string $ShippingCategory
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setShippingCategory($ShippingCategory)
    {
      $this->ShippingCategory = $ShippingCategory;
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
     * @return \EbayWsdl\ShippingServiceDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
