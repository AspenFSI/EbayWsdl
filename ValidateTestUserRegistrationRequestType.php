<?php

namespace EbayWsdl;

class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{

    /**
     * @var int $FeedbackScore
     */
    protected $FeedbackScore = null;

    /**
     * @var \DateTime $RegistrationDate
     */
    protected $RegistrationDate = null;

    /**
     * @var boolean $SubscribeSA
     */
    protected $SubscribeSA = null;

    /**
     * @var boolean $SubscribeSAPro
     */
    protected $SubscribeSAPro = null;

    /**
     * @var boolean $SubscribeSM
     */
    protected $SubscribeSM = null;

    /**
     * @var boolean $SubscribeSMPro
     */
    protected $SubscribeSMPro = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param int $FeedbackScore
     * @param \DateTime $RegistrationDate
     * @param boolean $SubscribeSA
     * @param boolean $SubscribeSAPro
     * @param boolean $SubscribeSM
     * @param boolean $SubscribeSMPro
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $FeedbackScore = null, \DateTime $RegistrationDate = null, $SubscribeSA = null, $SubscribeSAPro = null, $SubscribeSM = null, $SubscribeSMPro = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->FeedbackScore = $FeedbackScore;
      $this->RegistrationDate = $RegistrationDate ? $RegistrationDate->format(\DateTime::ATOM) : null;
      $this->SubscribeSA = $SubscribeSA;
      $this->SubscribeSAPro = $SubscribeSAPro;
      $this->SubscribeSM = $SubscribeSM;
      $this->SubscribeSMPro = $SubscribeSMPro;
    }

    /**
     * @return int
     */
    public function getFeedbackScore()
    {
      return $this->FeedbackScore;
    }

    /**
     * @param int $FeedbackScore
     * @return \EbayWsdl\ValidateTestUserRegistrationRequestType
     */
    public function setFeedbackScore($FeedbackScore)
    {
      $this->FeedbackScore = $FeedbackScore;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
      if ($this->RegistrationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegistrationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegistrationDate
     * @return \EbayWsdl\ValidateTestUserRegistrationRequestType
     */
    public function setRegistrationDate(\DateTime $RegistrationDate)
    {
      $this->RegistrationDate = $RegistrationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscribeSA()
    {
      return $this->SubscribeSA;
    }

    /**
     * @param boolean $SubscribeSA
     * @return \EbayWsdl\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSA($SubscribeSA)
    {
      $this->SubscribeSA = $SubscribeSA;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscribeSAPro()
    {
      return $this->SubscribeSAPro;
    }

    /**
     * @param boolean $SubscribeSAPro
     * @return \EbayWsdl\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSAPro($SubscribeSAPro)
    {
      $this->SubscribeSAPro = $SubscribeSAPro;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscribeSM()
    {
      return $this->SubscribeSM;
    }

    /**
     * @param boolean $SubscribeSM
     * @return \EbayWsdl\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSM($SubscribeSM)
    {
      $this->SubscribeSM = $SubscribeSM;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscribeSMPro()
    {
      return $this->SubscribeSMPro;
    }

    /**
     * @param boolean $SubscribeSMPro
     * @return \EbayWsdl\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSMPro($SubscribeSMPro)
    {
      $this->SubscribeSMPro = $SubscribeSMPro;
      return $this;
    }

}
