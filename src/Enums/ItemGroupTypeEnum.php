<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum ItemGroupTypeEnum: string
{
    /**
     * Indicates this group was created by the seller. Currently, this is the only value supported.
     */
    case SELLER_DEFINED_VARIATIONS = 'SELLER_DEFINED_VARIATIONS';
}
