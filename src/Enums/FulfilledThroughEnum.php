<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum FulfilledThroughEnum: string
{
    /**
     * Indicates the item is being shipped using the eBay Global Shipping Program.
     */
    case GLOBAL_SHIPPING = 'GLOBAL_SHIPPING';

    /**
     * Indicates the item is being shipped using the eBay International Shipping program.
     */
    case INTERNATIONAL_SHIPPING = 'INTERNATIONAL_SHIPPING';
}
