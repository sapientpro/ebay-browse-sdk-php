<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the tax jurisdiction details.
 */
class TaxJurisdiction implements EbayModelInterface
{
    use FillsModel;

    /**
     * The region of the tax jurisdiction.
     * @var Region|null
     */
    #[Assert\Type(Region::class)]
    public ?Region $region = null;

    /** The identifier of the tax jurisdiction. */
    #[Assert\Type('string')]
    public ?string $taxJurisdictionId = null;
}
