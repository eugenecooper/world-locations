# World-Locations

This simple package allows to retrieve all world's countries, a certain country regions and cities, etc.
The code is relying on vk.com public API, so if you'll need to make too much requests you should cache results or save them to your database.

## Install

Via Composer

``` bash
$ composer require eugenecooper/world-locations
```

## Usage

``` php

$locations = new \EugeneCooper\WorldLocations\Locations;

// Obtain an array of all world's countries
$locations->getCountries();
// Obtain an array of all country regions ($country_id can be obtained with the method above)
$locations->getCountryRegions($country_id);
// Obtain an array of all country cities 
$locations->getCountryCities($country_id);
// Obtain an array of all country region's cities ($region_id can be obtained with methods above)
$locations->getRegionCities($country_id, $region_id);

```


## License

The MIT License (MIT). 
