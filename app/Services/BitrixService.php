<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class BitrixService
{
    public const API_URL = 'https://crm.creditline.kz/rest/4/7qjip6hteb82jugf/';
    /**
     * @var Client
     */
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client([
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
            ]
        ]);
    }

    public function request(string $method, array $params): object
    {
        $response = $this->client->post(self::API_URL.$method, [
            RequestOptions::JSON => $params
        ]);


        return json_decode($response->getBody()->getContents(), false, 512, JSON_THROW_ON_ERROR);
    }
}
