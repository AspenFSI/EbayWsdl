<?php

namespace EbayWsdl\Classes;

class BotBlockResponseType
{

    /**
     * @var string $BotBlockToken
     */
    protected $BotBlockToken = null;

    /**
     * @var string $BotBlockUrl
     */
    protected $BotBlockUrl = null;

    /**
     * @var string $BotBlockAudioUrl
     */
    protected $BotBlockAudioUrl = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $BotBlockToken
     * @param string $BotBlockUrl
     * @param string $BotBlockAudioUrl
     * @param string $any
     */
    public function __construct($BotBlockToken = null, $BotBlockUrl = null, $BotBlockAudioUrl = null, $any = null)
    {
      $this->BotBlockToken = $BotBlockToken;
      $this->BotBlockUrl = $BotBlockUrl;
      $this->BotBlockAudioUrl = $BotBlockAudioUrl;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getBotBlockToken()
    {
      return $this->BotBlockToken;
    }

    /**
     * @param string $BotBlockToken
     * @return \EbayWsdl\Classes\BotBlockResponseType
     */
    public function setBotBlockToken($BotBlockToken)
    {
      $this->BotBlockToken = $BotBlockToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getBotBlockUrl()
    {
      return $this->BotBlockUrl;
    }

    /**
     * @param string $BotBlockUrl
     * @return \EbayWsdl\Classes\BotBlockResponseType
     */
    public function setBotBlockUrl($BotBlockUrl)
    {
      $this->BotBlockUrl = $BotBlockUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getBotBlockAudioUrl()
    {
      return $this->BotBlockAudioUrl;
    }

    /**
     * @param string $BotBlockAudioUrl
     * @return \EbayWsdl\Classes\BotBlockResponseType
     */
    public function setBotBlockAudioUrl($BotBlockAudioUrl)
    {
      $this->BotBlockAudioUrl = $BotBlockAudioUrl;
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
     * @return \EbayWsdl\Classes\BotBlockResponseType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
