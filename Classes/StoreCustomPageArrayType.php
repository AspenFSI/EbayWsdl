<?php

namespace EbayWsdl\Classes;

class StoreCustomPageArrayType
{

    /**
     * @var StoreCustomPageType[] $CustomPage
     */
    protected $CustomPage = null;

    /**
     * @param StoreCustomPageType[] $CustomPage
     */
    public function __construct(array $CustomPage = null)
    {
      $this->CustomPage = $CustomPage;
    }

    /**
     * @return StoreCustomPageType[]
     */
    public function getCustomPage()
    {
      return $this->CustomPage;
    }

    /**
     * @param StoreCustomPageType[] $CustomPage
     * @return \EbayWsdl\Classes\StoreCustomPageArrayType
     */
    public function setCustomPage(array $CustomPage)
    {
      $this->CustomPage = $CustomPage;
      return $this;
    }

}
