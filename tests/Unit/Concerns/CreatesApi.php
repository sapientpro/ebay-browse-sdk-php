<?php

namespace SapientPro\EbayBrowseSDK\Tests\Unit\Concerns;

use GuzzleHttp\Client;
use SapientPro\EbayBrowseSDK\Api\EbayApiInterface;
use SapientPro\EbayBrowseSDK\Client\EbayClient;
use SapientPro\EbayBrowseSDK\Client\Serializer;
use SapientPro\EbayBrowseSDK\Configuration;

trait CreatesApi
{
    public function createApi(string $class, Client $client): EbayApiInterface
    {
        $configuration = (new Configuration())->setAccessToken('test');

        $api = new $class($configuration);
        $api->setEbayClient(new EbayClient($client, new Serializer()));

        return $api;
    }
}
