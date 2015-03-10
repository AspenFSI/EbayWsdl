<?php

namespace EbayWsdl;

class StorePreferencesType
{

    /**
     * @var StoreVacationPreferencesType $VacationPreferences
     */
    protected $VacationPreferences = null;

    /**
     * @param StoreVacationPreferencesType $VacationPreferences
     */
    public function __construct($VacationPreferences = null)
    {
      $this->VacationPreferences = $VacationPreferences;
    }

    /**
     * @return StoreVacationPreferencesType
     */
    public function getVacationPreferences()
    {
      return $this->VacationPreferences;
    }

    /**
     * @param StoreVacationPreferencesType $VacationPreferences
     * @return \EbayWsdl\StorePreferencesType
     */
    public function setVacationPreferences($VacationPreferences)
    {
      $this->VacationPreferences = $VacationPreferences;
      return $this;
    }

}
