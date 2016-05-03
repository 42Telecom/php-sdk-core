<?php
namespace Fortytwo\SDK\Core;

use Fortytwo\SDK\Core\Values\TokenValue;
use Fortytwo\SDK\Core\Factories\ServiceFactory;
use GuzzleHttp\Client;

/**
 * Abstract class to use as core of an API call.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
abstract class Core
{
    protected $client;

    /**
     * CONTSTRUCTOR - Initalize the Request object and define the headers
     *
     * @api
     * @param $token client token for authentication
     * @param $handler for testing purposes
     */
    public function __construct($token, $handler = false)
    {
        $client = [
            'headers' => [
                'User-Agent' => 'Fortytwo - PHP - SDK',
                'Content-Type'     => 'application/json; charset=utf-8',
                'Authorization'      => 'Token ' . new TokenValue($token)
            ],
        ];

        if ($handler) {
            $client['handler'] =  $handler;
        }

        $this->client = new Client($client);
    }
}
