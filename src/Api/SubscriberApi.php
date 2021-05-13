<?php


namespace SenderNet\Api;


use SenderNet\Configuration;

class SubscriberApi extends BaseApi
{

    public function __construct(Configuration $config = null)
    {
        $this->apiPrefix = 'subscribers';
        parent::__construct($config);
    }
}