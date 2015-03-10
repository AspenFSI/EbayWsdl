<?php

namespace EbayWsdl;

class MyMessagesMessageIDArrayType
{

    /**
     * @var MyMessagesMessageIDType[] $MessageID
     */
    protected $MessageID = null;

    /**
     * @param MyMessagesMessageIDType[] $MessageID
     */
    public function __construct(array $MessageID = null)
    {
      $this->MessageID = $MessageID;
    }

    /**
     * @return MyMessagesMessageIDType[]
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param MyMessagesMessageIDType[] $MessageID
     * @return \EbayWsdl\MyMessagesMessageIDArrayType
     */
    public function setMessageID(array $MessageID)
    {
      $this->MessageID = $MessageID;
      return $this;
    }

}
