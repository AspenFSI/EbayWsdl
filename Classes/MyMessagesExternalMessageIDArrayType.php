<?php

namespace EbayWsdl\Classes;

class MyMessagesExternalMessageIDArrayType
{

    /**
     * @var MyMessagesExternalMessageIDType[] $ExternalMessageID
     */
    protected $ExternalMessageID = null;

    /**
     * @param MyMessagesExternalMessageIDType[] $ExternalMessageID
     */
    public function __construct(array $ExternalMessageID = null)
    {
      $this->ExternalMessageID = $ExternalMessageID;
    }

    /**
     * @return MyMessagesExternalMessageIDType[]
     */
    public function getExternalMessageID()
    {
      return $this->ExternalMessageID;
    }

    /**
     * @param MyMessagesExternalMessageIDType[] $ExternalMessageID
     * @return \EbayWsdl\Classes\MyMessagesExternalMessageIDArrayType
     */
    public function setExternalMessageID(array $ExternalMessageID)
    {
      $this->ExternalMessageID = $ExternalMessageID;
      return $this;
    }

}
