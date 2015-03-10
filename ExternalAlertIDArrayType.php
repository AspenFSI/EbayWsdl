<?php

namespace EbayWsdl;

class ExternalAlertIDArrayType
{

    /**
     * @var string[] $ExternalAlertID
     */
    protected $ExternalAlertID = null;

    /**
     * @param string[] $ExternalAlertID
     */
    public function __construct(array $ExternalAlertID = null)
    {
      $this->ExternalAlertID = $ExternalAlertID;
    }

    /**
     * @return string[]
     */
    public function getExternalAlertID()
    {
      return $this->ExternalAlertID;
    }

    /**
     * @param string[] $ExternalAlertID
     * @return \EbayWsdl\ExternalAlertIDArrayType
     */
    public function setExternalAlertID(array $ExternalAlertID)
    {
      $this->ExternalAlertID = $ExternalAlertID;
      return $this;
    }

}
