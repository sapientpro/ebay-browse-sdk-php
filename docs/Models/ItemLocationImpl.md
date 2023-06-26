***

# ItemLocationImpl

The type that defines the fields for the location of an item, such as information typically used for an address, including postal code, county, state/province, street address, city, and country (2-digit ISO code).



* Full name: `\SapientPro\EbayBrowseSDK\Models\ItemLocationImpl`
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

The second line of the street address. This field may contain such values as an apartment or suite number.

```php
public ?string $addressLine2
```






***

### city

The city in which the item is located. <br><br><b>Restriction:</b> This field is populated in the <b> search</b> method response <i> only</i> when <b> fieldgroups</b> = <code>EXTENDED</code>.

```php
public ?string $city
```






***

### country

The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html ">ISO 3166</a> standard code that indicates the country in which the item is located.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>

```php
public \SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum $country
```






***

### county

The county in which the item is located.

```php
public ?string $county
```






***

### postalCode

The postal code (or zip code in US) where the item is located. Sellers set a postal code (or zip code in US) for items when they are listed. The postal code is used for calculating proximity searches. It is anonymized when returned in <b>itemLocation.postalCode</b> via the API.

```php
public ?string $postalCode
```






***

### stateOrProvince

The state or province in which the item is located.

```php
public ?string $stateOrProvince
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
