<?php

namespace EbayWsdl;

class MessageMediaType
{

    /**
     * @var anyURI $MediaURL
     */
    protected $MediaURL = null;

    /**
     * @var string $MediaName
     */
    protected $MediaName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $MediaURL
     * @param string $MediaName
     * @param string $any
     */
    public function __construct($MediaURL = null, $MediaName = null, $any = null)
    {
      $this->MediaURL = $MediaURL;
      $this->MediaName = $MediaName;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getMediaURL()
    {
      return $this->MediaURL;
    }

    /**
     * @param anyURI $MediaURL
     * @return \EbayWsdl\MessageMediaType
     */
    public function setMediaURL($MediaURL)
    {
      $this->MediaURL = $MediaURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaName()
    {
      return $this->MediaName;
    }

    /**
     * @param string $MediaName
     * @return \EbayWsdl\MessageMediaType
     */
    public function setMediaName($MediaName)
    {
      $this->MediaName = $MediaName;
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
     * @return \EbayWsdl\MessageMediaType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
