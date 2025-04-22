<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

class ConditionDescriptor implements EbayModelInterface
{
    use FillsModel;

    /** The name of a condition descriptor. The value(s) for this condition descriptor is returned in the associated values array.  */
    #[Assert\Type('string')]
    public ?string $name = null;

    /** @var ConditionDescriptorValue[]|null This array displays the value(s) for a condition descriptor (denoted by the associated name field), as well as any other additional information about the condition of the item. */
    #[Assert\Type('array')]
    public ?array $values = null;
}
