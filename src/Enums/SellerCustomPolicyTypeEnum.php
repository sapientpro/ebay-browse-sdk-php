<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum SellerCustomPolicyTypeEnum: string
{
    /**
     * A policy that provides the required regulatory information and disclosures for certain product types.
     */
    case PRODUCT_COMPLIANCE = 'PRODUCT_COMPLIANCE';

    /**
     * A policy that applies when applicable law requires the seller to take back a used product when the buyer buys a new product.
     */
    case TAKE_BACK = 'TAKE_BACK';
}
