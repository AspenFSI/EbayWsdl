<?php

namespace EbayWsdl\Classes;

class MyMessagesAlertArrayType
{

    /**
     * @var MyMessagesAlertType[] $Alert
     */
    protected $Alert = null;

    /**
     * @param MyMessagesAlertType[] $Alert
     */
    public function __construct(array $Alert = null)
    {
      $this->Alert = $Alert;
    }

    /**
     * @return MyMessagesAlertType[]
     */
    public function getAlert()
    {
      return $this->Alert;
    }

    /**
     * @param MyMessagesAlertType[] $Alert
     * @return \EbayWsdl\Classes\MyMessagesAlertArrayType
     */
    public function setAlert(array $Alert)
    {
      $this->Alert = $Alert;
      return $this;
    }

}
