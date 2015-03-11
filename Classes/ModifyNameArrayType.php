<?php

namespace EbayWsdl\Classes;

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
     * @return \EbayWsdl\Classes\ModifyNameArrayType
     */
    public function setModifyName(array $ModifyName)
    {
      $this->ModifyName = $ModifyName;
      return $this;
    }

}
