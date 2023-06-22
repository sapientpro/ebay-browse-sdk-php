<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the product identifier type/value pairs of product associated with an item.
 */
class ProductIdentity implements EbayModelInterface
{
    use FillsModel;

    /** The type of product identifier, such as UPC and EAN. */
    #[Assert\Type('string')]
    public ?string $identifierType;

    /** The product identifier value. */
    #[Assert\Type('string')]
    public ?string $identifierValue;
}
