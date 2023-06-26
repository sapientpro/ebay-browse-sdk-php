<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This container returns the product attribute name/value pairs that are compatible with the keyword. These attributes are submitted in the  <b>compatibility_filter</b> request field.
 */
class CompatibilityProperty implements EbayModelInterface
{
    use FillsModel;

    /** The name of the product attribute that as been translated to the language of the site. */
    #[Assert\Type('string')]
    public ?string $localizedName = null;

    /** The name of the product attribute, such as Make, Model, Year, etc. */
    #[Assert\Type('string')]
    public ?string $name = null;

    /** The value for the <b> name</b> attribute, such as BMW, R1200GS, 2011, etc. */
    #[Assert\Type('string')]
    public ?string $value = null;
}
