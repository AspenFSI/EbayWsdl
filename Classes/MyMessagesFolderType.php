<?php

namespace EbayWsdl\Classes;

class MyMessagesFolderType
{

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var string $FolderName
     */
    protected $FolderName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $FolderID
     * @param string $FolderName
     * @param string $any
     */
    public function __construct($FolderID = null, $FolderName = null, $any = null)
    {
      $this->FolderID = $FolderID;
      $this->FolderName = $FolderName;
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
     * @return \EbayWsdl\Classes\MyMessagesFolderType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
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
     * @return \EbayWsdl\Classes\MyMessagesFolderType
     */
    public function setFolderName($FolderName)
    {
      $this->FolderName = $FolderName;
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
     * @return \EbayWsdl\Classes\MyMessagesFolderType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
