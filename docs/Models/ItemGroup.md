***

# ItemGroup

The type that defines the fields for the item details.



* Full name: `\SapientPro\EbayBrowseSDK\Models\ItemGroup`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### commonDescriptions

An array of containers for a description and the item IDs of all the items that have this exact description. Often the item variations within an item group all have the same description. Instead of repeating this description in the item details of each item, a description that is shared by at least one other item is returned in this container. If the description is unique, it is returned in the <b> items.description</b> field.

```php
public ?array $commonDescriptions
```






***

### items

An array of containers for all the item variation details, excluding the description.

```php
public ?array $items
```






***

### warnings

An array of warning messages. These types of errors do not prevent the method from executing but should be checked.

```php
public ?array $warnings
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
