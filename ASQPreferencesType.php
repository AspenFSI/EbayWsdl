<?php

namespace EbayWsdl;

class ASQPreferencesType
{

    /**
     * @var boolean $ResetDefaultSubjects
     */
    protected $ResetDefaultSubjects = null;

    /**
     * @var string[] $Subject
     */
    protected $Subject = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $ResetDefaultSubjects
     * @param string[] $Subject
     * @param string $any
     */
    public function __construct($ResetDefaultSubjects = null, array $Subject = null, $any = null)
    {
      $this->ResetDefaultSubjects = $ResetDefaultSubjects;
      $this->Subject = $Subject;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getResetDefaultSubjects()
    {
      return $this->ResetDefaultSubjects;
    }

    /**
     * @param boolean $ResetDefaultSubjects
     * @return \EbayWsdl\ASQPreferencesType
     */
    public function setResetDefaultSubjects($ResetDefaultSubjects)
    {
      $this->ResetDefaultSubjects = $ResetDefaultSubjects;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSubject()
    {
      return $this->Subject;
    }

    /**
     * @param string[] $Subject
     * @return \EbayWsdl\ASQPreferencesType
     */
    public function setSubject(array $Subject)
    {
      $this->Subject = $Subject;
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
     * @return \EbayWsdl\ASQPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
