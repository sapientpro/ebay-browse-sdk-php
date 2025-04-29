<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used to describe the seller provided product safety label statement.
 */
class ProductSafetyLabelStatement implements EbayModelInterface
{
    use FillsModel;

    /** A description of the nature of the product safety label statement. */
    #[Assert\Type('string')]
    public ?string $statementDescription = null;

    /** The identifier of the product safety label statement. */
    #[Assert\Type('string')]
    public ?string $statementId = null;
}
