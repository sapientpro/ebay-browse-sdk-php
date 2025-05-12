<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum ApiEnvironmentType: string
{
    /**
     * Indicates development environment.
     */
    case SANDBOX = 'SANDBOX';

    /**
     * Indicates development environment endpoint.
     */
    case SANDBOX_ENDPOINT = 'https://api.sandbox.ebay.com';

    /**
     * Indicates production environment.
     */
    case PRODUCTION = 'PRODUCTION';

    /**
     * Indicates production environment endpoint.
     */
    case PRODUCTION_ENDPOINT = 'https://api.ebay.com';
}
