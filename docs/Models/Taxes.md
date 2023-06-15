***

# Taxes

The type that defines the tax fields.



* Full name: `\SapientPro\EbayBrowseSDK\Models\Taxes`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### ebayCollectAndRemitTax

This field is only returned if <code>true</code>, and indicates that eBay will collect tax (sales tax, Goods and Services tax, or VAT) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence.

```php
public ?bool $ebayCollectAndRemitTax
```






***

### includedInPrice

This indicates if tax was applied for the cost of the item.

```php
public ?bool $includedInPrice
```






***

### shippingAndHandlingTaxed

This indicates if tax is applied for the shipping cost.

```php
public ?bool $shippingAndHandlingTaxed
```






***

### taxJurisdiction

The container that returns the tax jurisdiction.

```php
public ?\SapientPro\EbayBrowseSDK\Models\TaxJurisdiction $taxJurisdiction
```






***

### taxPercentage

The percentage of tax.

```php
public ?string $taxPercentage
```






***

### taxType

This field indicates the type of tax that may be collected for the item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:TaxType'>eBay API documentation</a>

```php
public ?string $taxType
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
