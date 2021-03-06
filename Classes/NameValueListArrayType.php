<?php

namespace EbayWsdl\Classes;

class NameValueListArrayType
{

    /**
     * @var NameValueListType[] $NameValueList
     */
    protected $NameValueList = null;

    /**
     * @param NameValueListType[] $NameValueList
     */
    public function __construct(array $NameValueList = null)
    {
      $this->NameValueList = $NameValueList;
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
     * @return \EbayWsdl\Classes\NameValueListArrayType
     */
    public function setNameValueList(array $NameValueList)
    {
      $this->NameValueList = $NameValueList;
      return $this;
    }

}
