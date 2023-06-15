<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum ReturnMethodEnum: string
{
    /**
     * Indicates that the buyer has the option of receiving money back for the returned item, or they can choose to have the seller replace the item with an identical item.
     */
    case REPLACEMENT = 'REPLACEMENT';

    /**
     * Indicates that the buyer has the option of receiving money back for the returned item, or they can exchange the item for another similar item.
     */
    case EXCHANGE = 'EXCHANGE';
}
