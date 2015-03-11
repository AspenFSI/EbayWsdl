<?php

namespace EbayWsdl\Classes;

class PictureManagerFolderType
{

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var PictureManagerPictureType[] $Picture
     */
    protected $Picture = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $FolderID
     * @param string $Name
     * @param PictureManagerPictureType[] $Picture
     * @param string $any
     */
    public function __construct($FolderID = null, $Name = null, array $Picture = null, $any = null)
    {
      $this->FolderID = $FolderID;
      $this->Name = $Name;
      $this->Picture = $Picture;
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
     * @return \EbayWsdl\Classes\PictureManagerFolderType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\Classes\PictureManagerFolderType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return PictureManagerPictureType[]
     */
    public function getPicture()
    {
      return $this->Picture;
    }

    /**
     * @param PictureManagerPictureType[] $Picture
     * @return \EbayWsdl\Classes\PictureManagerFolderType
     */
    public function setPicture(array $Picture)
    {
      $this->Picture = $Picture;
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
     * @return \EbayWsdl\Classes\PictureManagerFolderType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
