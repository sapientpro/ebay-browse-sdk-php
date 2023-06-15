<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum RefundMethodEnum: string
{
    /**
     * Indicates the buyer gets their money back for the returned item. If the item has a restocking fee (see the restockingFeePercentage field), the buyer's refund will be reduced by this amount.
     */
    case MONEY_BACK = 'MONEY_BACK';

    /**
     * If this field is returned, the buyer actually has the option of getting their money back, or the buyer may choose to request an exchange or replacement for the returned item. The value in the returnMethod field will indicate whether the seller does exchanges or replacements.
     */
    case MERCHANDISE_CREDIT = 'MERCHANDISE_CREDIT';
}
