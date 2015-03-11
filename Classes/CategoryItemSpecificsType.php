<?php

namespace EbayWsdl\Classes;

class CategoryItemSpecificsType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var NameValueListArrayType $ItemSpecifics
     */
    protected $ItemSpecifics = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CategoryID
     * @param NameValueListArrayType $ItemSpecifics
     * @param string $any
     */
    public function __construct($CategoryID = null, $ItemSpecifics = null, $any = null)
    {
      $this->CategoryID = $CategoryID;
      $this->ItemSpecifics = $ItemSpecifics;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\CategoryItemSpecificsType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return NameValueListArrayType
     */
    public function getItemSpecifics()
    {
      return $this->ItemSpecifics;
    }

    /**
     * @param NameValueListArrayType $ItemSpecifics
     * @return \EbayWsdl\Classes\CategoryItemSpecificsType
     */
    public function setItemSpecifics($ItemSpecifics)
    {
      $this->ItemSpecifics = $ItemSpecifics;
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
     * @return \EbayWsdl\Classes\CategoryItemSpecificsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
