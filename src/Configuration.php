<?php


namespace SenderNet;


use SenderNet\Api\Campaign;

class Configuration
{
    private $token;
    private $senderBaseUrl = 'https://api.sender.net/v2/';
    private $senderStatsBaseUrl = 'https://stats.sender.net/';
    public $campaign;

    public function __construct($token = null)
    {
        if (!$token) {
            $this->setToken($token);
        }
        $this->campaign = new Campaign($this);
    }

    public function setToken($token)
    {
        $this->token = $token;
    }
}