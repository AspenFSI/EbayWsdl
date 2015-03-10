<?php

namespace EbayWsdl;

class HistogramEntryType
{

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $Count
     * @param string $any
     * @param string $id
     * @param string $name
     */
    public function __construct($Count = null, $any = null, $id = null, $name = null)
    {
      $this->Count = $Count;
      $this->any = $any;
      $this->id = $id;
      $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \EbayWsdl\HistogramEntryType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
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
     * @return \EbayWsdl\HistogramEntryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \EbayWsdl\HistogramEntryType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \EbayWsdl\HistogramEntryType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
