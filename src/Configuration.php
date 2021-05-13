<?php


namespace SenderNet;


use SenderNet\Api\CampaignApi;
use SenderNet\Api\GroupApi;
use SenderNet\Api\SubscriberApi;

class Configuration
{
    public $token;
    public $senderBaseUrl = 'https://api.sender.net/v2/';
    public $senderStatsBaseUrl = 'https://stats.sender.net/';

    /**
     * @var CampaignApi
     */
    public $campaign;
    /**
     * @var GroupApi
     */
    public $group;
    /**
     * @var SubscriberApi
     */
    public $subscriber;

    public function __construct($token = null)
    {
        if (!empty($token)) {
            $this->setToken($token);
        }
        $this->campaign = new CampaignApi($this);
        $this->group = new GroupApi($this);
        $this->subscriber = new SubscriberApi($this);
    }

    public function setToken($token)
    {
        $this->token = $token;

    }

    public function getHeaders(): array
    {

        return [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

    }

}