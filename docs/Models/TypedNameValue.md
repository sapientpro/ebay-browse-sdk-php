***

# TypedNameValue

The type that defines the fields for the name/value pairs for item aspects.



* Full name: `\SapientPro\EbayBrowseSDK\Models\TypedNameValue`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### name

The text representing the name of the aspect for the name/value pair, such as Color.

```php
public ?string $name
```






***

### type

This indicates if the value being returned is a string or an array of values. <br><br><b> Valid Values: </b> <ul><li><b> STRING</b> - Indicates the value returned is a string.</li>  <li><b> STRING_ARRAY</b> - Indicates the value returned is an array of strings.</li></ul>  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ValueTypeEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\ValueTypeEnum $type
```






***

### value

The value of the aspect for the name/value pair, such as Red.

```php
public ?string $value
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
