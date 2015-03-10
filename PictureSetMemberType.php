<?php

namespace EbayWsdl;

class PictureSetMemberType
{

    /**
     * @var anyURI $MemberURL
     */
    protected $MemberURL = null;

    /**
     * @var int $PictureHeight
     */
    protected $PictureHeight = null;

    /**
     * @var int $PictureWidth
     */
    protected $PictureWidth = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $MemberURL
     * @param int $PictureHeight
     * @param int $PictureWidth
     * @param string $any
     */
    public function __construct($MemberURL = null, $PictureHeight = null, $PictureWidth = null, $any = null)
    {
      $this->MemberURL = $MemberURL;
      $this->PictureHeight = $PictureHeight;
      $this->PictureWidth = $PictureWidth;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getMemberURL()
    {
      return $this->MemberURL;
    }

    /**
     * @param anyURI $MemberURL
     * @return \EbayWsdl\PictureSetMemberType
     */
    public function setMemberURL($MemberURL)
    {
      $this->MemberURL = $MemberURL;
      return $this;
    }

    /**
     * @return int
     */
    public function getPictureHeight()
    {
      return $this->PictureHeight;
    }

    /**
     * @param int $PictureHeight
     * @return \EbayWsdl\PictureSetMemberType
     */
    public function setPictureHeight($PictureHeight)
    {
      $this->PictureHeight = $PictureHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getPictureWidth()
    {
      return $this->PictureWidth;
    }

    /**
     * @param int $PictureWidth
     * @return \EbayWsdl\PictureSetMemberType
     */
    public function setPictureWidth($PictureWidth)
    {
      $this->PictureWidth = $PictureWidth;
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
     * @return \EbayWsdl\PictureSetMemberType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
