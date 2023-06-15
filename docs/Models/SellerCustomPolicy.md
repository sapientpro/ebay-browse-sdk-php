***

# SellerCustomPolicy

The container for custom policies that apply to a listed item.



* Full name: `\SapientPro\EbayBrowseSDK\Models\SellerCustomPolicy`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### description

The seller-defined description of the policy.

```php
public ?string $description
```






***

### label

The seller-defined label for an individual custom policy.

```php
public ?string $label
```






***

### type

The type of custom policy, such as PRODUCT_COMPLIANCE or TAKE_BACK. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:SellerCustomPolicyTypeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\SellerCustomPolicyTypeEnum $type
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
