<?php

namespace EbayWsdl;

class ItemCompatibilityType
{

    /**
     * @var boolean $Delete
     */
    protected $Delete = null;

    /**
     * @var NameValueListType[] $NameValueList
     */
    protected $NameValueList = null;

    /**
     * @var string $CompatibilityNotes
     */
    protected $CompatibilityNotes = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $Delete
     * @param NameValueListType[] $NameValueList
     * @param string $CompatibilityNotes
     * @param string $any
     */
    public function __construct($Delete = null, array $NameValueList = null, $CompatibilityNotes = null, $any = null)
    {
      $this->Delete = $Delete;
      $this->NameValueList = $NameValueList;
      $this->CompatibilityNotes = $CompatibilityNotes;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getDelete()
    {
      return $this->Delete;
    }

    /**
     * @param boolean $Delete
     * @return \EbayWsdl\ItemCompatibilityType
     */
    public function setDelete($Delete)
    {
      $this->Delete = $Delete;
      return $this;
    }

    /**
     * @return NameValueListType[]
     */
    public function getNameValueList()
    {
      return $this->NameValueList;
    }

    /**
     * @param NameValueListType[] $NameValueList
     * @return \EbayWsdl\ItemCompatibilityType
     */
    public function setNameValueList(array $NameValueList)
    {
      $this->NameValueList = $NameValueList;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompatibilityNotes()
    {
      return $this->CompatibilityNotes;
    }

    /**
     * @param string $CompatibilityNotes
     * @return \EbayWsdl\ItemCompatibilityType
     */
    public function setCompatibilityNotes($CompatibilityNotes)
    {
      $this->CompatibilityNotes = $CompatibilityNotes;
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
     * @return \EbayWsdl\ItemCompatibilityType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
