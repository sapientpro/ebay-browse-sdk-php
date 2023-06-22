<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A type that identifies whether the item is qualified for the Authenticity Guarantee program.
 */
class AuthenticityGuaranteeProgram implements EbayModelInterface
{
    use FillsModel;

    /** An indication that the item is qualified for the Authenticity Guarantee program. */
    #[Assert\Type('string')]
    public ?string $description;

    /** The URL to the Authenticity Guarantee program terms of use. */
    #[Assert\Type('string')]
    public ?string $termsWebUrl;
}
