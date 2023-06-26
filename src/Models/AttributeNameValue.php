<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type the defines attribute name/value pair fields that specify a product. The type of data depends on the context. For example, if you were using this to specify a specific vehicle, the attribute names would be Make, Model, Year, etc.
 */
class AttributeNameValue implements EbayModelInterface
{
    use FillsModel;

    /** The name of the product attribute, such as Make, Model, Year, etc. */
    #[Assert\Type('string')]
    public string $name;

    /** The value for the <b> name</b> attribute, such as BMW, R1200GS, 2011, etc. */
    #[Assert\Type('string')]
    public string $value;
}
