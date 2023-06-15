<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * This container returns the product attribute name/value pairs that are compatible with the keyword. These attributes are submitted in the  <b>compatibility_filter</b> request field.
 */
class CompatibilityProperty implements EbayModelInterface
{
    use FillsModel;

    /** The name of the product attribute that as been translated to the language of the site. */
    public ?string $localizedName;

    /** The name of the product attribute, such as Make, Model, Year, etc. */
    public ?string $name;

    /** The value for the <b> name</b> attribute, such as BMW, R1200GS, 2011, etc. */
    public ?string $value;
}
