<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for the image information.
 */
class SearchByImageRequest implements EbayModelInterface
{
    use FillsModel;

    /** The Base64 string of the image. */
    public string $image;
}
