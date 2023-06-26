***

# CategoryDistribution

The container that defines the fields for the category refinements. This container is returned when <b> fieldgroups</b> is set to <code>CATEGORY_REFINEMENTS</code> or <code>FULL</code> in the request.



* Full name: `\SapientPro\EbayBrowseSDK\Models\CategoryDistribution`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### categoryId

The identifier of the category.

```php
public string $categoryId
```






***

### categoryName

The name of the category, such as Baby & Toddler Clothing.

```php
public string $categoryName
```






***

### matchCount

The number of items in this category.

```php
public int $matchCount
```






***

### refinementHref

The HATEOAS reference of this category.

```php
public string $refinementHref
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
