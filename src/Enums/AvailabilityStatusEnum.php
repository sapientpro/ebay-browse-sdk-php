<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum AvailabilityStatusEnum: string
{
    /**
     * Indicates the item is available for purchase.
     */
    case IN_STOCK = 'IN_STOCK';

    /**
     * Indicates the item is available for purchase but the supply of this item is low.
     */
    case OUT_OF_STOCK = 'OUT_OF_STOCK';

    /**
     * Indicates the item is not available for purchase because the supply of this item is currently zero.
     */
    case LIMITED_STOCK = 'LIMITED_STOCK';
}
