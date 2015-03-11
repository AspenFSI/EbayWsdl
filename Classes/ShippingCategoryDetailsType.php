<?php

namespace EbayWsdl\Classes;

class ShippingCategoryDetailsType
{

    /**
     * @var string $ShippingCategory
     */
    protected $ShippingCategory = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ShippingCategory
     * @param string $Description
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($ShippingCategory = null, $Description = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->ShippingCategory = $ShippingCategory;
      $this->Description = $Description;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getShippingCategory()
    {
      return $this->ShippingCategory;
    }

    /**
     * @param string $ShippingCategory
     * @return \EbayWsdl\Classes\ShippingCategoryDetailsType
     */
    public function setShippingCategory($ShippingCategory)
    {
      $this->ShippingCategory = $ShippingCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\ShippingCategoryDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\Classes\ShippingCategoryDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\Classes\ShippingCategoryDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\ShippingCategoryDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
