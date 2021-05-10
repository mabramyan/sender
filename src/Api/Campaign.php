<?php


namespace SenderNet\Api;
use GuzzleHttp\Client;
use SenderNet\Configuration;


class Campaign
{    protected $client;
    protected $config;
    protected $headerSelector;

    public function __construct(Configuration $config = null)
    {
        $this->client = new Client([
            'defaults' => [
                'timeout' => 120.0
            ]
        ]);
     //   $this->headerSelector = new HeaderSelector();
       // $this->config = $config ?: new Configuration();
    }
    public function getConfig()
    {
        return $this->config;
    }

    public function getCampaigns()
    {
        return [];
    }
}
