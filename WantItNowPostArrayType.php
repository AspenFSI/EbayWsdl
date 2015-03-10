<?php

namespace EbayWsdl;

class WantItNowPostArrayType
{

    /**
     * @var WantItNowPostType[] $WantItNowPost
     */
    protected $WantItNowPost = null;

    /**
     * @param WantItNowPostType[] $WantItNowPost
     */
    public function __construct(array $WantItNowPost = null)
    {
      $this->WantItNowPost = $WantItNowPost;
    }

    /**
     * @return WantItNowPostType[]
     */
    public function getWantItNowPost()
    {
      return $this->WantItNowPost;
    }

    /**
     * @param WantItNowPostType[] $WantItNowPost
     * @return \EbayWsdl\WantItNowPostArrayType
     */
    public function setWantItNowPost(array $WantItNowPost)
    {
      $this->WantItNowPost = $WantItNowPost;
      return $this;
    }

}
