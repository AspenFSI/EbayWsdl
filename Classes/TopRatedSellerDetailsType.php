<?php

namespace EbayWsdl\Classes;

class TopRatedSellerDetailsType
{

    /**
     * @var TopRatedProgramCodeType[] $TopRatedProgram
     */
    protected $TopRatedProgram = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TopRatedProgramCodeType[] $TopRatedProgram
     * @param string $any
     */
    public function __construct(array $TopRatedProgram = null, $any = null)
    {
      $this->TopRatedProgram = $TopRatedProgram;
      $this->any = $any;
    }

    /**
     * @return TopRatedProgramCodeType[]
     */
    public function getTopRatedProgram()
    {
      return $this->TopRatedProgram;
    }

    /**
     * @param TopRatedProgramCodeType[] $TopRatedProgram
     * @return \EbayWsdl\Classes\TopRatedSellerDetailsType
     */
    public function setTopRatedProgram(array $TopRatedProgram)
    {
      $this->TopRatedProgram = $TopRatedProgram;
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
     * @return \EbayWsdl\Classes\TopRatedSellerDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
