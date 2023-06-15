***

# Amount





* Full name: `\SapientPro\EbayBrowseSDK\Models\Amount`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### currency

The list of valid currencies. Each <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> currency code includes the currency name followed by the numeric value.<br><br>For example, the Canadian Dollar code (CAD) would take the following form: <i>Canadian Dollar, 124</i>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay API documentation</a>

```php
public \SapientPro\EbayBrowseSDK\Enums\CurrencyCodeEnum $currency
```






***

### value

The value of the discounted amount.

```php
public string $value
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
