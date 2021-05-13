<?php


namespace SenderNet;

use SenderNet\Api\CampaignApi;


class ApiClient extends Configuration
{
    public function __construct($token = null)
    {
        parent::__construct($token);
    }


    public function senderGetBaseArguments()
    {
        return [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Accept'        => 'application/json',
                'Authorization' => 'Bearer ' . $this->apiKey,
            ],
        ];
    }
    public function setApiKey($apiKey)
    {
       $this->apiKey = $apiKey;
    }

}