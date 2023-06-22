<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the name/value pairs for the aspects of the product. For example: BRAND/Apple
 */
class Aspect implements EbayModelInterface
{
    use FillsModel;

    /** The text representing the name of the aspect for the name/value pair, such as Brand. */
    #[Assert\Type('string')]
    public ?string $localizedName;

    /**
     * The text representing the value of the aspect for the name/value pair, such as Apple.
     * @var string[]|null
     */
    #[Assert\Type('array')]
    public ?array $localizedValues;
}
