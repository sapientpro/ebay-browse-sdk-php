<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum ReturnShippingCostPayerEnum: string
{
    /**
     * Indicates the seller will pay for the shipping costs to return the item.
     */
    case SELLER = 'SELLER';

    /**
     * Indicates the buyer will pay for the shipping costs to return the item.
     */
    case BUYER = 'BUYER';
}
