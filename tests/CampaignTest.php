<?php
use PHPUnit\Framework\TestCase;
use SenderNet\ApiClient ;

final class CampaignTest extends TestCase
{
    public function testGetCampaigns(): void
    {  echo __DIR__;
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();
        $token = getenv('TOKEN');

        echo $token;

        $client = new ApiClient($token);

        $response = $client->campaign->getCampaigns();
        self::assertEquals(true, is_array($response));

    }


}
