<?php

namespace EbayWsdl;

class AddItemFromSellingManagerTemplateRequestType extends AbstractRequestType
{

    /**
     * @var int $SaleTemplateID
     */
    protected $SaleTemplateID = null;

    /**
     * @var \DateTime $ScheduleTime
     */
    protected $ScheduleTime = null;

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

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
     * @param int $SaleTemplateID
     * @param \DateTime $ScheduleTime
     * @param ItemType $Item
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SaleTemplateID = null, \DateTime $ScheduleTime = null, $Item = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SaleTemplateID = $SaleTemplateID;
      $this->ScheduleTime = $ScheduleTime ? $ScheduleTime->format(\DateTime::ATOM) : null;
      $this->Item = $Item;
    }

    /**
     * @return int
     */
    public function getSaleTemplateID()
    {
      return $this->SaleTemplateID;
    }

    /**
     * @param int $SaleTemplateID
     * @return \EbayWsdl\AddItemFromSellingManagerTemplateRequestType
     */
    public function setSaleTemplateID($SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduleTime()
    {
      if ($this->ScheduleTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduleTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduleTime
     * @return \EbayWsdl\AddItemFromSellingManagerTemplateRequestType
     */
    public function setScheduleTime(\DateTime $ScheduleTime)
    {
      $this->ScheduleTime = $ScheduleTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\AddItemFromSellingManagerTemplateRequestType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

}
