***

# Address

The type that defines the fields for an address.



* Full name: `\SapientPro\EbayBrowseSDK\Models\Address`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### addressLine1

The first line of the street address. <b> Note: </b> This is conditionally returned in the <b> itemLocation</b> field.

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
public \SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum $country
```






***

### county

The county of the address.

```php
public ?string $county
```






***

### postalCode

The postal code (or zip code in US) code of the address. Sellers set a postal code (or zip code in US) for items when they are listed. The postal code is used for calculating proximity searches. It is anonymized when returned in <b>itemLocation.postalCode</b> via the API.

```php
public ?string $postalCode
```






***

### stateOrProvince

The state or province of the address.  <b> Note: </b> This is conditionally returned in the <b> itemLocation</b> field.

```php
public ?string $stateOrProvince
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
