<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum AvailabilityThresholdEnum: string
{
    /**
     * Indicates that quantity of the item is more than 10. If the quantity is less than 10, the quantity is returned in the estimatedAvailableQuantity field.
     */
    case MORE_THAN = 'MORE_THAN';
}
