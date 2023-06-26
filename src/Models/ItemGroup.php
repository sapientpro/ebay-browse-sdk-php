<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the item details.
 */
class ItemGroup implements EbayModelInterface
{
    use FillsModel;

    /**
     * An array of containers for a description and the item IDs of all the items that have this exact description. Often the item variations within an item group all have the same description. Instead of repeating this description in the item details of each item, a description that is shared by at least one other item is returned in this container. If the description is unique, it is returned in the <b> items.description</b> field.
     * @var CommonDescriptions[]|null
     */
    #[Assert\Type('array')]
    public ?array $commonDescriptions = null;

    /**
     * An array of containers for all the item variation details, excluding the description.
     * @var Item[]|null
     */
    #[Assert\Type('array')]
    public ?array $items = null;

    /**
     * An array of warning messages. These types of errors do not prevent the method from executing but should be checked.
     * @var Error[]|null
     */
    #[Assert\Type('array')]
    public ?array $warnings = null;
}
