<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum DeliveryOptionsEnum: string
{
    /**
     * Indicates the item can be shipped to the recipient.
     */
    case SHIP_TO_HOME = 'SHIP_TO_HOME';

    /**
     * Indicates the seller will arrange to have the buyer pick-up the item. (Local delivery option)
     */
    case SELLER_ARRANGED_LOCAL_PICKUP = 'SELLER_ARRANGED_LOCAL_PICKUP';

    /**
     * Indicates the buyer will pick-up the item in a store. (Local delivery option)
     */
    case IN_STORE_PICKUP = 'IN_STORE_PICKUP';

    /**
     * Indicates the item is dropped off or sent to a pickup location and the buyer collects the item at that location.
     */
    case PICKUP_DROP_OFF = 'PICKUP_DROP_OFF';

    /**
     * Indicates the item is delivered via email.
     */
    case DIGITAL_DELIVERY = 'DIGITAL_DELIVERY';
}
