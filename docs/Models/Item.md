***

# Item

The details of an item that can be purchased.



* Full name: `\SapientPro\EbayBrowseSDK\Models\Item`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### additionalImages

An array of containers with the URLs for the images that are in addition to the primary image.  The primary image is returned in the <b> image.imageUrl</b> field.

```php
public ?array $additionalImages
```






***

### addonServices

A list of add-on services that may be selected for the item or that may apply automatically.

```php
public ?array $addonServices
```






***

### adultOnly

This indicates if the item is for  adults only. For more information about adult-only items on eBay, see <a href="https://pages.ebay.com/help/policies/adult-only.html " target="_blank">Adult items policy</a> for sellers and <a href="https://www.ebay.com/help/terms-conditions/default/searching-adult-items?id=4661" target="_blank">Adult-Only items on eBay</a> for buyers.

```php
public bool $adultOnly
```






***

### ageGroup

(Primary Item Aspect) The age group for which the product is recommended. For example, newborn, infant, toddler, kids, adult, etc. All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $ageGroup
```






***

### authenticityGuarantee

A container for information about whether an item, or the item group when returned for the <b>getItemsByItemGroup</b> method, is qualified for the Authenticity Guarantee program.<br><br><span class="tablenote"><b>Note: </b>The <code>AUTHENTICITY_GUARANTEE</code> value being returned by the <b>getItemsByItemGroup</b> method indicates that at least one item in the item group supports this program, but doesn't guarantee that the program is available to all items in the item group. To verify if the Authenticity Program is indeed available for the item that you are interested in, grab the <b>items.itemId</b> value for that item and use the <b>getItem</b> method. This method will return specific details on that particular item, including whether or not the Authenticity Guarantee Program is available for the item. Look for the <b>qualifiedPrograms</b> array and <b>authenticityGuarantee</b> container in the <b>getItem</b> response for this information.</span><br><br>Under the Authenticity Guarantee program, the seller ships a purchased item to a a third-party authenticator who inspects the item and provides an authentication card for it before the item is shipped to the buyer. If the buyer returns the item, the authenticator first verifies that it is the same item in the same condition before returning it to the seller.<br><br><span class="tablenote"><b> Note: </b>Refer to the <a href="https://pages.ebay.com/authenticity-guarantee/ " target="_blank">Authenticity Guarantee</a> page for more information.</span>

```php
public ?\SapientPro\EbayBrowseSDK\Models\AuthenticityGuaranteeProgram $authenticityGuarantee
```






***

### authenticityVerification

A container for information about whether an item is from a verified seller.</span>

```php
public ?\SapientPro\EbayBrowseSDK\Models\AuthenticityVerificationProgram $authenticityVerification
```






***

### availableCoupons

A list of available coupons for the item.

```php
public ?array $availableCoupons
```






***

### bidCount

This integer value indicates the total number of bids that have been placed against an auction item. This field is returned only for auction items.

```php
public ?int $bidCount
```






***

### brand

(Primary Item Aspect) The name brand of the item, such as Nike, Apple, etc.  All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $brand
```






***

### buyingOptions

A comma separated list of all the purchase options available for the item. The values returned are:<ul><li><code>FIXED_PRICE</code> - Indicates the buyer can purchase the item for a set price using the Buy It Now button.</li><li><code>AUCTION</code> - Indicates the buyer can place a bid for the item. After the first bid is placed, this becomes a live auction item and is the only buying option for this item.</li><li><code>BEST_OFFER</code> - Indicates the buyer can send the seller a price they're willing to pay for the item. The seller can accept, reject, or send a counter offer. For more information on how this works, see <a href="https://www.ebay.com/help/buying/buy-now/making-best-offer?id=4019 ">Making a Best Offer</a>.</li><li><code>CLASSIFIED_AD</code> - Indicates that the final sales transaction is to be completed outside of the eBay environment.</li></ul>Code so that your app gracefully handles any future changes to this list.

```php
public ?array $buyingOptions
```






***

### categoryId

The ID of the leaf category for this item. A leaf category is the lowest level in that category and has no children.

```php
public string $categoryId
```






***

### categoryIdPath

The IDs of every category in the item path, separated by pipe characters, starting with the top level parent category.<br><br>For example, if an item belongs to the top level category Home and Garden (category ID 11700), followed by Home Improvement (159907), Heating, Cooling and Air (69197), and Thermostats (115947), the field would return the value: <code>11700|159907|69197|115947</code>.

```php
public string $categoryIdPath
```






***

### categoryPath

