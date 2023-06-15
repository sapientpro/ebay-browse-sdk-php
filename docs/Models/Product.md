***

# Product

The type that defines the fields for the product information of the item.



* Full name: `\SapientPro\EbayBrowseSDK\Models\Product`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### additionalImages

An array of containers with the URLs for the product images that are in addition to the primary image.

```php
public ?array $additionalImages
```






***

### additionalProductIdentities

An array of product identifiers associated with the item. This container is returned if the seller has associated the eBay Product Identifier (ePID) with the item and in the request <b> fieldgroups</b> is set to <code>PRODUCT</code>.

```php
public ?array $additionalProductIdentities
```






***

### aspectGroups

An array of containers for the product aspects. Each group contains the aspect group name and the aspect name/value pairs.

```php
public ?array $aspectGroups
```






***

### brand

The brand associated with product. To identify the product, this is always used along with MPN (manufacturer part number).

```php
public ?string $brand
```






***

### description

The rich description of an eBay product, which might contain HTML.

```php
public ?string $description
```






***

### gtins

An array of all the possible GTINs values associated with the product. A GTIN is a unique Global Trade Item number of the item as defined by <a href="https://www.gtin.info " target="_blank">https://www.gtin.info</a>. This can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN (International Standard Book Number) value.

```php
public ?array $gtins
```






***

### image

The primary image of the product. This is often a stock photo.

```php
public ?\SapientPro\EbayBrowseSDK\Models\Image $image
```






***

### mpns

An array of all possible MPN values associated with the product. A MPNs is manufacturer part number of the product. To identify the product, this is always used along with brand.

```php
public ?array $mpns
```






***

### title

The title of the product.

```php
public ?string $title
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
