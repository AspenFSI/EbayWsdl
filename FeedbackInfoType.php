<?php

namespace EbayWsdl;

class FeedbackInfoType
{

    /**
     * @var string $CommentText
     */
    protected $CommentText = null;

    /**
     * @var CommentTypeCodeType $CommentType
     */
    protected $CommentType = null;

    /**
     * @var UserIDType $TargetUser
     */
    protected $TargetUser = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CommentText
     * @param CommentTypeCodeType $CommentType
     * @param UserIDType $TargetUser
     * @param string $any
     */
    public function __construct($CommentText = null, $CommentType = null, $TargetUser = null, $any = null)
    {
      $this->CommentText = $CommentText;
      $this->CommentType = $CommentType;
      $this->TargetUser = $TargetUser;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getCommentText()
    {
      return $this->CommentText;
    }

    /**
     * @param string $CommentText
     * @return \EbayWsdl\FeedbackInfoType
     */
    public function setCommentText($CommentText)
    {
      $this->CommentText = $CommentText;
      return $this;
    }

    /**
     * @return CommentTypeCodeType
     */
    public function getCommentType()
    {
      return $this->CommentType;
    }

    /**
     * @param CommentTypeCodeType $CommentType
     * @return \EbayWsdl\FeedbackInfoType
     */
    public function setCommentType($CommentType)
    {
      $this->CommentType = $CommentType;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getTargetUser()
    {
      return $this->TargetUser;
    }

    /**
     * @param UserIDType $TargetUser
     * @return \EbayWsdl\FeedbackInfoType
     */
    public function setTargetUser($TargetUser)
    {
      $this->TargetUser = $TargetUser;
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
     * @return \EbayWsdl\FeedbackInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