Text that shows the category hierarchy of the item. For example: Computers/Tablets &amp; Networking, Laptops &amp; Netbooks, PC Laptops &amp; Netbooks

```php
public string $categoryPath
```






***

### color

(Primary Item Aspect) Text describing the color of the item.  All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $color
```






***

### condition

A short text description for the condition of the item, such as New or Used. For a list of condition names, see <a href="https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html " target="_blank">Item Condition IDs and Names</a>.  <br><br>Code so that your app gracefully handles any future changes to this list.

```php
public ?string $condition
```






***

### conditionDescription

A full text description for the condition of the item. This field elaborates on the value specified in the <b>condition</b> field and provides full details for the condition of the item.

```php
public ?string $conditionDescription
```






***

### conditionId

The identifier of the condition of the item. For example, 1000 is the identifier for NEW. For a list of condition names and IDs, see <a href="https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html " target="_blank">Item Condition IDs and Names</a>. <br><br>Code so that your app gracefully handles any future changes to this list.

```php
public ?string $conditionId
```






***

### currentBidPrice

The container that returns the current highest bid for an auction item. The value (string) field shows the dollar value of the current highest bid, and the currency (3-digit ISO code) field denotes the currency associated with that bid value. This container will only be returned for auction items.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $currentBidPrice
```






***

### description

The full description of the item that was created by the seller. This can be plain text or rich content and can be very large.

```php
public string $description
```






***

### ecoParticipationFee

The Eco Participation fee, a fee paid by the buyer that is applied to the cost of the eventual disposal of the purchased item. The fee is remitted in full to the eco organization.<br><br>Currently, this value is required for electronic devices and furniture.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $ecoParticipationFee
```






***

### eligibleForInlineCheckout

This field indicates if the item can be purchased using the Buy <a href="/api-docs/buy/order/resources/methods">Order API</a>. <ul> <li>If the value of this field is <code>true</code>, this indicates that the item can be purchased using the <b> Order API</b>. </li>  <li>If the value of this field is <code>false</code>, this indicates that the item cannot be purchased using the <b> Order API</b> and must be purchased on the eBay site.</li> </ul>

```php
public bool $eligibleForInlineCheckout
```






***

### enabledForGuestCheckout

This indicates if the item can be purchased using Guest Checkout in the <a href="/api-docs/buy/order/resources/methods">Order API</a>. You can use this flag to exclude items from your inventory that are not eligible for Guest Checkout, such as gift cards.

```php
public bool $enabledForGuestCheckout
```






***

### energyEfficiencyClass

This indicates the <a href="https://en.wikipedia.org/wiki/European_Union_energy_label ">European energy efficiency</a> rating (EEK) of the item. This field is returned only if the seller specified the energy efficiency rating. <br><br>The rating is a set of energy efficiency classes from A to G, where 'A' is the most energy efficient and 'G' is the least efficient. This rating helps buyers choose between various models. <br><br>When the manufacturer's specifications for this item are available, the link to this information is returned in the <b> productFicheWebUrl</b> field.

```php
public ?string $energyEfficiencyClass
```






***

### epid

An EPID is the eBay product identifier of a product from the eBay product catalog.  This indicates the product in which the item belongs.

```php
public ?string $epid
```






***

### estimatedAvailabilities

The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned.

```php
public ?array $estimatedAvailabilities
```






***

### gender

(Primary Item Aspect) The gender for the item. This is used for items that could vary by gender, such as clothing. For example: male, female, or unisex. All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $gender
```






***

### gtin

The unique Global Trade Item number of the item as defined by <a href="https://www.gtin.info " target="_blank">https://www.gtin.info</a>. This can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN (International Standard Book Number) value.

```php
public ?string $gtin
```






***

### hazardousMaterialsLabels

Hazardous materials labels for the item.

```php
public ?\SapientPro\EbayBrowseSDK\Models\HazardousMaterialsLabels $hazardousMaterialsLabels
```






***

### image

The URL of the primary image of the item. The other images of the item are returned in the <b> additionalImages</b> container.

```php
public \SapientPro\EbayBrowseSDK\Models\Image $image
```






***

### inferredEpid

The ePID (eBay Product ID of a product from the eBay product catalog) for the item, which has been programmatically determined by eBay using the item's title, aspects, and other data. <br><br>If the seller provided an ePID for the item, the seller's value is returned in the <b> epid</b> field. <br><br><span class="tablenote"><b> Note: </b> This field is returned only for authorized Partners.</span>

```php
public ?string $inferredEpid
```






***

### itemAffiliateWebUrl

