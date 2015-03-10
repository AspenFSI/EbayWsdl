<?php

namespace EbayWsdl;

class ModifyNameArrayType
{

    /**
     * @var ModifyNameType[] $ModifyName
     */
    protected $ModifyName = null;

    /**
     * @param ModifyNameType[] $ModifyName
     */
    public function __construct(array $ModifyName = null)
    {
      $this->ModifyName = $ModifyName;
    }

    /**
     * @return ModifyNameType[]
     */
    public function getModifyName()
    {
      return $this->ModifyName;
    }

    /**
     * @param ModifyNameType[] $ModifyName
     * @return \EbayWsdl\ModifyNameArrayType
     */
    public function setModifyName(array $ModifyName)
    {
      $this->ModifyName = $ModifyName;
      return $this;
    }

}
