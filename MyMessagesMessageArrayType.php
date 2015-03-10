<?php

namespace EbayWsdl;

class MyMessagesMessageArrayType
{

    /**
     * @var MyMessagesMessageType[] $Message
     */
    protected $Message = null;

    /**
     * @param MyMessagesMessageType[] $Message
     */
    public function __construct(array $Message = null)
    {
      $this->Message = $Message;
    }

    /**
     * @return MyMessagesMessageType[]
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param MyMessagesMessageType[] $Message
     * @return \EbayWsdl\MyMessagesMessageArrayType
     */
    public function setMessage(array $Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
