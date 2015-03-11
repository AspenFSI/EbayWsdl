<?php

namespace EbayWsdl\Classes;

class AddMemberMessagesAAQToBidderRequestContainerType
{

    /**
     * @var string $CorrelationID
     */
    protected $CorrelationID = null;

    /**
     * @var string $ItemID
     */
    protected $ItemID = null;

    /**
     * @var MemberMessageType $MemberMessage
     */
    protected $MemberMessage = null;

    /**
     * @param string $CorrelationID
     * @param string $ItemID
     * @param MemberMessageType $MemberMessage
     */
    public function __construct($CorrelationID = null, $ItemID = null, $MemberMessage = null)
    {
      $this->CorrelationID = $CorrelationID;
      $this->ItemID = $ItemID;
      $this->MemberMessage = $MemberMessage;
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
     * @return \EbayWsdl\Classes\AddMemberMessagesAAQToBidderRequestContainerType
     */
    public function setCorrelationID($CorrelationID)
    {
      $this->CorrelationID = $CorrelationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param string $ItemID
     * @return \EbayWsdl\Classes\AddMemberMessagesAAQToBidderRequestContainerType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return MemberMessageType
     */
    public function getMemberMessage()
    {
      return $this->MemberMessage;
    }

    /**
     * @param MemberMessageType $MemberMessage
     * @return \EbayWsdl\Classes\AddMemberMessagesAAQToBidderRequestContainerType
     */
    public function setMemberMessage($MemberMessage)
    {
      $this->MemberMessage = $MemberMessage;
      return $this;
    }

}
