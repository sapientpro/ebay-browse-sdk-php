<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\SellerCustomPolicyTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The container for custom policies that apply to a listed item.
 */
class SellerCustomPolicy implements EbayModelInterface
{
    use FillsModel;

    /** The seller-defined description of the policy. */
    public ?string $description;

    /** The seller-defined label for an individual custom policy. */
    public ?string $label;

    /**
     * The type of custom policy, such as PRODUCT_COMPLIANCE or TAKE_BACK. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:SellerCustomPolicyTypeEnum'>eBay API documentation</a>
     * @var SellerCustomPolicyTypeEnum|null
     */
    public ?SellerCustomPolicyTypeEnum $type;
}
