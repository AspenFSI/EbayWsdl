<?php

namespace EbayWsdl\Classes;

class MarkUpMarkDownHistoryType
{

    /**
     * @var MarkUpMarkDownEventType[] $MarkUpMarkDownEvent
     */
    protected $MarkUpMarkDownEvent = null;

    /**
     * @param MarkUpMarkDownEventType[] $MarkUpMarkDownEvent
     */
    public function __construct(array $MarkUpMarkDownEvent = null)
    {
      $this->MarkUpMarkDownEvent = $MarkUpMarkDownEvent;
    }

    /**
     * @return MarkUpMarkDownEventType[]
     */
    public function getMarkUpMarkDownEvent()
    {
      return $this->MarkUpMarkDownEvent;
    }

    /**
     * @param MarkUpMarkDownEventType[] $MarkUpMarkDownEvent
     * @return \EbayWsdl\Classes\MarkUpMarkDownHistoryType
     */
    public function setMarkUpMarkDownEvent(array $MarkUpMarkDownEvent)
    {
      $this->MarkUpMarkDownEvent = $MarkUpMarkDownEvent;
      return $this;
    }

}
