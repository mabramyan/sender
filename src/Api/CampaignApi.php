<?php


namespace SenderNet\Api;

use SenderNet\ApiException;
use SenderNet\Configuration;


class CampaignApi extends BaseApi
{


    public function __construct(Configuration $config = null)
    {
        $this->apiPrefix = 'campaigns';
        parent::__construct($config);
    }


    /**
     * @throws ApiException
     */
    public function getCampaigns()
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
