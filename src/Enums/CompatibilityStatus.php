<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum CompatibilityStatus: string
{
    /**
     * Indicates the item is compatible with the product specified in the request.
     */
    case COMPATIBLE = 'COMPATIBLE';

    /**
     * Indicates the item is not compatible with the product specified in the request. Be sure to check all the value fields ensure they are correct as errors in the value can also cause this response.
     */
    case NOT_COMPATIBLE = 'NOT_COMPATIBLE';

    /**
     * Indicates one or more attributes for the specified product are missing so compatibility cannot be determined. The response returns the attributes that are missing.
     */
    case UNDETERMINED = 'UNDETERMINED';
}
