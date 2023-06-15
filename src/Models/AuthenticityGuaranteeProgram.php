<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * A type that identifies whether the item is qualified for the Authenticity Guarantee program.
 */
class AuthenticityGuaranteeProgram implements EbayModelInterface
{
    use FillsModel;

    /** An indication that the item is qualified for the Authenticity Guarantee program. */
    public ?string $description;

    /** The URL to the Authenticity Guarantee program terms of use. */
    public ?string $termsWebUrl;
}
