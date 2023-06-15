***

# PaymentMethod





* Full name: `\SapientPro\EbayBrowseSDK\Models\PaymentMethod`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### paymentMethodType

The payment method type, such as credit card or cash. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentMethodTypeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\PaymentMethodTypeEnum $paymentMethodType
```






***

### paymentMethodBrands

The payment method brands, including the payment method brand type and logo image.

```php
public ?array $paymentMethodBrands
```






***

### paymentInstructions

The payment instructions for the buyer, such as <i>cash in person</i> or <i>contact seller</i>.

```php
public ?array $paymentInstructions
```






***

### sellerInstructions

The seller instructions to the buyer, such as <i>accepts credit cards</i> or <i>see description</i>.

```php
public ?array $sellerInstructions
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