The URL to the View Item page of the item which includes the affiliate tracking ID.<br><br><span class="tablenote"><b>Note:</b> In order to receive commissions on sales, eBay Partner Network affiliates must use this URL to forward buyers to the listing on the eBay marketplace.</span><br>The <b>itemAffiliateWebUrl</b> is only returned if:<ul><li>The marketplace through which the item is being viewed is part of the eBay Partner Network. Currently Poland (<code>EBAY_PL</code>) and Singapore (<code>EBAY_SG</code>) are <b>not</b> supported.<br><br>For additional information, refer to <a href="https://partnerhelp.ebay.com/helpcenter/s/article/countries-available-as-a-program-in-EPN?language=en_US " target="_blank">eBay Partner Network</a>.</li><li>The seller enables affiliate tracking for the item by including the <code><a href="/api-docs/buy/static/api-browse.html#Headers">X-EBAY-C-ENDUSERCTX</a></code> request header in the method.</li></ul>

```php
public ?string $itemAffiliateWebUrl
```






***

### itemCreationDate

A timestamp that indicates the date and time an item listing was created.<br><br>This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which can be converted into the local time of the buyer.

```php
public ?string $itemCreationDate
```






***

### itemEndDate

This timestamp indicates the date and time up to which the item can be purchased.  This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer.<br><br><span class="tablenote"><b> Note: </b>This field is only returned for auction listings.</span>

```php
public ?string $itemEndDate
```






***

### itemId

The unique RESTful identifier of the item.

```php
public string $itemId
```






***

### itemLocation

The physical location of the item.

```php
public ?\SapientPro\EbayBrowseSDK\Models\Address $itemLocation
```






***

### itemWebUrl

The URL of the View Item page of the item. This enables you to include a "Report Item on eBay" link that takes the buyer to the View Item page on eBay. From there they can report any issues regarding this item to eBay.

```php
public string $itemWebUrl
```






***

### legacyItemId

The unique identifier of the eBay listing that contains the item. This is the traditional/legacy ID that is often seen in the URL of the listing View Item page.

```php
public string $legacyItemId
```






***

### listingMarketplaceId

The ID of the eBay marketplace where the item is listed. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:MarketplaceIdEnum'>eBay API documentation</a>

```php
public \SapientPro\EbayBrowseSDK\Enums\MarketplaceIdEnum $listingMarketplaceId
```






***

### localizedAspects

An array of containers that show the complete list of the aspect name/value pairs that describe the variation of the item.

```php
public ?array $localizedAspects
```






***

### lotSize

The number of items in a lot. In other words, a lot size is the number of items that are being sold together.  <br><br>A lot is a set of two or more items included in a single listing that must be purchased together in a single order line item. All the items in the lot are the same but there can be multiple items in a single lot,  such as the package of batteries shown in the example below.   <br><br><table border="1"> <tr> <tr>  <th>Item</th>  <th>Lot Definition</th> <th>Lot Size</th></tr>  <tr>  <td>A package of 24 AA batteries</td>  <td>A box of 10 packages</td>  <td>10  </td> </tr>  <tr>  <td>A P235/75-15 Goodyear tire </td>  <td>4 tires  </td>  <td>4  </td> </tr> <tr> <td>Fashion Jewelry Rings  </td> <td>Package of 100 assorted rings  </td> <td>100 </td> </tr></table>  <br><br><span class="tablenote"><b>Note: </b>  Lots are not supported in all categories.  </span>

```php
public ?int $lotSize
```






***

### marketingPrice

The original price and the discount amount and percentage.

```php
public ?\SapientPro\EbayBrowseSDK\Models\MarketingPrice $marketingPrice
```






***

### material

(Primary Item Aspect) Text describing what the item is made of. For example, silk. All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $material
```






***

### minimumPriceToBid

The minimum price of the next bid, which means to place a bid it must be equal to or greater than this amount. If the auction hasn't received any bids, the minimum bid price is the same as the starting bid. Otherwise, the minimum bid price is equal to the current bid plus the bid increment.  For details about bid increments, see <a href="https://www.ebay.com/help/buying/bidding/automatic-bidding?id=4014 ">Automatic bidding</a>.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $minimumPriceToBid
```






***

### mpn

The manufacturer's part number, which is a unique number that identifies a specific product. To identify the product, this is always used along with brand.

```php
public ?string $mpn
```






***

### pattern

