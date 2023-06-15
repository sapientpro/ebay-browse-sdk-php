***

# VatDetail

The type the defines the fields for the VAT (value add tax) information.



* Full name: `\SapientPro\EbayBrowseSDK\Models\VatDetail`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### issuingCountry

The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166</a> standard of the country issuing the seller's VAT (value added tax) ID. VAT is a tax added by some European countries. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum $issuingCountry
```






***

### vatId

The seller's VAT (value added tax) ID. VAT is a tax added by some European countries.

```php
public ?string $vatId
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
