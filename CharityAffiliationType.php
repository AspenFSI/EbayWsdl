<?php

namespace EbayWsdl;

class CharityAffiliationType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var CharityAffiliationTypeCodeType $type
     */
    protected $type = null;

    /**
     * @param string $any
     * @param string $id
     * @param CharityAffiliationTypeCodeType $type
     */
    public function __construct($any = null, $id = null, $type = null)
    {
      $this->any = $any;
      $this->id = $id;
      $this->type = $type;
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
     * @return \EbayWsdl\CharityAffiliationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \EbayWsdl\CharityAffiliationType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return CharityAffiliationTypeCodeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CharityAffiliationTypeCodeType $type
     * @return \EbayWsdl\CharityAffiliationType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
