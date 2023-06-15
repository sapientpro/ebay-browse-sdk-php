***

# ShippingOptionSummary

The type that defines the fields for the shipping information.



* Full name: `\SapientPro\EbayBrowseSDK\Models\ShippingOptionSummary`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### guaranteedDelivery

Indicates if the seller has committed to shipping the item with eBay Guaranteed Delivery. With eBay Guaranteed Delivery, the  seller is committed to getting the line item to the buyer within 4 business days or less. See the <a href="https://www.ebay.com/help/buying/shipping-delivery/buying-items-ebay-guaranteed-delivery?id=4641 ">Buying items with eBay Guaranteed Delivery</a> help topic for more details about eBay Guaranteed Delivery.

```php
public ?bool $guaranteedDelivery
```






***

### maxEstimatedDeliveryDate

The end date of the delivery window (latest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. <br> <br> <span class="tablenote"> <b> Note: </b> For the best accuracy, always include the <code> contextualLocation</code> values in the <a href="/api-docs/buy/static/api-browse.html#Headers"> <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>

```php
public ?string $maxEstimatedDeliveryDate
```






***

### minEstimatedDeliveryDate

The start date of the delivery window (earliest projected delivery date).  This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. <br> <br><span class="tablenote"> <b> Note: </b> For the best accuracy, always include the <code> contextualLocation</code> values in the <a href="/api-docs/buy/static/api-browse.html#Headers"> <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>

```php
public ?string $minEstimatedDeliveryDate
```






***

### shippingCost

This is the estimated price to ship the item.<br><br>The price includes the value-added tax (VAT) for applicable jurisdictions when requested from supported marketplaces. In this case, users must do one or more of the following to see VAT-inclusive pricing:<ul><li>Pass the <a href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a> request header specifying the supported marketplace (such as <code>EBAY_GB</code>)</li><li>Pass the <code>contextualLocation</code> values for the supported marketplace in the <a href="/api-docs/buy/static/api-browse.html#Headers"><code>X-EBAY-C-ENDUSERCTX</code></a> request header</li><li>Specify the supported marketplace using the <a href="/api-docs/buy/static/ref-buy-browse-filters.html#deliveryCountry"><code>deliveryCountry</code></a> <b>filter</b> URI parameter (such as <code>filter=deliveryCountry:GB</code>)</li></ul><span class="tablenote"><b> Note: </b>For more information on VAT, refer to <a href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT Obligations in the EU</a>.</span>

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $shippingCost
```






***

### shippingCostType

Indicates the type of shipping used to ship the item. Possible values are <code> FIXED</code> (flat-rate shipping) and <code> CALCULATED</code> (shipping cost calculated based on item and buyer location).

```php
public ?string $shippingCostType
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
