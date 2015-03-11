<?php

namespace EbayWsdl\Classes;

class PictureManagerDetailsType
{

    /**
     * @var PictureManagerSubscriptionLevelCodeType $SubscriptionLevel
     */
    protected $SubscriptionLevel = null;

    /**
     * @var int $StorageUsed
     */
    protected $StorageUsed = null;

    /**
     * @var int $TotalStorageAvailable
     */
    protected $TotalStorageAvailable = null;

    /**
     * @var boolean $KeepOriginal
     */
    protected $KeepOriginal = null;

    /**
     * @var boolean $WatermarkEPS
     */
    protected $WatermarkEPS = null;

    /**
     * @var boolean $WatermarkUserID
     */
    protected $WatermarkUserID = null;

    /**
     * @var PictureManagerFolderType[] $Folder
     */
    protected $Folder = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PictureManagerSubscriptionLevelCodeType $SubscriptionLevel
     * @param int $StorageUsed
     * @param int $TotalStorageAvailable
     * @param boolean $KeepOriginal
     * @param boolean $WatermarkEPS
     * @param boolean $WatermarkUserID
     * @param PictureManagerFolderType[] $Folder
     * @param string $any
     */
    public function __construct($SubscriptionLevel = null, $StorageUsed = null, $TotalStorageAvailable = null, $KeepOriginal = null, $WatermarkEPS = null, $WatermarkUserID = null, array $Folder = null, $any = null)
    {
      $this->SubscriptionLevel = $SubscriptionLevel;
      $this->StorageUsed = $StorageUsed;
      $this->TotalStorageAvailable = $TotalStorageAvailable;
      $this->KeepOriginal = $KeepOriginal;
      $this->WatermarkEPS = $WatermarkEPS;
      $this->WatermarkUserID = $WatermarkUserID;
      $this->Folder = $Folder;
      $this->any = $any;
    }

    /**
     * @return PictureManagerSubscriptionLevelCodeType
     */
    public function getSubscriptionLevel()
    {
      return $this->SubscriptionLevel;
    }

    /**
     * @param PictureManagerSubscriptionLevelCodeType $SubscriptionLevel
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setSubscriptionLevel($SubscriptionLevel)
    {
      $this->SubscriptionLevel = $SubscriptionLevel;
      return $this;
    }

    /**
     * @return int
     */
    public function getStorageUsed()
    {
      return $this->StorageUsed;
    }

    /**
     * @param int $StorageUsed
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setStorageUsed($StorageUsed)
    {
      $this->StorageUsed = $StorageUsed;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalStorageAvailable()
    {
      return $this->TotalStorageAvailable;
    }

    /**
     * @param int $TotalStorageAvailable
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setTotalStorageAvailable($TotalStorageAvailable)
    {
      $this->TotalStorageAvailable = $TotalStorageAvailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepOriginal()
    {
      return $this->KeepOriginal;
    }

    /**
     * @param boolean $KeepOriginal
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setKeepOriginal($KeepOriginal)
    {
      $this->KeepOriginal = $KeepOriginal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWatermarkEPS()
    {
      return $this->WatermarkEPS;
    }

    /**
     * @param boolean $WatermarkEPS
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setWatermarkEPS($WatermarkEPS)
    {
      $this->WatermarkEPS = $WatermarkEPS;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWatermarkUserID()
    {
      return $this->WatermarkUserID;
    }

    /**
     * @param boolean $WatermarkUserID
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setWatermarkUserID($WatermarkUserID)
    {
      $this->WatermarkUserID = $WatermarkUserID;
      return $this;
    }

    /**
     * @return PictureManagerFolderType[]
     */
    public function getFolder()
    {
      return $this->Folder;
    }

    /**
     * @param PictureManagerFolderType[] $Folder
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setFolder(array $Folder)
    {
      $this->Folder = $Folder;
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
     * @return \EbayWsdl\Classes\PictureManagerDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
