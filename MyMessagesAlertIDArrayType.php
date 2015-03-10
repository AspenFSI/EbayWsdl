<?php

namespace EbayWsdl;

class MyMessagesAlertIDArrayType
{

    /**
     * @var MyMessagesAlertIDType[] $AlertID
     */
    protected $AlertID = null;

    /**
     * @param MyMessagesAlertIDType[] $AlertID
     */
    public function __construct(array $AlertID = null)
    {
      $this->AlertID = $AlertID;
    }

    /**
     * @return MyMessagesAlertIDType[]
     */
    public function getAlertID()
    {
      return $this->AlertID;
    }

    /**
     * @param MyMessagesAlertIDType[] $AlertID
     * @return \EbayWsdl\MyMessagesAlertIDArrayType
     */
    public function setAlertID(array $AlertID)
    {
      $this->AlertID = $AlertID;
      return $this;
    }

}
