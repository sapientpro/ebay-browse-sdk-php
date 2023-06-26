<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used to provide the expiration date of a coded coupon.
 */
class CouponConstraint implements EbayModelInterface
{
    use FillsModel;

    /** This timestamp provides the expiration date of the coded coupon. */
    #[Assert\Type('string')]
    public string $expirationDate;
}
