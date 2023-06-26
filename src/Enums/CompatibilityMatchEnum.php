<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum CompatibilityMatchEnum: string
{
    /**
     * Indicates the item is compatible with all the product attributes submitted.
     */
    case EXACT = 'EXACT';

    /**
     * Indicates the item could fit the product. To further check for compatibility, you can add more product attributes.
     */
    case POSSIBLE = 'POSSIBLE';
}
