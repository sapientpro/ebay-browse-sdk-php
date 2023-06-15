<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\ItemGroupTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for the details of each item in an item group. An item group is  an item that has various aspect differences, such as color, size, storage capacity, etc. When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the "parent". All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc. <br><br><span class="tablenote"><b> Note: </b> This container is returned only if the <b> item_id</b> in the request is an item group (parent ID of an item with variations).</span>
 */
class ItemGroupSummary implements EbayModelInterface
{
    use FillsModel;

    /**
     * An array of containers with the URLs for images that are in addition to the primary image of the item group.  The primary image is returned in the <b> itemGroupImage</b> field.
     * @var Image[]|null
     */
    public ?array $itemGroupAdditionalImages;

    /** The HATEOAS reference of the parent page of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. */
    public ?string $itemGroupHref;

    /** The unique identifier for the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. */
    public ?string $itemGroupId;

    /**
     * The URL of the primary image of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     * @var Image|null
     */
    public ?Image $itemGroupImage;

    /** The title of the item that appears on the item group page. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. */
    public ?string $itemGroupTitle;

    /**
     * An enumeration value that indicates the type of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ItemGroupTypeEnum'>eBay API documentation</a>
     * @var ItemGroupTypeEnum|null
     */
    public ?ItemGroupTypeEnum $itemGroupType;
}
