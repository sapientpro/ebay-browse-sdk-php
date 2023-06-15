***

# ShipToLocations

The type that defines the fields that include and exclude geographic regions affecting where the item can be shipped. The seller defines these regions when listing the item.



* Full name: `\SapientPro\EbayBrowseSDK\Models\ShipToLocations`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### regionExcluded

An array of containers that express the large geographical regions, countries, state/provinces, or special locations within a country where the seller is not willing to ship to.

```php
public ?array $regionExcluded
```






***

### regionIncluded

An array of containers that express the large geographical regions, countries, or state/provinces within a country where the seller is willing to ship to. Prospective buyers must look at the shipping regions under this container, as well as the shipping regions that are under the <b>regionExcluded</b> to see where the seller is willing to ship items. Sellers can specify that they ship 'Worldwide', but then add several large geographical regions (e.g. Asia, Oceania, Middle East) to the exclusion list, or sellers can specify that they ship to Europe and Africa, but then add several individual countries to the exclusion list.

```php
public ?array $regionIncluded
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
