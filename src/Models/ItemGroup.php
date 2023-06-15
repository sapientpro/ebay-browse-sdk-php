<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

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
    public ?array $commonDescriptions;

    /**
     * An array of containers for all the item variation details, excluding the description.
     * @var Item[]|null
     */
    public ?array $items;

    /**
     * An array of warning messages. These types of errors do not prevent the method from executing but should be checked.
     * @var Error[]|null
     */
    public ?array $warnings;
}
