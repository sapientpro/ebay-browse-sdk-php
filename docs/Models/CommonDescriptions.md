***

# CommonDescriptions

The type that defines the fields for the item ids that all use a common description.  Often the item variations within an item group all have the same description. Instead of repeating this description in the item details of each item, a description that is shared by at least one other item is returned in this container. If the description is unique, it is returned in the <b> items.description</b> field.



* Full name: `\SapientPro\EbayBrowseSDK\Models\CommonDescriptions`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### description

The item description that is used by more than one of the item variations.

```php
public string $description
```






***

### itemIds

A list of item ids that have this description.

```php
public array $itemIds
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
