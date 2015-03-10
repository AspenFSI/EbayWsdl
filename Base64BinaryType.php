<?php

namespace EbayWsdl;

class Base64BinaryType
{

    /**
     * @var base64Binary $_
     */
    protected $_ = null;

    /**
     * @var string $contentType
     */
    protected $contentType = null;

    /**
     * @param base64Binary $_
     * @param string $contentType
     */
    public function __construct($_ = null, $contentType = null)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param base64Binary $_
     * @return \EbayWsdl\Base64BinaryType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return \EbayWsdl\Base64BinaryType
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
