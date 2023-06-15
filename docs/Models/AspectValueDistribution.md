***

# AspectValueDistribution

The container that defines the fields for the conditions refinements. This container is returned when <b> fieldgroups</b> is set to <code>ASPECT_REFINEMENTS</code> or <code>FULL</code> in the request.



* Full name: `\SapientPro\EbayBrowseSDK\Models\AspectValueDistribution`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### localizedAspectValue

The value of an aspect. For example, Red is a value for the aspect Color.

```php
public string $localizedAspectValue
```






***

### matchCount

The number of items with this aspect.

```php
public int $matchCount
```






***

### refinementHref

A HATEOAS reference for this aspect.

```php
public string $refinementHref
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
