<?php

namespace EbayWsdl\Classes;

class StoreSubscriptionArrayType
{

    /**
     * @var StoreSubscriptionType[] $Subscription
     */
    protected $Subscription = null;

    /**
     * @param StoreSubscriptionType[] $Subscription
     */
    public function __construct(array $Subscription = null)
    {
      $this->Subscription = $Subscription;
    }

    /**
     * @return StoreSubscriptionType[]
     */
    public function getSubscription()
    {
      return $this->Subscription;
    }

    /**
     * @param StoreSubscriptionType[] $Subscription
     * @return \EbayWsdl\Classes\StoreSubscriptionArrayType
     */
    public function setSubscription(array $Subscription)
    {
      $this->Subscription = $Subscription;
      return $this;
    }

}
