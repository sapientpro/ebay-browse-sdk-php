<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

class ConditionDescriptorValue implements EbayModelInterface
{
    use FillsModel;

    /** @var string[]|null Additional information about the condition of an item as it relates to a condition descriptor. This array elaborates on the value specified in the content field and provides additional details about the condition of an item. */
    #[Assert\Type('array')]
    public ?array $additionalInfo = null;

    /** The value for the condition descriptor indicated in the associated name field.  */
    #[Assert\Type('string')]
    public ?string $content = null;
}
