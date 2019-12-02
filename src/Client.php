<?php

namespace MMVClient;

use MMVClient\IClient;

class Client implements IClient
{
    protected $requestHandler;

    public function __construct()
    {
        $this->requestHandler = new RequestHandler;
    }

    /**
     * getLatest
     *
     * @param  mixed $station
     *
     * @return void
     */
    public function getLatest(string $station) : array
    {
        $APIendpoint = IClient::API_ENDPOINTS['getLatest'];

        return $this->requestHandler->request($APIendpoint['method'], str_replace(':station', $station, $APIendpoint['path']));
    }

    /**
     * getWeather
     *
     * @param  mixed $station
     *
     * @return array
     */
    public function getWeather(string $station) : array
    {
        $APIendpoint = IClient::API_ENDPOINTS['getWeather'];

        $data = $this->requestHandler->request($APIendpoint['method'], str_replace(':station', $station, $APIendpoint['path']));

        return $data["data"];
    }
}
