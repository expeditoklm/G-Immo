<?php

namespace App\Services;

use GuzzleHttp\Client;

class GeoNamesService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getCountries()
    {
        $response = $this->client->get('http://api.geonames.org/countryInfoJSON', [
            'query' => [
                'username' => 'oklmbro', // Remplacez par votre nom d'utilisateur GeoNames
            ]
        ]);

        return json_decode($response->getBody(), true)['geonames'];
    }

    public function getCitiesByCountryCode($countryCode)
    {
        $response = $this->client->get('http://api.geonames.org/searchJSON', [
            'query' => [
                'username' => 'oklmbro', // Remplacez par votre nom d'utilisateur GeoNames
                'country' => $countryCode,
                'featureClass' => 'P', // Seules les villes
                'maxRows' => 10, // Nombre maximal de résultats à retourner
            ]
        ]);

        return json_decode($response->getBody(), true)['geonames'];
    }

    public function getCountryNameByCode($countryCode)
    {
        $response = $this->client->get('http://api.geonames.org/countryInfoJSON', [
            'query' => [
                'username' => 'oklmbro', // Remplacez par votre nom d'utilisateur GeoNames
                'country' => $countryCode,
            ]
        ]);

        $countryInfo = json_decode($response->getBody(), true)['geonames'][0] ?? null;

        return $countryInfo ? $countryInfo['countryName'] : null;
    }

    public function getCityNameByCode($cityId)
    {
        $response = $this->client->get('http://api.geonames.org/getJSON', [
            'query' => [
                'username' => 'oklmbro', // Remplacez par votre nom d'utilisateur GeoNames
                'geonameId' => $cityId,
            ]
        ]);

        $cityInfo = json_decode($response->getBody(), true);

        return isset($cityInfo['toponymName']) ? $cityInfo['toponymName'] : null;
    }
}
