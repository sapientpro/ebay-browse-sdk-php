<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * Type the defines the details of an image, such as size and image URL. Currently,  only <b> imageUrl</b> is  populated. The <b> height</b> and <b> width</b> were added for future use.
 */
class Image implements EbayModelInterface
{
    use FillsModel;

    /** Reserved for future use. */
    public ?int $height;

    /** The URL of the image. */
    public string $imageUrl;

    /** Reserved for future use. */
    public ?int $width;
}
