<?php

namespace MMVClient;

interface IClient
{
    public const API_URL = "https://moosunmv.jinas.me/v1";

    public const API_ENDPOINTS = [
        "getLatest" => [
            "method"    => "GET",
            "path"      => "latest?station=:station"
        ],
        "getWeather" => [
            "method"    => "GET",
            "path"      => ":station"
        ]
    ];

  
   
    /**
     * getLatest
     *
     * @param  mixed $station
     *
     * @return array
     */
    public function getLatest(string $station) : array;

  
    
    /**
     * getWeather
     *
     * @param  mixed $station
     *
     * @return array
     */
    public function getWeather(string $station) : array;
}
