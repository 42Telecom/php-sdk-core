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
    /**
     * @var object $client instance of Guzzle client.
     */
    protected $client;

    /**
     * CONTSTRUCTOR - Initalize the Request object and define the headers
     *
     * @api
     * @param string $token client token for authentication
     * @param object $handler for testing purposes
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

    /**
     * Send a request to the API.
     *
     * @param string $api       API name.
     * @param array  $params    Parameters to pass in the URL.
     * @param object $entity    Instance of an entity who represent the request.
     *
     * @return string Json response.
     */
    public function request($api, $params = array(), $entity = false)
    {
        $api = ServiceFactory::get($api);

        $url = $api->getEndPoint();

        if ((count($params) > 0) && ($api->getRequiredParam())) {
            foreach ($params as $item) {
                $url.= '/' . filter_var($item, FILTER_SANITIZE_URL);
            }
        }

        $body = array();
        if ($entity) {
            $body = [
                'body' => $entity->toJSON()
            ];
        }

        try {
            $response = $this->client->request(
                $api->getMethod(),
                $url,
                $body
            );

        } catch (\Exception $e) {
            $response = $e->getResponse();
        }

        return $response->getBody()->getContents();
    }
}
