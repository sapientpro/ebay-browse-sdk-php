***

# CompatibilityResponse

The type that defines the response fields for <b> checkCompatibility</b>.



* Full name: `\SapientPro\EbayBrowseSDK\Models\CompatibilityResponse`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### compatibilityStatus

An enumeration value that tells you if the item is compatible with the product. <br><br>The values are: <ul>   <li>   <b> COMPATIBLE</b> - Indicates the item is compatible with the product specified in the request.</li>   <li>   <b> NOT_COMPATIBLE</b> - Indicates the item is not compatible with the product specified in the request. Be sure to check all the <b> value</b> fields to ensure they are correct as errors in the value can also cause this response.</li>   <li> <b> UNDETERMINED</b> - Indicates one or more attributes for the specified product are missing so compatibility cannot be determined.  The response returns the attributes that are missing.</li>  </ul>  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CompatibilityStatus'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\CompatibilityStatus $compatibilityStatus
```






***

### warnings

An array of warning messages. These types of errors do not prevent the method from executing but should be checked.

```php
public ?array $warnings
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
