***

# LegalAddress

Type that defines the fields for the seller's address.



* Full name: `\SapientPro\EbayBrowseSDK\Models\LegalAddress`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### addressLine1

The first line of the street address.

```php
public ?string $addressLine1
```






***

### addressLine2

The second line of the street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'.

```php
public ?string $addressLine2
```






***

### city

The city of the address.

```php
public string $city
```






***

### country

The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166</a> standard of the country of the address. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum $country
```






***

### countryName

The name of the country of the address.

```php
public ?string $countryName
```






***

### county

The name of the county of the address.

```php
public ?string $county
```






***

### postalCode

The postal code of the address.

```php
public ?string $postalCode
```






***

### stateOrProvince

The state or province of the address.

```php
public string $stateOrProvince
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
