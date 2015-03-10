<?php

namespace EbayWsdl;

class BotBlockRequestType
{

    /**
     * @var string $BotBlockToken
     */
    protected $BotBlockToken = null;

    /**
     * @var string $BotBlockUserInput
     */
    protected $BotBlockUserInput = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $BotBlockToken
     * @param string $BotBlockUserInput
     * @param string $any
     */
    public function __construct($BotBlockToken = null, $BotBlockUserInput = null, $any = null)
    {
      $this->BotBlockToken = $BotBlockToken;
      $this->BotBlockUserInput = $BotBlockUserInput;
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
     * @return \EbayWsdl\BotBlockRequestType
     */
    public function setBotBlockToken($BotBlockToken)
    {
      $this->BotBlockToken = $BotBlockToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getBotBlockUserInput()
    {
      return $this->BotBlockUserInput;
    }

    /**
     * @param string $BotBlockUserInput
     * @return \EbayWsdl\BotBlockRequestType
     */
    public function setBotBlockUserInput($BotBlockUserInput)
    {
      $this->BotBlockUserInput = $BotBlockUserInput;
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
     * @return \EbayWsdl\BotBlockRequestType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
