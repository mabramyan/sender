<?php


namespace SenderNet;

use SenderNet\Api\Campaign;


class ApiClient extends Configuration
{


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