***

# AddonService

This container describes an add-on service that may be selected for an item or that may apply automatically. A charge may be associated with the add-on service.



* Full name: `\SapientPro\EbayBrowseSDK\Models\AddonService`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### selection

This field indicates whether the add-on service must be selected for the item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceSelectionEnum'>eBay API documentation</a>

```php
public ?string $selection
```






***

### serviceFee

The amount charged for the add-on service.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $serviceFee
```






***

### serviceId

The ID number of the add-on service.

```php
public ?string $serviceId
```






***

### serviceType

The type of add-on service, such as AUTHENTICITY_GUARANTEE. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceTypeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\AddonServiceTypeEnum $serviceType
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
