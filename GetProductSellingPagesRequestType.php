<?php

namespace EbayWsdl;

class GetProductSellingPagesRequestType extends AbstractRequestType
{

    /**
     * @var ProductUseCaseCodeType $UseCase
     */
    protected $UseCase = null;

    /**
     * @var ProductType[] $Product
     */
    protected $Product = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param ProductUseCaseCodeType $UseCase
     * @param ProductType[] $Product
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $UseCase = null, array $Product = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->UseCase = $UseCase;
      $this->Product = $Product;
    }

    /**
     * @return ProductUseCaseCodeType
     */
    public function getUseCase()
    {
      return $this->UseCase;
    }

    /**
     * @param ProductUseCaseCodeType $UseCase
     * @return \EbayWsdl\GetProductSellingPagesRequestType
     */
    public function setUseCase($UseCase)
    {
      $this->UseCase = $UseCase;
      return $this;
    }

    /**
     * @return ProductType[]
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param ProductType[] $Product
     * @return \EbayWsdl\GetProductSellingPagesRequestType
     */
    public function setProduct(array $Product)
    {
      $this->Product = $Product;
      return $this;
    }

}
