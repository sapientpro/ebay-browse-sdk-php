<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for the local pickup options that are available for the item. It is used by the <b>  pickupOptions</b>  container.
 */
class PickupOptionSummary implements EbayModelInterface
{
    use FillsModel;

    /** This container returns the local pickup options available to the buyer. Possible values are <code>ARRANGED_LOCATION</code> and <code>STORE</code>. */
    public ?string $pickupLocationType;
}
