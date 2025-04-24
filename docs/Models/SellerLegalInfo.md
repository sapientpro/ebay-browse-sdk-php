***

# SellerLegalInfo

The type that defines the fields for the contact information for a seller.



* Full name: `\SapientPro\EbayBrowseSDK\Models\SellerLegalInfo`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### email

The seller's business email address.

```php
public ?string $email
```






***

### fax

The seller's business fax number.

```php
public ?string $fax
```






***

### imprint

This is a free-form string created by the seller. This is information often found on business cards, such as address. This is information used by some countries.

```php
public ?string $imprint
```






***

### legalContactFirstName

The seller's first name.

```php
public ?string $legalContactFirstName
```






***

### legalContactLastName

The seller's last name.

```php
public ?string $legalContactLastName
```






***

### name

The name of the seller's business.

```php
public ?string $name
```






***

### phone

The seller's business phone number.

```php
public ?string $phone
```






***

### registrationNumber

The seller's registration number. This is information used by some countries.

```php
public ?string $registrationNumber
```






***

### sellerProvidedLegalAddress

The container that returns the seller's address to be used to contact them.

```php
public ?\SapientPro\EbayBrowseSDK\Models\LegalAddress $sellerProvidedLegalAddress
```






***

### termsOfService

This is a free-form string created by the seller. This is the seller's terms or condition, which is in addition to the seller's return policies.

```php
public ?string $termsOfService
```






***

### vatDetails

An array of the seller's VAT (value added tax) IDs and the issuing country. VAT is a tax added by some European countries.

```php
public ?array $vatDetails
```

***

### economicOperator

Provides required information about the manufacturer and/or supplier of the item.

```php
public ?EconomicOperator $economicOperator
```



***

### weeeNumber

The Waste Electrical and Electronic Equipment (WEEE) registration number required for any seller to place electrical and electronic equipment on the market in Germany. This manufacturer number is assigned to the first distributors of electrical and electronic equipment and comprises a country code and an 8-digit sequence of digits (e.g. “WEEE Reg. No. DE 12345678”). Occurrence: Conditional

```php
public ?string $weeeNumber
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
