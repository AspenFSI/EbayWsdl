<?php

namespace EbayWsdl\Classes;

class XSLFileType
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $FileVersion
     */
    protected $FileVersion = null;

    /**
     * @var string $FileContent
     */
    protected $FileContent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $FileName
     * @param string $FileVersion
     * @param string $FileContent
     * @param string $any
     */
    public function __construct($FileName = null, $FileVersion = null, $FileContent = null, $any = null)
    {
      $this->FileName = $FileName;
      $this->FileVersion = $FileVersion;
      $this->FileContent = $FileContent;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \EbayWsdl\Classes\XSLFileType
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileVersion()
    {
      return $this->FileVersion;
    }

    /**
     * @param string $FileVersion
     * @return \EbayWsdl\Classes\XSLFileType
     */
    public function setFileVersion($FileVersion)
    {
      $this->FileVersion = $FileVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
      return $this->FileContent;
    }

    /**
     * @param string $FileContent
     * @return \EbayWsdl\Classes\XSLFileType
     */
    public function setFileContent($FileContent)
    {
      $this->FileContent = $FileContent;
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
     * @return \EbayWsdl\Classes\XSLFileType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
