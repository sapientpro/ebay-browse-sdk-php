<?php

namespace SapientPro\EbayBrowseSDK\Api;

use SapientPro\EbayBrowseSDK\Client\EbayClient;
use SapientPro\EbayBrowseSDK\Configuration;

/**
 * @ignore
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
interface EbayApiInterface
{
    public function getConfig(): Configuration;

    public function setEbayClient(EbayClient $ebayClient): void;
}
