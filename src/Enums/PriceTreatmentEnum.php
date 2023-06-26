<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum PriceTreatmentEnum: string
{
    /**
     * Indicates the price treatment is Minimum Advertised Price (MAP). This is the lowest price the item is allowed to be advertised/shown at and can be shown only after the item has been added to the cart. For details about when in the buying flow the item's price can appear, see priceDisplayConditionEnum.
     */
    case MINIMUM_ADVERTISED_PRICE = 'MINIMUM_ADVERTISED_PRICE';

    /**
     * Indicates the price treatment is Strike Through Pricing (STP). For this treatment, the list price, which is crossed off (struck through) and discounted price are shown. List price is the price a seller recently listed the item for sale or sold the item for.
     */
    case LIST_PRICE = 'LIST_PRICE';

    /**
     * Indicates the price treatment is a markdown. The price before the markdown (Was price) is shown as well as the discount price. This item is part of a seller promotion and has an end date.
     */
    case MARKDOWN = 'MARKDOWN';
}
