<?php

namespace EbayWsdl\Classes;

class SellingManagerFolderDetailsType
{

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var int $ParentFolderID
     */
    protected $ParentFolderID = null;

    /**
     * @var int $FolderLevel
     */
    protected $FolderLevel = null;

    /**
     * @var string $FolderName
     */
    protected $FolderName = null;

    /**
     * @var string $FolderComment
     */
    protected $FolderComment = null;

    /**
     * @var SellingManagerFolderDetailsType[] $ChildFolder
     */
    protected $ChildFolder = null;

    /**
     * @var \DateTime $CreationTime
     */
    protected $CreationTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $FolderID
     * @param int $ParentFolderID
     * @param int $FolderLevel
     * @param string $FolderName
     * @param string $FolderComment
     * @param SellingManagerFolderDetailsType[] $ChildFolder
     * @param \DateTime $CreationTime
     * @param string $any
     */
    public function __construct($FolderID = null, $ParentFolderID = null, $FolderLevel = null, $FolderName = null, $FolderComment = null, array $ChildFolder = null, \DateTime $CreationTime = null, $any = null)
    {
      $this->FolderID = $FolderID;
      $this->ParentFolderID = $ParentFolderID;
      $this->FolderLevel = $FolderLevel;
      $this->FolderName = $FolderName;
      $this->FolderComment = $FolderComment;
      $this->ChildFolder = $ChildFolder;
      $this->CreationTime = $CreationTime ? $CreationTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getFolderID()
    {
      return $this->FolderID;
    }

    /**
     * @param int $FolderID
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentFolderID()
    {
      return $this->ParentFolderID;
    }

    /**
     * @param int $ParentFolderID
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setParentFolderID($ParentFolderID)
    {
      $this->ParentFolderID = $ParentFolderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getFolderLevel()
    {
      return $this->FolderLevel;
    }

    /**
     * @param int $FolderLevel
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setFolderLevel($FolderLevel)
    {
      $this->FolderLevel = $FolderLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getFolderName()
    {
      return $this->FolderName;
    }

    /**
     * @param string $FolderName
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setFolderName($FolderName)
    {
      $this->FolderName = $FolderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFolderComment()
    {
      return $this->FolderComment;
    }

    /**
     * @param string $FolderComment
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setFolderComment($FolderComment)
    {
      $this->FolderComment = $FolderComment;
      return $this;
    }

    /**
     * @return SellingManagerFolderDetailsType[]
     */
    public function getChildFolder()
    {
      return $this->ChildFolder;
    }

    /**
     * @param SellingManagerFolderDetailsType[] $ChildFolder
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setChildFolder(array $ChildFolder)
    {
      $this->ChildFolder = $ChildFolder;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationTime()
    {
      if ($this->CreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationTime
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setCreationTime(\DateTime $CreationTime)
    {
      $this->CreationTime = $CreationTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\SellingManagerFolderDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