(Primary Item Aspect) Text describing the pattern used on the item. For example, paisley. All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $pattern
```






***

### paymentMethods

The payment methods for the item, including the payment method types, brands, and instructions for the buyer.

```php
public ?array $paymentMethods
```






***

### price

The cost of just the item. This amount does not include any adjustments such as discounts or shipping costs.<br><br><span class="tablenote"><b> Note: </b>The price does include the value-added tax (VAT) for applicable jurisdictions when requested from supported marketplaces. In this case, users must pass the <a href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a> request header specifying the supported marketplace (such as <code>EBAY_GB</code>) to see the VAT-inclusive pricing. For more information on VAT, refer to <a href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT Obligations in the EU</a>.</span>

```php
public \SapientPro\EbayBrowseSDK\Models\ConvertedAmount $price
```






***

### priceDisplayCondition

Indicates when in the buying flow the item's price can appear for minimum advertised price (MAP) items, which is the lowest price a retailer can advertise/show for this item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PriceDisplayConditionEnum'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\PriceDisplayConditionEnum $priceDisplayCondition
```






***

### primaryItemGroup

The container that returns details of a primary item group (parent ID of an item group). An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. <br><br>When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the "parent". All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc.<br><br><span class="tablenote"><b> Note: </b> This container is returned only if the <b> item_id</b> in the request is for an item group (items with variations, such as color and size).</span>

```php
public ?\SapientPro\EbayBrowseSDK\Models\ItemGroupSummary $primaryItemGroup
```






***

### primaryProductReviewRating

The container that returns the product rating details, such as review count, rating histogram, and average rating.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ReviewRating $primaryProductReviewRating
```






***

### priorityListing

This field is returned as <code>true</code> if the listing is part of a Promoted Listing campaign. Promoted Listings are available to Above Standard and Top Rated sellers with recent sales activity.<br><br>For more information, see <a href="https://pages.ebay.com/seller-center/listing-and-marketing/promoted-listings.html " target="_blank">Promoted Listings</a>.

```php
public bool $priorityListing
```






***

### product

The container that returns the product information of the item.

```php
public ?\SapientPro\EbayBrowseSDK\Models\Product $product
```






***

### productFicheWebUrl

The URL of a page containing the manufacturer's specification of this item, which helps buyers make a purchasing decision. This information is available only for items that include the European energy efficiency rating (EEK) but is not available for <em> all</em> items with an EEK rating and is returned only if this information is available. The EEK rating of the item is returned in the <b> energyEfficiencyClass</b> field.

```php
public ?string $productFicheWebUrl
```






***

### qualifiedPrograms

An array of the qualified programs available for the item, or for the item group when returned for the <b>getItemsByItemGroup</b> method, such as EBAY_PLUS, AUTHENTICITY_GUARANTEE, and AUTHENTICITY_VERIFICATION.<br><br><span class="tablenote"><b>Note: </b>The <code>AUTHENTICITY_GUARANTEE</code> value being returned by the <b>getItemsByItemGroup</b> method indicates that at least one item in the item group supports this program, but doesn't guarantee that the program is available to all items in the item group. To verify if the Authenticity Program is indeed available for the item that you are interested in, grab the <b>items.itemId</b> value for that item and use the <b>getItem</b> method. This method will return specific details on that particular item, including whether or not the Authenticity Guarantee Program is available for the item. Look for the <b>qualifiedPrograms</b> array and <b>authenticityGuarantee</b> container in the <b>getItem</b> response for this information.</span><br><br>eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able to offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.<br><br><span class="tablenote"><b>Note: </b> eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.</span><br><br>The eBay <a href="https://pages.ebay.com/authenticity-guarantee/ " target="_blank">Authenticity Guarantee</a> program enables third-party authenticators to perform authentication verification inspections on items such as watches and sneakers.

```php
public ?array $qualifiedPrograms
```






***

### quantityLimitPerBuyer

The maximum number for a specific item that one buyer can purchase.

```php
public ?int $quantityLimitPerBuyer
```






***

### repairScore

A score that describes how easy it is to repair the product. Score values range from 0.1 (hardest to repair) to 10.0 (easiest), always including a single decimal place.<br><br><span class="tablenote"><b>Note:</b> Support for this field is currently limited to the France marketplace.</span>

```php
public ?string $repairScore
```






***

### reservePriceMet

This indicates if the reserve price of the item has been met. A reserve price is set by the seller and is the minimum amount the seller is willing to sell the item for. <p>If the highest bid is not equal to or higher than the reserve price when the auction ends, the listing ends and the item is not sold.</p> <p><b> Note: </b>This is returned only for auctions that have a reserve price.</p>

```php
public ?bool $reservePriceMet
```






***

### returnTerms

The container that returns an overview of the seller's return policy.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ItemReturnTerms $returnTerms
```






***

### seller

The container that returns basic and detailed about the seller of the item, such as name, feedback score, and contact information.

