***

# ItemGroupSummary

The type that defines the fields for the details of each item in an item group. An item group is  an item that has various aspect differences, such as color, size, storage capacity, etc. When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the "parent". All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc. <br><br><span class="tablenote"><b> Note: </b> This container is returned only if the <b> item_id</b> in the request is an item group (parent ID of an item with variations).</span>



* Full name: `\SapientPro\EbayBrowseSDK\Models\ItemGroupSummary`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### itemGroupAdditionalImages

An array of containers with the URLs for images that are in addition to the primary image of the item group.  The primary image is returned in the <b> itemGroupImage</b> field.

```php
public ?array $itemGroupAdditionalImages
```






***

### itemGroupHref

The HATEOAS reference of the parent page of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.

```php
public ?string $itemGroupHref
```






***

### itemGroupId

The unique identifier for the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.

```php
public ?string $itemGroupId
```






***

### itemGroupImage

The URL of the primary image of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.

```php
public ?\SapientPro\EbayBrowseSDK\Models\Image $itemGroupImage
```






***

### itemGroupTitle

The title of the item that appears on the item group page. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.

```php
public ?string $itemGroupTitle
```






***

### itemGroupType

An enumeration value that indicates the type of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ItemGroupTypeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\ItemGroupTypeEnum $itemGroupType
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
