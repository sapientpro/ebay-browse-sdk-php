<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum SellerInstructionEnum: string
{
    /**
     * This enumeration value indicates that credit card is an acceptable payment method for the seller.
     */
    case ACCEPTS_CREDIT_CARD = 'ACCEPTS_CREDIT_CARD';

    /**
     * This enumeration value indicates that the seller has provided special instructions within the listing description.
     */
    case SEE_DESCRIPTION = 'SEE_DESCRIPTION';
}
