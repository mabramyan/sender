<?php

use PHPUnit\Framework\TestCase;
use SenderNet\ApiClient;

final class CampaignTest extends TestCase
{
    public function testGetCampaigns(): void
    {
        echo __DIR__;
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../', '.env');
        $dotenv->load();

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZGMzYmU1MzA2MjIyMDg5OTcyNDhkYzkwZDBhNmQzNzgyNDUzNTg1ZmFiNjJkYmI3MWQyYjJhMGYwM2YwY2M3ZGI4Yjg5YmMwYmY5ZDg2ZmUiLCJpYXQiOiIxNjIwNjQ5MzI3Ljg1ODYwNyIsIm5iZiI6IjE2MjA2NDkzMjcuODU4NjE0IiwiZXhwIjoiNDc3NDI1MjkyNy44NTUwNjUiLCJzdWIiOiI5MDY4NSIsInNjb3BlcyI6W119.RxYRCIwNxBJPfH_-2mZNsN_59phaJoYLr1nqQnuYDYXbMvd-zdeRKwyU2jds4BDKXY5bC24csAKY3u1Vc-yZyA';

        $client = new ApiClient($token);

        $response = $client->campaign->getCampaigns();
        print_r($response);
        self::assertEquals(true, is_array($response));

    }


}
