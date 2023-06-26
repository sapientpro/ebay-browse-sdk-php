<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the image information.
 */
class SearchByImageRequest implements EbayModelInterface
{
    use FillsModel;

    /** The Base64 string of the image. */
    #[Assert\Type('string')]
    public string $image;
}
