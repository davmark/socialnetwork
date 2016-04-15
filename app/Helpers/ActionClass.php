<?php
namespace App\Helpers;

class ActionClass
{
    public static function getCountries()
    {
        $countries = [];
        $countries[0] = 'Select country';
        $countriesModel = \DB::table('countries')->orderBy('name','ASC')->get();
        foreach( $countriesModel as $country)
        {
            $countries[$country->id] = $country->name;
        }
        return $countries;
    }
}
