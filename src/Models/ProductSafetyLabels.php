<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type contains seller provided product safety pictograms and statements for the listing.
 */
class ProductSafetyLabels implements EbayModelInterface
{
    use FillsModel;

    /** @var ProductSafetyLabelPictogram[]|null An array of seller provided comma-separated string values that provides identifier, URL, and description for one or more pictograms associated with the listing. */
    #[Assert\Type('array')]
    public ?array $pictograms = null;

    /** @var ProductSafetyLabelStatement[]|null An array of seller provided comma-separated string values that provide identifier and description for one or more product safety statements associated with the listing. */
    #[Assert\Type('array')]
    public ?array $statements = null;
}
