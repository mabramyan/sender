<?php


namespace SenderNet\Api;


use GuzzleHttp\Client;
use SenderNet\ApiException;
use SenderNet\Configuration;

class BaseApi
{
    protected $client;
    protected $config;
    protected $apiPrefix = '';

    public function __construct(Configuration $config = null)
    {
        $this->client = new Client([
            'defaults' => [
                'timeout' => 120.0
            ]
        ]);
        //   $this->headerSelector = new HeaderSelector();
        $this->config = $config ?: new Configuration();
    }

    /**
     * @throws ApiException
     */
    public function checkResponse($response)
    {
        $statusCode = $response->getStatusCode();
        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    $this->getUrl()
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }
        if (!json_decode($response->getBody())) {
            throw new ApiException(
                sprintf(
                    '[%d] Error parsing response(%s)',
                    $statusCode,
                    $this->getUrl()
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }
    }


    public function getConfig()
    {
        return $this->config;
    }
    public function getUrl()
    {
        return $this->config->senderBaseUrl . $this->apiPrefix;
    }

}