<?php

namespace MMVClient;

require_once '../vendor/autoload.php';

use MMVClient\Client;


$rp = new Client();

$data = $rp->getLatest("hanimaadhoo");

echo $data["humidity"];

$stationdata = $rp->getWeather("hanimaadhoo");

foreach($stationdata as $data)
{
    echo $data["temperature"] . "\n";
}