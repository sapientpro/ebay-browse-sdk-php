***

# Region

This type is used to provide region details for a tax jurisdiction.



* Full name: `\SapientPro\EbayBrowseSDK\Models\Region`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### regionName

A localized text string that indicates the name of the region. Taxes are generally charged at the state/province level or at the country level in the case of VAT tax.

```php
public ?string $regionName
```






***

### regionType

An enumeration value that indicates the type of region for the tax jurisdiction. <br><br><b> Valid Values: </b> <ul><li><b> STATE_OR_PROVINCE </b> - Indicates the region is a state or province within a country, such as California or New York in the US, or Ontario or Alberta in Canada.</li><li><b> COUNTRY </b> - Indicates the region is a single country.</li></ul>  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:RegionTypeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\RegionTypeEnum $regionType
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
