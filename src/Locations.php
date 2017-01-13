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
        if ( $app_id == null || $app_secret == null ) {
            $this->vk = new \VK\VK(5818641, 'qJZVN6VtZJuUuog6q7ws');
        } else {
            $this->vk = new \VK\VK($app_id, $app_secret);
        }
    }


    /**
     * Returns an array containing all the countries in the world
     *
     * @return mixed
     */
    public function getCountries()
    {
        $responce = $this->vk->api('database.getCountries', ['need_all' => 1, 'count' => 1000]);
        return $responce;
    }


}