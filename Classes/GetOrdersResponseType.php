<?php

namespace EbayWsdl\Classes;

class GetOrdersResponseType extends AbstractResponseType
{

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var boolean $HasMoreOrders
     */
    protected $HasMoreOrders = null;

    /**
     * @var OrderArrayType $OrderArray
     */
    protected $OrderArray = null;

    /**
     * @var int $OrdersPerPage
     */
    protected $OrdersPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var int $ReturnedOrderCountActual
     */
    protected $ReturnedOrderCountActual = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param PaginationResultType $PaginationResult
     * @param boolean $HasMoreOrders
     * @param OrderArrayType $OrderArray
     * @param int $OrdersPerPage
     * @param int $PageNumber
     * @param int $ReturnedOrderCountActual
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PaginationResult = null, $HasMoreOrders = null, $OrderArray = null, $OrdersPerPage = null, $PageNumber = null, $ReturnedOrderCountActual = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PaginationResult = $PaginationResult;
      $this->HasMoreOrders = $HasMoreOrders;
      $this->OrderArray = $OrderArray;
      $this->OrdersPerPage = $OrdersPerPage;
      $this->PageNumber = $PageNumber;
      $this->ReturnedOrderCountActual = $ReturnedOrderCountActual;
    }

    /**
     * @return PaginationResultType
     */
    public function getPaginationResult()
    {
      return $this->PaginationResult;
    }

    /**
     * @param PaginationResultType $PaginationResult
     * @return \EbayWsdl\Classes\GetOrdersResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMoreOrders()
    {
      return $this->HasMoreOrders;
    }

    /**
     * @param boolean $HasMoreOrders
     * @return \EbayWsdl\Classes\GetOrdersResponseType
     */
    public function setHasMoreOrders($HasMoreOrders)
    {
      $this->HasMoreOrders = $HasMoreOrders;
      return $this;
    }

    /**
     * @return OrderArrayType
     */
    public function getOrderArray()
    {
      return $this->OrderArray;
    }

    /**
     * @param OrderArrayType $OrderArray
     * @return \EbayWsdl\Classes\GetOrdersResponseType
     */
    public function setOrderArray($OrderArray)
    {
      $this->OrderArray = $OrderArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrdersPerPage()
    {
      return $this->OrdersPerPage;
    }

    /**
     * @param int $OrdersPerPage
     * @return \EbayWsdl\Classes\GetOrdersResponseType
     */
    public function setOrdersPerPage($OrdersPerPage)
    {
      $this->OrdersPerPage = $OrdersPerPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->PageNumber;
    }

    /**
     * @param int $PageNumber
     * @return \EbayWsdl\Classes\GetOrdersResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnedOrderCountActual()
    {
      return $this->ReturnedOrderCountActual;
    }

    /**
     * @param int $ReturnedOrderCountActual
     * @return \EbayWsdl\Classes\GetOrdersResponseType
     */
    public function setReturnedOrderCountActual($ReturnedOrderCountActual)
    {
      $this->ReturnedOrderCountActual = $ReturnedOrderCountActual;
      return $this;
    }

}
