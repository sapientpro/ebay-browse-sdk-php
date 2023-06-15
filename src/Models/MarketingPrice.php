<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\PriceTreatmentEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields that describe a seller discount.
 */
class MarketingPrice implements EbayModelInterface
{
    use FillsModel;

    /**
     * This container returns the monetary amount of the seller discount.
     * @var ConvertedAmount|null
     */
    public ?ConvertedAmount $discountAmount;

    /** This field expresses the percentage of the seller discount based on the value in the <b>  originalPrice</b> container. */
    public ?string $discountPercentage;

    /**
     * This container returns the monetary amount of the item without the discount.
     * @var ConvertedAmount|null
     */
    public ?ConvertedAmount $originalPrice;

    /**
     * Indicates the pricing treatment (discount) that was applied to the price of the item. <br><br><span class="tablenote"><b>Note: </b> The pricing treatment affects the way and where the discounted price can be displayed.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PriceTreatmentEnum'>eBay API documentation</a>
     * @var PriceTreatmentEnum|null
     */
    public ?PriceTreatmentEnum $priceTreatment;
}
