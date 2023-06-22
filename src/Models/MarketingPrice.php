<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\PriceTreatmentEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

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
    #[Assert\Type(ConvertedAmount::class)]
    public ?ConvertedAmount $discountAmount = null;

    /** This field expresses the percentage of the seller discount based on the value in the <b>  originalPrice</b> container. */
    #[Assert\Type('string')]
    public ?string $discountPercentage = null;

    /**
     * This container returns the monetary amount of the item without the discount.
     * @var ConvertedAmount|null
     */
    #[Assert\Type(ConvertedAmount::class)]
    public ?ConvertedAmount $originalPrice = null;

    /**
     * Indicates the pricing treatment (discount) that was applied to the price of the item. <br><br><span class="tablenote"><b>Note: </b> The pricing treatment affects the way and where the discounted price can be displayed.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PriceTreatmentEnum'>eBay API documentation</a>
     * @var PriceTreatmentEnum|null
     */
    #[Assert\Type(PriceTreatmentEnum::class)]
    public ?PriceTreatmentEnum $priceTreatment = null;
}
