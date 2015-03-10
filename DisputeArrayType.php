<?php

namespace EbayWsdl;

class DisputeArrayType
{

    /**
     * @var DisputeType[] $Dispute
     */
    protected $Dispute = null;

    /**
     * @param DisputeType[] $Dispute
     */
    public function __construct(array $Dispute = null)
    {
      $this->Dispute = $Dispute;
    }

    /**
     * @return DisputeType[]
     */
    public function getDispute()
    {
      return $this->Dispute;
    }

    /**
     * @param DisputeType[] $Dispute
     * @return \EbayWsdl\DisputeArrayType
     */
    public function setDispute(array $Dispute)
    {
      $this->Dispute = $Dispute;
      return $this;
    }

}
