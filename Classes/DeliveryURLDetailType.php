<?php

namespace EbayWsdl\Classes;

class DeliveryURLDetailType
{

    /**
     * @var string $DeliveryURLName
     */
    protected $DeliveryURLName = null;

    /**
     * @var anyURI $DeliveryURL
     */
    protected $DeliveryURL = null;

    /**
     * @var EnableCodeType $Status
     */
    protected $Status = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $DeliveryURLName
     * @param anyURI $DeliveryURL
     * @param EnableCodeType $Status
     * @param string $any
     */
    public function __construct($DeliveryURLName = null, $DeliveryURL = null, $Status = null, $any = null)
    {
      $this->DeliveryURLName = $DeliveryURLName;
      $this->DeliveryURL = $DeliveryURL;
      $this->Status = $Status;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getDeliveryURLName()
    {
      return $this->DeliveryURLName;
    }

    /**
     * @param string $DeliveryURLName
     * @return \EbayWsdl\Classes\DeliveryURLDetailType
     */
    public function setDeliveryURLName($DeliveryURLName)
    {
      $this->DeliveryURLName = $DeliveryURLName;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDeliveryURL()
    {
      return $this->DeliveryURL;
    }

    /**
     * @param anyURI $DeliveryURL
     * @return \EbayWsdl\Classes\DeliveryURLDetailType
     */
    public function setDeliveryURL($DeliveryURL)
    {
      $this->DeliveryURL = $DeliveryURL;
      return $this;
    }

    /**
     * @return EnableCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param EnableCodeType $Status
     * @return \EbayWsdl\Classes\DeliveryURLDetailType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\Classes\DeliveryURLDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
