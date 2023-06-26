***

# MarketingPrice

The type that defines the fields that describe a seller discount.



* Full name: `\SapientPro\EbayBrowseSDK\Models\MarketingPrice`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### discountAmount

This container returns the monetary amount of the seller discount.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $discountAmount
```






***

### discountPercentage

This field expresses the percentage of the seller discount based on the value in the <b>  originalPrice</b> container.

```php
public ?string $discountPercentage
```






***

### originalPrice

This container returns the monetary amount of the item without the discount.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $originalPrice
```






***

### priceTreatment

Indicates the pricing treatment (discount) that was applied to the price of the item. <br><br><span class="tablenote"><b>Note: </b> The pricing treatment affects the way and where the discounted price can be displayed.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PriceTreatmentEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\PriceTreatmentEnum $priceTreatment
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
