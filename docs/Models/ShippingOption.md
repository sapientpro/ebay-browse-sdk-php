***

# ShippingOption

The type that defines the fields for the details of a shipping provider.



* Full name: `\SapientPro\EbayBrowseSDK\Models\ShippingOption`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### additionalShippingCostPerUnit

Any per item additional shipping costs for a multi-item purchase. For example, let's say the shipping cost for a power cord is $3. But for an additional cord, the shipping cost is only $1. So if you bought 3 cords, the <b> shippingCost</b> would be $3 and this value would be $2 ($1 for each additional item).

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $additionalShippingCostPerUnit
```






***

### cutOffDateUsedForEstimate

The deadline date that the item must be purchased by in order to be received by the buyer within the delivery window (<b> maxEstimatedDeliveryDate</b> and  <b> minEstimatedDeliveryDate</b> fields). This field is returned only for items that are eligible for 'Same Day Handling'. For these items, the value of this field is what is displayed in the <b> Delivery</b> line on the View Item page.  <br><br>This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer.

```php
public ?string $cutOffDateUsedForEstimate
```






***

### fulfilledThrough

If the item is being shipped by the eBay <a href="https://pages.ebay.com/seller-center/shipping/global-shipping-program.html ">Global Shipping program</a>, this field returns <code>GLOBAL_SHIPPING</code>.<br><br>If the item is being shipped using the eBay International Shipping program, this field returns <code>INTERNATIONAL_SHIPPING</code>. <br><br>Otherwise, this field is null. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:FulfilledThroughEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\FulfilledThroughEnum $fulfilledThrough
```






***

### guaranteedDelivery

Indicates if the seller has committed to shipping the item with eBay Guaranteed Delivery. With eBay Guaranteed Delivery, the  seller is committed to getting the line item to the buyer within 4 business days or less. See the <a href="https://www.ebay.com/help/buying/shipping-delivery/buying-items-ebay-guaranteed-delivery?id=4641 ">Buying items with eBay Guaranteed Delivery</a> help topic for more details about eBay Guaranteed Delivery.

```php
public ?bool $guaranteedDelivery
```






***

### importCharges

The <a href="https://pages.ebay.com/seller-center/shipping/global-shipping-program.html ">Global Shipping Program</a> import charges for this item.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $importCharges
```






***

### maxEstimatedDeliveryDate

The end date of the delivery window (latest projected delivery date).  This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. <br> <br> <span class="tablenote"> <b> Note: </b> For the best accuracy, always include the location of where the item is be shipped in the <code> contextualLocation</code> values of the <a href="/api-docs/buy/static/api-browse.html#Headers"> <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>

```php
public ?string $maxEstimatedDeliveryDate
```






***

### minEstimatedDeliveryDate

The start date of the delivery window (earliest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. <br> <br><span class="tablenote"> <b> Note: </b> For the best accuracy, always include the location of where the item is be shipped in the <code> contextualLocation</code> values of the <a href="/api-docs/buy/static/api-browse.html#Headers"> <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>

```php
public ?string $minEstimatedDeliveryDate
```






***

### quantityUsedForEstimate

The number of items used when calculating the estimation information.

```php
public ?int $quantityUsedForEstimate
```






***

### shippingCarrierCode

The name of the shipping provider, such as FedEx, or USPS.

```php
public string $shippingCarrierCode
```






***

### shippingCost

The final shipping cost for all the items after all discounts are applied.<br><br><span class="tablenote"><b> Note: </b>The cost does include the value-added tax (VAT) for applicable jurisdictions when requested from supported marketplaces. In this case, users must pass the <a href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a> request header specifying the supported marketplace (such as <code>EBAY_GB</code>) to see the VAT-inclusive cost. For more information on VAT, refer to <a href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT Obligations in the EU</a>.</span>

```php
public \SapientPro\EbayBrowseSDK\Models\ConvertedAmount $shippingCost
```






***

### shippingCostType

Indicates the class of the shipping cost. <br><br><b> Valid Values: </b> FIXED or CALCULATED <br><br>Code so that your app gracefully handles any future changes to this list.

```php
public string $shippingCostType
```






***

### shippingServiceCode

The type of shipping service. For example, USPS First Class.

```php
public string $shippingServiceCode
```






***

### shipToLocationUsedForEstimate

The container that returns the country and postal code of where the item is to be shipped. These values come from the <code>contextualLocation</code> values in the  <a href="/api-docs/buy/static/api-browse.html#Headers"> <code>X-EBAY-C-ENDUSERCTX</code></a> request header. If the header is not submitted, marketplace is used.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ShipToLocation $shipToLocationUsedForEstimate
```






***

### trademarkSymbol

Any trademark symbol, such as &#8482; or &reg;, that needs to be shown in superscript next to the shipping service name.

```php
public ?string $trademarkSymbol
```






***

### type

The type of a shipping option, such as EXPEDITED, ONE_DAY, STANDARD, ECONOMY, PICKUP, etc.

```php
public string $type
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
