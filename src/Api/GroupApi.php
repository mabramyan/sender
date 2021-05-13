<?php


namespace SenderNet\Api;


use SenderNet\ApiException;
use SenderNet\Configuration;

class GroupApi extends BaseApi
{

    public function __construct(Configuration $config = null)
    {
        $this->apiPrefix = 'groups';
        parent::__construct($config);
    }


    public function getGroups()
    {
        try {
            $response = $this->client->get($this->getUrl(),
                [
                    'headers' => $this->config->getHeaders()
                ]
            );
            $body = json_decode($response->getBody());
            $this->checkResponse($response);

        } catch (ApiException $e) {
            throw $e->getResponseBody();
        }
        return $body->data;
    }

}