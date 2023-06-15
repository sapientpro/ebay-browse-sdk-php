<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for the name/value pairs for the aspects of the product. For example: BRAND/Apple
 */
class Aspect implements EbayModelInterface
{
    use FillsModel;

    /** The text representing the name of the aspect for the name/value pair, such as Brand. */
    public ?string $localizedName;

    /**
     * The text representing the value of the aspect for the name/value pair, such as Apple.
     * @var string[]|null
     */
    public ?array $localizedValues;
}
