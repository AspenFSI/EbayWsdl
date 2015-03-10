<?php

namespace EbayWsdl;

class FeedbackDetailArrayType
{

    /**
     * @var FeedbackDetailType[] $FeedbackDetail
     */
    protected $FeedbackDetail = null;

    /**
     * @param FeedbackDetailType[] $FeedbackDetail
     */
    public function __construct(array $FeedbackDetail = null)
    {
      $this->FeedbackDetail = $FeedbackDetail;
    }

    /**
     * @return FeedbackDetailType[]
     */
    public function getFeedbackDetail()
    {
      return $this->FeedbackDetail;
    }

    /**
     * @param FeedbackDetailType[] $FeedbackDetail
     * @return \EbayWsdl\FeedbackDetailArrayType
     */
    public function setFeedbackDetail(array $FeedbackDetail)
    {
      $this->FeedbackDetail = $FeedbackDetail;
      return $this;
    }

}
