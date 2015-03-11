<?php

namespace EbayWsdl\Classes;

class GetAdFormatLeadsRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var MessageStatusTypeCodeType $Status
     */
    protected $Status = null;

    /**
     * @var boolean $IncludeMemberMessages
     */
    protected $IncludeMemberMessages = null;

    /**
     * @var \DateTime $StartCreationTime
     */
    protected $StartCreationTime = null;

    /**
     * @var \DateTime $EndCreationTime
     */
    protected $EndCreationTime = null;

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
     * @param ItemIDType $ItemID
     * @param MessageStatusTypeCodeType $Status
     * @param boolean $IncludeMemberMessages
     * @param \DateTime $StartCreationTime
     * @param \DateTime $EndCreationTime
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $Status = null, $IncludeMemberMessages = null, \DateTime $StartCreationTime = null, \DateTime $EndCreationTime = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->Status = $Status;
      $this->IncludeMemberMessages = $IncludeMemberMessages;
      $this->StartCreationTime = $StartCreationTime ? $StartCreationTime->format(\DateTime::ATOM) : null;
      $this->EndCreationTime = $EndCreationTime ? $EndCreationTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\Classes\GetAdFormatLeadsRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return MessageStatusTypeCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param MessageStatusTypeCodeType $Status
     * @return \EbayWsdl\Classes\GetAdFormatLeadsRequestType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeMemberMessages()
    {
      return $this->IncludeMemberMessages;
    }

    /**
     * @param boolean $IncludeMemberMessages
     * @return \EbayWsdl\Classes\GetAdFormatLeadsRequestType
     */
    public function setIncludeMemberMessages($IncludeMemberMessages)
    {
      $this->IncludeMemberMessages = $IncludeMemberMessages;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartCreationTime()
    {
      if ($this->StartCreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartCreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartCreationTime
     * @return \EbayWsdl\Classes\GetAdFormatLeadsRequestType
     */
    public function setStartCreationTime(\DateTime $StartCreationTime)
    {
      $this->StartCreationTime = $StartCreationTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndCreationTime()
    {
      if ($this->EndCreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndCreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndCreationTime
     * @return \EbayWsdl\Classes\GetAdFormatLeadsRequestType
     */
    public function setEndCreationTime(\DateTime $EndCreationTime)
    {
      $this->EndCreationTime = $EndCreationTime->format(\DateTime::ATOM);
      return $this;
    }

}
