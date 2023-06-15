<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CouponDiscountType;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

class AvailableCoupon implements EbayModelInterface
{
    use FillsModel;

    /**
     * The limitations or restrictions of the coupon.
     * @var CouponConstraint|null
     */
    public ?CouponConstraint $constraint;

    /**
     * The discount amount after the coupon is applied.
     * @var Amount|null
     */
    public ?Amount $discountAmount;

    /** The type of discount that the coupon applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CouponDiscountType'>eBay API documentation</a> */
    public ?CouponDiscountType $discountType;

    /** A description of the coupon.<br><br><span class="tablenote"><b> Note: </b> The value returned in the <b>termsWebUrl</b> field should appear for all experiences when displaying coupons. The value in the <b>availableCoupons.message</b> field must also be included, if returned in the API response.</span> */
    public ?string $message;

    /** The coupon code. */
    public ?string $redemptionCode;

    /** The URL to the coupon terms of use.<br><br><span class="tablenote"><b> Note: </b> The value returned in the <b>termsWebUrl</b> field should appear for all experiences when displaying coupons. The value in the <b>availableCoupons.message</b> field must also be included, if returned in the API response.</span> */
    public ?string $termsWebUrl;
}
