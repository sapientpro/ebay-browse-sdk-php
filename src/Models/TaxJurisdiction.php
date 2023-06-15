<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

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
    public ?Region $region;

    /** The identifier of the tax jurisdiction. */
    public ?string $taxJurisdictionId;
}
