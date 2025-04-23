<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used to provide product safety pictogram(s) for the listing.
 */
class ProductSafetyLabelPictogram implements EbayModelInterface
{
    use FillsModel;

    /** The description of the safety label pictogram. */
    #[Assert\Type('string')]
    public ?string $pictogramDescription = null;

    /** The identifier of the safety label pictogram. */
    #[Assert\Type('string')]
    public ?string $pictogramId = null;

    /** The URL of the safety label pictogram. */
    #[Assert\Type('string')]
    public ?string $pictogramUrl = null;
}
