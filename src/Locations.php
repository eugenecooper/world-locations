<?php namespace EugeneCooper\WorldLocations;


class Locations
{


    private $vk;


    /**
     * WorldLocations constructor.
     * @param null $app_id
     * @param null $app_secret
     */
    public function __construct($app_id = null, $app_secret = null)
    {
        $this->vk = new \VK\VK($app_id, $app_secret);
    }


    /**
     * Returns an array containing all the countries in the world
     *
     * @return array|bool
     */
    public function getCountries()
    {
        $response = $this->vk->api('database.getCountries', ['need_all' => 1, 'count' => 1000]);
        if (isset($response['response'])) {
            return $response['response'];
        }
        return false;
    }


    /**
     * Return all cities of specified country
     *
     * @param $country_id
     * @param null $offset
     * @return bool
     */
    public function getCountryCities($country_id, $offset = null)
    {
        $response = $this->vk->api('database.getCities', ['country_id' => $country_id, 'need_all' => 1, 'count' => 1000, 'offset' => $offset]);
        if (isset($response['response'])) {
            return $response['response'];
        }
        return false;
    }


    /**
     * Return all cities of specified region
     *
     * @param $country_id
     * @param $region_id
     * @param null $offset
     * @return bool
     */
    public function getRegionCities($country_id, $region_id, $offset = null)
    {
        $response = $this->vk->api('database.getCities', ['country_id' => $country_id, 'region_id' => $region_id, 'need_all' => 1, 'count' => 1000, 'offset' => $offset]);
        if (isset($response['response'])) {
            return $response['response'];
        }
        return false;
    }


    /**
     * Return all regions of specified country
     *
     * @param $country_id
     * @param null $offset
     * @return bool
     */
    public function getCountryRegions($country_id, $offset = null)
    {
        $response = $this->vk->api('database.getRegions', ['country_id' => $country_id, 'need_all' => 1, 'count' => 1000, 'offset' => $offset]);
        if (isset($response['response'])) {
            return $response['response'];
        }
        return false;
    }


}