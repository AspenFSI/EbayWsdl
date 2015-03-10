<?php

namespace EbayWsdl;

class GetDescriptionTemplatesRequestType extends AbstractRequestType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var \DateTime $LastModifiedTime
     */
    protected $LastModifiedTime = null;

    /**
     * @var boolean $MotorVehicles
     */
    protected $MotorVehicles = null;

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
     * @param string $CategoryID
     * @param \DateTime $LastModifiedTime
     * @param boolean $MotorVehicles
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CategoryID = null, \DateTime $LastModifiedTime = null, $MotorVehicles = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategoryID = $CategoryID;
      $this->LastModifiedTime = $LastModifiedTime ? $LastModifiedTime->format(\DateTime::ATOM) : null;
      $this->MotorVehicles = $MotorVehicles;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\GetDescriptionTemplatesRequestType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
      if ($this->LastModifiedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedTime
     * @return \EbayWsdl\GetDescriptionTemplatesRequestType
     */
    public function setLastModifiedTime(\DateTime $LastModifiedTime)
    {
      $this->LastModifiedTime = $LastModifiedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMotorVehicles()
    {
      return $this->MotorVehicles;
    }

    /**
     * @param boolean $MotorVehicles
     * @return \EbayWsdl\GetDescriptionTemplatesRequestType
     */
    public function setMotorVehicles($MotorVehicles)
    {
      $this->MotorVehicles = $MotorVehicles;
      return $this;
    }

}
