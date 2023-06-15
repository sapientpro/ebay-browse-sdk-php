<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * A type that defines the pictogram for the type of hazard that a hazardous material represents.
 */
class HazardPictogram implements EbayModelInterface
{
    use FillsModel;

    /** The description of the hazard pictogram, such as Flammable. */
    public ?string $pictogramDescription;

    /** The ID of the hazard pictogram. */
    public ?string $pictogramId;

    /** The URL of the hazard pictogram. */
    public ?string $pictogramUrl;
}
