***

# BuyingOptionDistribution

The container that defines the fields for the buying options refinements. This container is returned when <b> fieldgroups</b> is set to <code>BUYING_OPTION_REFINEMENTS</code> or <code>FULL</code> in the request.



* Full name: `\SapientPro\EbayBrowseSDK\Models\BuyingOptionDistribution`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### buyingOption

The container that returns the buying option type. This will be AUCTION, FIXED_PRICE, CLASSIFIED_AD, or a combination of these options. For details, see <a href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.buyingOptions">buyingOptions</a>.

```php
public string $buyingOption
```






***

### matchCount

The number of items having this buying option.

```php
public int $matchCount
```






***

### refinementHref

The HATEOAS reference for this buying option.

```php
public string $refinementHref
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
