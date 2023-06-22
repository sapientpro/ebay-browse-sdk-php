<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\SellerCustomPolicyTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The container for custom policies that apply to a listed item.
 */
class SellerCustomPolicy implements EbayModelInterface
{
    use FillsModel;

    /** The seller-defined description of the policy. */
    #[Assert\Type('string')]
    public ?string $description = null;

    /** The seller-defined label for an individual custom policy. */
    #[Assert\Type('string')]
    public ?string $label = null;

    /**
     * The type of custom policy, such as PRODUCT_COMPLIANCE or TAKE_BACK. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:SellerCustomPolicyTypeEnum'>eBay API documentation</a>
     * @var SellerCustomPolicyTypeEnum|null
     */
    #[Assert\Type(SellerCustomPolicyTypeEnum::class)]
    public ?SellerCustomPolicyTypeEnum $type = null;
}
