<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A type that identifies whether the item is from a verified seller.
 */
class AuthenticityVerificationProgram implements EbayModelInterface
{
    use FillsModel;

    /** An indication that the item is from a verified seller. */
    #[Assert\Type('string')]
    public ?string $description;

    /** The URL to the Authenticity Verification program terms of use. */
    #[Assert\Type('string')]
    public ?string $termsWebUrl;
}