```php
public \SapientPro\EbayBrowseSDK\Models\SellerDetail $seller
```






***

### sellerCustomPolicies

A list of the custom policies that are applied to a listing.

```php
public ?array $sellerCustomPolicies
```






***

### sellerItemRevision

An identifier generated/incremented when a seller revises the item. There are two types of item revisions: <ul><li>Seller changes, such as changing the title</li>  <li>eBay system changes, such as changing the quantity when an item is purchased</li></ul> This ID is changed <em> only</em> when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed.

```php
public ?string $sellerItemRevision
```






***

### shippingOptions

An array of shipping options containers that have the details about cost, carrier, etc. of one shipping option.

```php
public array $shippingOptions
```






***

### shipToLocations

The container that returns the geographic regions to be included and excluded that define where the item can be shipped.

```php
public ?\SapientPro\EbayBrowseSDK\Models\ShipToLocations $shipToLocations
```






***

### shortDescription

This text string is derived from the item condition and the item aspects (such as size, color, capacity, model, brand, etc.).

```php
public ?string $shortDescription
```






***

### size

(Primary Item Aspect) The size of the item. For example, '7' for a size 7 shoe. All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $size
```






***

### sizeSystem

(Primary Item Aspect) The sizing system of the country.  All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container. <br><br><b> Valid Values: </b> <br>AU (Australia),  <br>BR (Brazil), <br>CN (China),  <br>DE (Germany),  <br>EU (European Union),  <br> FR (France), <br> IT (Italy),  <br>JP (Japan), <br>MX (Mexico),  <br>US (USA), <br> UK (United Kingdom) <br><br>Code so that your app gracefully handles any future changes to this list.

```php
public ?string $sizeSystem
```






***

### sizeType

(Primary Item Aspect) Text describing a size group in which the item would be included, such as regular, petite, plus, big-and-tall or maternity. All the item aspects, including this aspect, are returned in the <b> localizedAspects</b> container.

```php
public ?string $sizeType
```






***

### subtitle

A subtitle is optional and allows the seller to provide more information about the product, possibly including keywords that may assist with search results.

```php
public ?string $subtitle
```






***

### taxes

The container for the tax information for the item.

```php
public ?array $taxes
```






***

### title

The seller-created title of the item. <br><br><b> Maximum Length: </b> 80 characters

```php
public string $title
```






***

### topRatedBuyingExperience

This indicates if the item a top-rated plus item. There are three benefits of a top-rated plus item: a  minimum 30-day money-back return policy, shipping the items in 1 business day with tracking provided, and the added comfort of knowing this item is from experienced sellers with the highest buyer ratings. See the <a href="https://pages.ebay.com/topratedplus/index.html " target="_blank">Top Rated Plus Items </a> and <a href="https://pages.ebay.com/help/sell/top-rated.html " target="_blank">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> help topics for more information.

```php
public ?bool $topRatedBuyingExperience
```






***

### tyreLabelImageUrl

The URL to the image that shows the information on the tyre label.

```php
public ?string $tyreLabelImageUrl
```






***

### uniqueBidderCount

This integer value indicates the number of different eBay users who have placed one or more bids on an auction item. This field is only applicable to auction items.

```php
public ?int $uniqueBidderCount
```






***

### unitPrice

This is the price per unit for the item. Some European countries require listings for certain types of products to include the price per unit so buyers can accurately compare prices.   <br><br>For example: <br><br><code>"unitPricingMeasure": "100g",<br> "unitPrice": {<br>&nbsp;&nbsp;"value": "7.99",<br>&nbsp;&nbsp;"currency": "GBP"</code>

```php
public ?\SapientPro\EbayBrowseSDK\Models\ConvertedAmount $unitPrice
```






***

### unitPricingMeasure

The designation, such as size, weight, volume, count, etc., that was used to specify the quantity of the item.  This helps buyers compare prices. <br><br>For example, the following tells the buyer that the item is 7.99 per 100 grams. <br><br><code>"unitPricingMeasure": "100g",<br> "unitPrice": {<br>&nbsp;&nbsp;"value": "7.99",<br>&nbsp;&nbsp;"currency": "GBP"</code>

```php
public ?string $unitPricingMeasure
```






***

### warnings

An array of warning messages. These types of errors do not prevent the method from executing but should be checked.

```php
public ?array $warnings
```






***

### watchCount

The number of users that have added the item to their watch list.<br><br><span class="tablenote"> <strong>Note:</strong> This field is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check ">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to Watch Count data in the Browse API.</span>

```php
public ?int $watchCount
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
