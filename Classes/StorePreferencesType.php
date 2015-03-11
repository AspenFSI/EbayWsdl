<?php

namespace EbayWsdl\Classes;

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
     * @return \EbayWsdl\Classes\StorePreferencesType
     */
    public function setVacationPreferences($VacationPreferences)
    {
      $this->VacationPreferences = $VacationPreferences;
      return $this;
    }

}
