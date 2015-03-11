<?php

namespace EbayWsdl\Classes;

class FeedbackCommentArrayType
{

    /**
     * @var string[] $StoredCommentText
     */
    protected $StoredCommentText = null;

    /**
     * @param string[] $StoredCommentText
     */
    public function __construct(array $StoredCommentText = null)
    {
      $this->StoredCommentText = $StoredCommentText;
    }

    /**
     * @return string[]
     */
    public function getStoredCommentText()
    {
      return $this->StoredCommentText;
    }

    /**
     * @param string[] $StoredCommentText
     * @return \EbayWsdl\Classes\FeedbackCommentArrayType
     */
    public function setStoredCommentText(array $StoredCommentText)
    {
      $this->StoredCommentText = $StoredCommentText;
      return $this;
    }

}
