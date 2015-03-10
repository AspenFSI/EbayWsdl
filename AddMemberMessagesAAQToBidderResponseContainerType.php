<?php

namespace EbayWsdl;

class AddMemberMessagesAAQToBidderResponseContainerType
{

    /**
     * @var string $CorrelationID
     */
    protected $CorrelationID = null;

    /**
     * @var AckCodeType $Ack
     */
    protected $Ack = null;

    /**
     * @param string $CorrelationID
     * @param AckCodeType $Ack
     */
    public function __construct($CorrelationID = null, $Ack = null)
    {
      $this->CorrelationID = $CorrelationID;
      $this->Ack = $Ack;
    }

    /**
     * @return string
     */
    public function getCorrelationID()
    {
      return $this->CorrelationID;
    }

    /**
     * @param string $CorrelationID
     * @return \EbayWsdl\AddMemberMessagesAAQToBidderResponseContainerType
     */
    public function setCorrelationID($CorrelationID)
    {
      $this->CorrelationID = $CorrelationID;
      return $this;
    }

    /**
     * @return AckCodeType
     */
    public function getAck()
    {
      return $this->Ack;
    }

    /**
     * @param AckCodeType $Ack
     * @return \EbayWsdl\AddMemberMessagesAAQToBidderResponseContainerType
     */
    public function setAck($Ack)
    {
      $this->Ack = $Ack;
      return $this;
    }

}
