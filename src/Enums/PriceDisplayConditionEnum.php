<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum PriceDisplayConditionEnum: string
{
    /**
     * Indicates the minimum advertised price of the item can be shown only after the item has been added to the cart.
     */
    case ONLY_SHOW_WHEN_ADDED_IN_CART = 'ONLY_SHOW_WHEN_ADDED_IN_CART';

    /**
     * Indicates the minimum advertised price can be shown only when the buyer requests to see it.
     */
    case ONLY_SHOW_ON_REQUEST = 'ONLY_SHOW_ON_REQUEST';

    /**
     * Indicates there are no restrictions as to when the minimum advertised price of the item can be shown.
     */
    case ALWAYS_SHOW = 'ALWAYS_SHOW';
}
