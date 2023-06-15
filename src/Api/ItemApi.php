<?php

namespace SapientPro\EbayBrowseSDK\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use SapientPro\EbayBrowseSDK\ApiException;
use SapientPro\EbayBrowseSDK\Client\EbayClient;
use SapientPro\EbayBrowseSDK\Client\EbayRequest;
use SapientPro\EbayBrowseSDK\Client\Serializer;
use SapientPro\EbayBrowseSDK\Configuration;
use SapientPro\EbayBrowseSDK\Enums\MarketplaceIdEnum;
use SapientPro\EbayBrowseSDK\HeaderSelector;
use SapientPro\EbayBrowseSDK\Models\CompatibilityPayload;
use SapientPro\EbayBrowseSDK\Models\CompatibilityResponse;
use SapientPro\EbayBrowseSDK\Models\Item;
use SapientPro\EbayBrowseSDK\Models\ItemGroup;
use SapientPro\EbayBrowseSDK\Models\Items;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class ItemApi implements EbayApiInterface
{
    /** @ignore */
    private EbayClient $ebayClient;

    /** @ignore */
    private EbayRequest $ebayRequest;

    /** @ignore */
    private Configuration $config;

    /**
     * @ignore
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;

        $serializer = new Serializer();
        $client = new Client();

        $this->ebayClient = new EbayClient($client, $serializer);
        $this->ebayRequest = new EbayRequest(
            new HeaderSelector(),
            $this->config,
            $serializer
        );
    }

    /**
     * @ignore
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /** @ignore */
    public function setEbayClient(EbayClient $ebayClient): void
    {
        $this->ebayClient = $ebayClient;
    }

    /**
     * Operation getItem
     *
     * <p>This method retrieves the details of a specific item, such as description, price, category, all item aspects, condition, return policies, seller feedback and score, shipping options, shipping costs, estimated delivery, and other information the buyer needs to make a purchasing decision.</p><p>The Buy APIs are designed to let you create an eBay shopping experience in your app or website. This means you will need to know when something, such as the availability, quantity, etc., has changed in any eBay item you are offering. You can do this easily by setting the <b>fieldgroups</b> URI parameter. This parameter lets you control what is returned in the response.</p><p>Setting <b>fieldgroups</b> to <code>COMPACT</code> reduces the response to only those fields that you need in order to check if any item detail has changed. Setting <b>fieldgroups</b> to <code>PRODUCT</code>, adds additional fields to the default response that return information about the product of the item. You can use either <code>COMPACT</code> or <code>PRODUCT</code> but not both. For more information, see <a href="/api-docs/buy/browse/resources/item/methods/getItem#uri.fieldgroups">fieldgroups</a>.</p><h3><b> Request headers</b></h3> This method uses the <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.  For details see, <a href="/api-docs/buy/static/api-browse.html#Headers">Request headers</a> in the Buying Integration Guide.<h3><b> Restrictions </b></h3><p>For a list of supported sites and other restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.</p> <span class="tablenote"><b>eBay Partner Network: </b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site. </span>
     * @param string $itemId The eBay RESTful identifier of an item. This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br><br> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>For more information about item ID for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $fieldgroups This parameter lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item.<br><br><b>Valid Values:</b><ul><li><b>PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> product fields to the response, which describe the product associated with the item. See <a href="/api-docs/buy/browse/resources/item/methods/getItem#response.product">Product</a> for more information about these fields.</li><li><b> COMPACT</b> - This returns only the following fields, which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item's top-rated plus status has changed for items you have stored.<ul><li><b>itemId</b> - The identifier of the item.</li> <li><b>bidCount</b> - This integer value indicates the total number of bids that have been placed against an auction item.</li> <li><b>currentBidPrice</b> - This container shows the current highest bid for an auction item. This container will only be returned for auction items.</li>  <li><b>eligibleForInlineCheckout</b> - This parameter returns items based on whether or not the items can be purchased using the Buy <a href="/api-docs/buy/order/resources/methods">Order API</a>. <ul> <li>If the value of this field is <code>true</code>, this indicates that the item can be purchased using the <b> Order API</b>.</li><li>If the value of this field is <code>false</code>, this indicates that the item cannot be purchased using the <b> Order API</b> and must be purchased on the eBay site.</li> </ul> <li><b> estimatedAvailabilities</b> -  Returns the item availability information, which is based on the item's quantity. <b> Note:</b> Changes in quantity are not tracked by <b>sellerItemRevision</b>.</li> <li><b>itemAffiliateWebURL</b> - The URL of the View Item page of the item, which includes the affiliate tracking ID. This field is only returned if the eBay partner enables affiliate tracking for the item by including the <code>X-EBAY-C-ENDUSERCTX</code> request header in the method.</li><li><b>itemCreationDate</b> - This is a timestamp that indicates the date and time an item listing was created.</li> <li><b>itemEndDate</b> - This is the scheduled end time of the listing.</li> <li><b>ItemWebURL</b> - The URL of the View Item page of the item. This enables you to include a "Report Item on eBay" link that takes the buyer to the View Item page on eBay. From there they can report any issues regarding this item to eBay.</li> <li><b>legacyItemId</b> - The unique identifier of the eBay listing that contains the item. This is the traditional/legacy ID that is often seen in the URL of the listing View Item page.</li> <li><b>minimumPriceToBid</b> - This container shows the minimum bid amount that would be accepted as a qualifying bid in an auction listing. This container will only be returned for auction items.</li> <li><b>price</b> - This is tracked by the revision ID but is returned here to enable you to quickly verify the price of the item.</li> <li><b>priorityListing</b> - This field is returned as <code>true</code> if the listing is part of a Promoted Listing campaign. Promoted Listings are available to Above Standard and Top Rated sellers with recent sales activity.</li> <li><b>reservePriceMet</b> - This field indicates whether or not an auction's reserve price (if set by the seller) has been met yet. This field will only be returned for auction items.</li> <li><b> sellerItemRevision</b> - An identifier generated/incremented when a seller revises the item. The following are the two types of item revisions:   <ul>  <li><b> Seller changes</b>, such as changing the title</li>  <li>  <b> eBay system changes</b>, such as changing the quantity when an item is purchased.</li>  </ul> This ID is changed <em>only</em> when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed. To check if the quantity has changed, use <b> estimatedAvailabilities.</b></li> <li><b>shippingOptions</b> - A container for the cost, carrier, and other details of shipping options.</li> <li><b>taxes</b> - A container for the tax information for the item, such as the tax jurisdiction, the tax percentage, and the tax type.</li> <li><b> topRatedBuyingExperience</b> - A boolean value indicating if this item is a top-rated plus item. A change in the item's top rated plus standing is not tracked by the revision ID. See <a href="/api-docs/buy/browse/resources/item/methods/getItem#response.topRatedBuyingExperience">topRatedBuyingExperience</a> for more information.</li> <li><b>uniqueBidderCount</b> - This integer value indicates the number of different eBay users who have placed one or more bids on an auction item. This field is only applicable to auction items.</li></ul>    <b> For Example</b> <br> <br>To check if a stored item's information is current, do following.  <ol>    <li>Pass in the item ID and set <b> fieldgroups</b> to COMPACT. <br> <br><code>item/v1|4**********8|0?fieldgroups=COMPACT</code> </li>     <li>Do one of the following:    <ul>     <li>If the <b> sellerItemRevision</b> field is returned and you <em>haven't</em> stored a revision number for this item, record the number and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>   <li>If the revision number is different from the value you have stored, update the value and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>     <li>If the <b> sellerItemRevision</b> field is <em>not</em> returned or has not changed, where needed, update the item information with the information returned in the response.</li>  </ul>  </li> </ol></li> </ul>  </ul>    <p><b> Maximum value: </b> 1 <br>If more than one values is specified, the first value will be used.
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return Item|null
     * @throws ApiException on non-2xx response
     */
    public function getItem(
        string $itemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $fieldgroups = null,
        string $xEbayCEnduserctx = null,
    ): ?Item {
        $response = $this->getItemWithHttpInfo(
            $itemId,
            $xEbayCMarketplaceId,
            $fieldgroups,
            $xEbayCEnduserctx,
        );

        return $response['data'] ?? null;
    }

    /**
     * @param string $itemId The eBay RESTful identifier of an item. This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br><br> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>For more information about item ID for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $fieldgroups This parameter lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item.<br><br><b>Valid Values:</b><ul><li><b>PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> product fields to the response, which describe the product associated with the item. See <a href="/api-docs/buy/browse/resources/item/methods/getItem#response.product">Product</a> for more information about these fields.</li><li><b> COMPACT</b> - This returns only the following fields, which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item's top-rated plus status has changed for items you have stored.<ul><li><b>itemId</b> - The identifier of the item.</li> <li><b>bidCount</b> - This integer value indicates the total number of bids that have been placed against an auction item.</li> <li><b>currentBidPrice</b> - This container shows the current highest bid for an auction item. This container will only be returned for auction items.</li>  <li><b>eligibleForInlineCheckout</b> - This parameter returns items based on whether or not the items can be purchased using the Buy <a href="/api-docs/buy/order/resources/methods">Order API</a>. <ul> <li>If the value of this field is <code>true</code>, this indicates that the item can be purchased using the <b> Order API</b>.</li><li>If the value of this field is <code>false</code>, this indicates that the item cannot be purchased using the <b> Order API</b> and must be purchased on the eBay site.</li> </ul> <li><b> estimatedAvailabilities</b> -  Returns the item availability information, which is based on the item's quantity. <b> Note:</b> Changes in quantity are not tracked by <b>sellerItemRevision</b>.</li> <li><b>itemAffiliateWebURL</b> - The URL of the View Item page of the item, which includes the affiliate tracking ID. This field is only returned if the eBay partner enables affiliate tracking for the item by including the <code>X-EBAY-C-ENDUSERCTX</code> request header in the method.</li><li><b>itemCreationDate</b> - This is a timestamp that indicates the date and time an item listing was created.</li> <li><b>itemEndDate</b> - This is the scheduled end time of the listing.</li> <li><b>ItemWebURL</b> - The URL of the View Item page of the item. This enables you to include a "Report Item on eBay" link that takes the buyer to the View Item page on eBay. From there they can report any issues regarding this item to eBay.</li> <li><b>legacyItemId</b> - The unique identifier of the eBay listing that contains the item. This is the traditional/legacy ID that is often seen in the URL of the listing View Item page.</li> <li><b>minimumPriceToBid</b> - This container shows the minimum bid amount that would be accepted as a qualifying bid in an auction listing. This container will only be returned for auction items.</li> <li><b>price</b> - This is tracked by the revision ID but is returned here to enable you to quickly verify the price of the item.</li> <li><b>priorityListing</b> - This field is returned as <code>true</code> if the listing is part of a Promoted Listing campaign. Promoted Listings are available to Above Standard and Top Rated sellers with recent sales activity.</li> <li><b>reservePriceMet</b> - This field indicates whether or not an auction's reserve price (if set by the seller) has been met yet. This field will only be returned for auction items.</li> <li><b> sellerItemRevision</b> - An identifier generated/incremented when a seller revises the item. The following are the two types of item revisions:   <ul>  <li><b> Seller changes</b>, such as changing the title</li>  <li>  <b> eBay system changes</b>, such as changing the quantity when an item is purchased.</li>  </ul> This ID is changed <em>only</em> when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed. To check if the quantity has changed, use <b> estimatedAvailabilities.</b></li> <li><b>shippingOptions</b> - A container for the cost, carrier, and other details of shipping options.</li> <li><b>taxes</b> - A container for the tax information for the item, such as the tax jurisdiction, the tax percentage, and the tax type.</li> <li><b> topRatedBuyingExperience</b> - A boolean value indicating if this item is a top-rated plus item. A change in the item's top rated plus standing is not tracked by the revision ID. See <a href="/api-docs/buy/browse/resources/item/methods/getItem#response.topRatedBuyingExperience">topRatedBuyingExperience</a> for more information.</li> <li><b>uniqueBidderCount</b> - This integer value indicates the number of different eBay users who have placed one or more bids on an auction item. This field is only applicable to auction items.</li></ul>    <b> For Example</b> <br> <br>To check if a stored item's information is current, do following.  <ol>    <li>Pass in the item ID and set <b> fieldgroups</b> to COMPACT. <br> <br><code>item/v1|4**********8|0?fieldgroups=COMPACT</code> </li>     <li>Do one of the following:    <ul>     <li>If the <b> sellerItemRevision</b> field is returned and you <em>haven't</em> stored a revision number for this item, record the number and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>   <li>If the revision number is different from the value you have stored, update the value and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>     <li>If the <b> sellerItemRevision</b> field is <em>not</em> returned or has not changed, where needed, update the item information with the information returned in the response.</li>  </ul>  </li> </ol></li> </ul>  </ul>    <p><b> Maximum value: </b> 1 <br>If more than one values is specified, the first value will be used.
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return array
     * @throws ApiException on non-2xx response
     * @ignore
     * Operation getItemWithHttpInfo
     *
     */
    public function getItemWithHttpInfo(
        string $itemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $fieldgroups = null,
        string $xEbayCEnduserctx = null,
    ): array {
        $returnType = Item::class;

        $request = $this->getItemRequest(
            $itemId,
            $xEbayCMarketplaceId,
            $fieldgroups,
            $xEbayCEnduserctx,
        );

        return $this->ebayClient->sendRequest($request, $returnType);
    }

    /**
     * @ignore
     * @param string|null $fieldgroups This parameter lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item.<br><br><b>Valid Values:</b><ul><li><b>PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> product fields to the response, which describe the product associated with the item. See <a href="/api-docs/buy/browse/resources/item/methods/getItem#response.product">Product</a> for more information about these fields.</li><li><b> COMPACT</b> - This returns only the following fields, which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item's top-rated plus status has changed for items you have stored.<ul><li><b>itemId</b> - The identifier of the item.</li> <li><b>bidCount</b> - This integer value indicates the total number of bids that have been placed against an auction item.</li> <li><b>currentBidPrice</b> - This container shows the current highest bid for an auction item. This container will only be returned for auction items.</li>  <li><b>eligibleForInlineCheckout</b> - This parameter returns items based on whether or not the items can be purchased using the Buy <a href="/api-docs/buy/order/resources/methods">Order API</a>. <ul> <li>If the value of this field is <code>true</code>, this indicates that the item can be purchased using the <b> Order API</b>.</li><li>If the value of this field is <code>false</code>, this indicates that the item cannot be purchased using the <b> Order API</b> and must be purchased on the eBay site.</li> </ul> <li><b> estimatedAvailabilities</b> -  Returns the item availability information, which is based on the item's quantity. <b> Note:</b> Changes in quantity are not tracked by <b>sellerItemRevision</b>.</li> <li><b>itemAffiliateWebURL</b> - The URL of the View Item page of the item, which includes the affiliate tracking ID. This field is only returned if the eBay partner enables affiliate tracking for the item by including the <code>X-EBAY-C-ENDUSERCTX</code> request header in the method.</li><li><b>itemCreationDate</b> - This is a timestamp that indicates the date and time an item listing was created.</li> <li><b>itemEndDate</b> - This is the scheduled end time of the listing.</li> <li><b>ItemWebURL</b> - The URL of the View Item page of the item. This enables you to include a "Report Item on eBay" link that takes the buyer to the View Item page on eBay. From there they can report any issues regarding this item to eBay.</li> <li><b>legacyItemId</b> - The unique identifier of the eBay listing that contains the item. This is the traditional/legacy ID that is often seen in the URL of the listing View Item page.</li> <li><b>minimumPriceToBid</b> - This container shows the minimum bid amount that would be accepted as a qualifying bid in an auction listing. This container will only be returned for auction items.</li> <li><b>price</b> - This is tracked by the revision ID but is returned here to enable you to quickly verify the price of the item.</li> <li><b>priorityListing</b> - This field is returned as <code>true</code> if the listing is part of a Promoted Listing campaign. Promoted Listings are available to Above Standard and Top Rated sellers with recent sales activity.</li> <li><b>reservePriceMet</b> - This field indicates whether or not an auction's reserve price (if set by the seller) has been met yet. This field will only be returned for auction items.</li> <li><b> sellerItemRevision</b> - An identifier generated/incremented when a seller revises the item. The following are the two types of item revisions:   <ul>  <li><b> Seller changes</b>, such as changing the title</li>  <li>  <b> eBay system changes</b>, such as changing the quantity when an item is purchased.</li>  </ul> This ID is changed <em>only</em> when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed. To check if the quantity has changed, use <b> estimatedAvailabilities.</b></li> <li><b>shippingOptions</b> - A container for the cost, carrier, and other details of shipping options.</li> <li><b>taxes</b> - A container for the tax information for the item, such as the tax jurisdiction, the tax percentage, and the tax type.</li> <li><b> topRatedBuyingExperience</b> - A boolean value indicating if this item is a top-rated plus item. A change in the item's top rated plus standing is not tracked by the revision ID. See <a href="/api-docs/buy/browse/resources/item/methods/getItem#response.topRatedBuyingExperience">topRatedBuyingExperience</a> for more information.</li> <li><b>uniqueBidderCount</b> - This integer value indicates the number of different eBay users who have placed one or more bids on an auction item. This field is only applicable to auction items.</li></ul>    <b> For Example</b> <br> <br>To check if a stored item's information is current, do following.  <ol>    <li>Pass in the item ID and set <b> fieldgroups</b> to COMPACT. <br> <br><code>item/v1|4**********8|0?fieldgroups=COMPACT</code> </li>     <li>Do one of the following:    <ul>     <li>If the <b> sellerItemRevision</b> field is returned and you <em>haven't</em> stored a revision number for this item, record the number and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>   <li>If the revision number is different from the value you have stored, update the value and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>     <li>If the <b> sellerItemRevision</b> field is <em>not</em> returned or has not changed, where needed, update the item information with the information returned in the response.</li>  </ul>  </li> </ol></li> </ul>  </ul>    <p><b> Maximum value: </b> 1 <br>If more than one values is specified, the first value will be used.
     * @param string $itemId The eBay RESTful identifier of an item. This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br><br> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>For more information about item ID for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @return Request
     * Create request object for operation getItem
     *
     */
    private function getItemRequest(
        string $itemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $fieldgroups = null,
        string $xEbayCEnduserctx = null,
    ): Request {
        $resourcePath = '/item/{item_id}';
        $queryParams = [];
        $headerParams = [];
        $resourcePath = str_replace(
            '{' . 'item_id' . '}',
            Serializer::toPathValue($itemId),
            $resourcePath
        );

        if (null !== $fieldgroups) {
            $queryParams['fieldgroups'] = $fieldgroups;
        }

        $headerParams['X-EBAY-C-ENDUSERCTX'] = $xEbayCEnduserctx;

        $headerParams['X-EBAY-C-MARKETPLACE-ID'] = $xEbayCMarketplaceId->value;

        return $this->ebayRequest->getRequest(
            $resourcePath,
            queryParameters: $queryParams,
            headerParameters: $headerParams
        );
    }

    /**
     * Operation getItemByLegacyId
     *
     * <p>This method is a bridge between the eBay legacy APIs, such as  <b> Shopping</b>, and <b> Finding</b> and the eBay Buy APIs. There are differences between how legacy APIs and RESTful APIs return the identifier of an "item" and what the item ID represents. This method lets you use the legacy item ids retrieve the details of a specific item, such as description, price, and other information the buyer needs to make a purchasing decision. It also returns the RESTful item ID, which you can use with all the Buy API  methods.</p>  <p>For more information about how to use legacy ids with the Buy APIs, see <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> in the Buying Integration guide.</p>  <p>This method returns the item details and requires you to pass in either the item ID of a non-variation item or the item ids of both the parent and child of an item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.</p> <p>When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the "parent". All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc.</p>    <p>The <b> fieldgroups</b> URI parameter lets you control what is returned in the response. Setting <b> fieldgroups</b> to <code>PRODUCT</code>, adds additional fields to the default response that return information about the product of the item. For more information, see <a href="/api-docs/buy/browse/resources/item/methods/getItemByLegacyItem#uri.fieldgroups">fieldgroups</a>.</p><h3><b> Request headers</b></h3> This method uses the <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.  For details see, <a href="/api-docs/buy/static/api-browse.html#Headers">Request headers</a> in the Buying Integration Guide.    <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.</p> <span class="tablenote"><b>eBay Partner Network: </b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site. </span>
     * @param string $legacyItemId Specifies either: <ul> <li>The legacy item ID of an item that is <em>not</em> part of a group. </li> <li>The legacy item ID of a group, which is the ID of the "parent" of the group of items. <br> <br><span class="tablenote"> <b> Note: </b> If you pass in a group ID, you must also use the <b> legacy_variation_id</b> field and pass in the legacy ID of the specific item variation (child ID).</span></li></ul>  Legacy ids are returned by APIs, such as the <a href="https://developer.ebay.com/devzone/finding/callref/index.html " target="_blank">Finding API</a>.  <br><br>The following is an example of using the value of the <b> ItemID</b> field for a specific item from Finding to get the RESTful <b> itemId</b> value. <br> <br>&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9  </code><br><br><b> Maximum: </b> 1
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $fieldgroups This field lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item. <b> Note</b>: In this method, the only value supported is <code>PRODUCT</code>. <p><b> Valid Values: </b><br><br> <b> PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> fields to the response, which describe the item's product.  See <a href="/api-docs/buy/browse/resources/item/methods/getItemByLegacyItem#response.product">Product</a> for more information about these fields. <br><br>Code so that your app gracefully handles any future changes to this list.
     * @param string|null $legacyVariationId Specifies the legacy item ID of a specific item in an item group, such as the red shirt size L. <br><br>Legacy ids are returned by APIs, such as the <a href="https://developer.ebay.com/devzone/finding/callref/index.html " target="_blank">Finding API</a>.     <br><br><b> Maximum: </b> 1 <br><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_id</b>
     * @param string|null $legacyVariationSku Specifics the legacy SKU of the item. SKU are item ids created by the seller. <br><br>Legacy SKUs are returned by eBay the  <a href="https://developer.ebay.com/Devzone/shopping/docs/CallRef/index.html " target="_blank">Shopping API</a>. <br><br>The following is an example of using the value of the <b> ItemID</b> and <b> SKU</b> fields to get the RESTful <b> itemId</b> value. <br> <br>&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9&amp;legacy_variation_sku=V**********M</code><br><br><b> Maximum: </b> 1 <br><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_sku</b>
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return Item|null
     * @throws ApiException on non-2xx response
     */
    public function getItemByLegacyId(
        string $legacyItemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $fieldgroups = null,
        string $legacyVariationId = null,
        string $legacyVariationSku = null,
        string $xEbayCEnduserctx = null,
    ): ?Item {
        $response = $this->getItemByLegacyIdWithHttpInfo(
            $legacyItemId,
            $xEbayCMarketplaceId,
            $fieldgroups,
            $legacyVariationId,
            $legacyVariationSku,
            $xEbayCEnduserctx,
        );

        return $response['data'] ?? null;
    }

    /**
     * @ignore
     * Operation getItemByLegacyIdWithHttpInfo
     * @param string $legacyItemId Specifies either: <ul> <li>The legacy item ID of an item that is <em>not</em> part of a group. </li> <li>The legacy item ID of a group, which is the ID of the "parent" of the group of items. <br> <br><span class="tablenote"> <b> Note: </b> If you pass in a group ID, you must also use the <b> legacy_variation_id</b> field and pass in the legacy ID of the specific item variation (child ID).</span></li></ul>  Legacy ids are returned by APIs, such as the <a href="https://developer.ebay.com/devzone/finding/callref/index.html " target="_blank">Finding API</a>.  <br><br>The following is an example of using the value of the <b> ItemID</b> field for a specific item from Finding to get the RESTful <b> itemId</b> value. <br> <br>&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9  </code><br><br><b> Maximum: </b> 1
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $fieldgroups This field lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item. <b> Note</b>: In this method, the only value supported is <code>PRODUCT</code>. <p><b> Valid Values: </b><br><br> <b> PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> fields to the response, which describe the item's product.  See <a href="/api-docs/buy/browse/resources/item/methods/getItemByLegacyItem#response.product">Product</a> for more information about these fields. <br><br>Code so that your app gracefully handles any future changes to this list.
     * @param string|null $legacyVariationId Specifies the legacy item ID of a specific item in an item group, such as the red shirt size L. <br><br>Legacy ids are returned by APIs, such as the <a href="https://developer.ebay.com/devzone/finding/callref/index.html " target="_blank">Finding API</a>.     <br><br><b> Maximum: </b> 1 <br><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_id</b>
     * @param string|null $legacyVariationSku Specifics the legacy SKU of the item. SKU are item ids created by the seller. <br><br>Legacy SKUs are returned by eBay the  <a href="https://developer.ebay.com/Devzone/shopping/docs/CallRef/index.html " target="_blank">Shopping API</a>. <br><br>The following is an example of using the value of the <b> ItemID</b> and <b> SKU</b> fields to get the RESTful <b> itemId</b> value. <br> <br>&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9&amp;legacy_variation_sku=V**********M</code><br><br><b> Maximum: </b> 1 <br><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_sku</b>
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return array
     * @throws ApiException on non-2xx response
     */
    public function getItemByLegacyIdWithHttpInfo(
        string $legacyItemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $fieldgroups = null,
        string $legacyVariationId = null,
        string $legacyVariationSku = null,
        string $xEbayCEnduserctx = null,
    ): array {
        $returnType = Item::class;

        $request = $this->getItemByLegacyIdRequest(
            $legacyItemId,
            $xEbayCMarketplaceId,
            $fieldgroups,
            $legacyVariationId,
            $legacyVariationSku,
            $xEbayCEnduserctx,
        );

        return $this->ebayClient->sendRequest($request, $returnType);
    }

    /**
     * @ignore
     * @param string|null $fieldgroups This field lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item. <b> Note</b>: In this method, the only value supported is <code>PRODUCT</code>. <p><b> Valid Values: </b><br><br> <b> PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> fields to the response, which describe the item's product.  See <a href="/api-docs/buy/browse/resources/item/methods/getItemByLegacyItem#response.product">Product</a> for more information about these fields. <br><br>Code so that your app gracefully handles any future changes to this list.
     * @param string $legacyItemId Specifies either: <ul> <li>The legacy item ID of an item that is <em>not</em> part of a group. </li> <li>The legacy item ID of a group, which is the ID of the "parent" of the group of items. <br> <br><span class="tablenote"> <b> Note: </b> If you pass in a group ID, you must also use the <b> legacy_variation_id</b> field and pass in the legacy ID of the specific item variation (child ID).</span></li></ul>  Legacy ids are returned by APIs, such as the <a href="https://developer.ebay.com/devzone/finding/callref/index.html " target="_blank">Finding API</a>.  <br><br>The following is an example of using the value of the <b> ItemID</b> field for a specific item from Finding to get the RESTful <b> itemId</b> value. <br> <br>&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9  </code><br><br><b> Maximum: </b> 1
     * @param string|null $legacyVariationId Specifies the legacy item ID of a specific item in an item group, such as the red shirt size L. <br><br>Legacy ids are returned by APIs, such as the <a href="https://developer.ebay.com/devzone/finding/callref/index.html " target="_blank">Finding API</a>.     <br><br><b> Maximum: </b> 1 <br><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_id</b>
     * @param string|null $legacyVariationSku Specifics the legacy SKU of the item. SKU are item ids created by the seller. <br><br>Legacy SKUs are returned by eBay the  <a href="https://developer.ebay.com/Devzone/shopping/docs/CallRef/index.html " target="_blank">Shopping API</a>. <br><br>The following is an example of using the value of the <b> ItemID</b> and <b> SKU</b> fields to get the RESTful <b> itemId</b> value. <br> <br>&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9&amp;legacy_variation_sku=V**********M</code><br><br><b> Maximum: </b> 1 <br><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_sku</b>
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @return Request
     * Create request object for operation getItemByLegacyId
     *
     */
    private function getItemByLegacyIdRequest(
        string $legacyItemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $fieldgroups = null,
        string $legacyVariationId = null,
        string $legacyVariationSku = null,
        string $xEbayCEnduserctx = null,
    ): Request {
        $resourcePath = '/item/get_item_by_legacy_id';
        $queryParams = [];
        $headerParams = [];

        if (null !== $fieldgroups) {
            $queryParams['fieldgroups'] = $fieldgroups;
        }

        $queryParams['legacy_item_id'] = Serializer::toQueryValue($legacyItemId);


        if (null !== $legacyVariationId) {
            $queryParams['legacy_variation_id'] = $legacyVariationId;
        }

        if (null !== $legacyVariationSku) {
            $queryParams['legacy_variation_sku'] = $legacyVariationSku;
        }

        $headerParams['X-EBAY-C-ENDUSERCTX'] = $xEbayCEnduserctx;

        $headerParams['X-EBAY-C-MARKETPLACE-ID'] = $xEbayCMarketplaceId->value;

        return $this->ebayRequest->getRequest(
            $resourcePath,
            queryParameters: $queryParams,
            headerParameters: $headerParams
        );
    }

    /**
     * Operation getItems
     *
     * This method retrieves the details of specific items that the buyer needs to make a purchasing decision.  <br><br><span class="tablenote"> <b>Note:</b> This is a <a href="https://developer.ebay.com/api-docs/static/versioning.html#limited " target="_blank"> <img src="/cms/img/docs/partners-api.svg" class="legend-icon partners-icon" title="Limited Release"  alt="Limited Release" />(Limited Release)</a> available only to select Partners. <br><br>For this method, only the following fields are returned: <code>bidCount</code>, <code>currentBidPrice</code>, <code>eligibleForInlineCheckout</code>, <code>enabledForGuestCheckout</code>, <code>estimatedAvailabilities</code>, <code>itemAffiliateWebUrl</code>, <code>itemCreationDate</code>, <code>itemId</code>, <code>itemWebUrl</code>, <code>legacyItemId</code>, <code>minimumPriceToBid</code>, <code>price</code>, <code>priorityListing</code>, <code>reservePriceMet</code>, <code>sellerItemRevision</code>, <code>taxes</code>, <code>topRatedBuyingExperience</code>, and <code>uniqueBidderCount</code>.<br><br>The array <code>shippingOptions</code>, which comprises multiple fields, is also returned.</span><h3><b> Request headers</b></h3> This method uses the  <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations. For details see, <a href="/api-docs/buy/static/api-browse.html#Headers">Request headers</a> in the Buying Integration Guide.   <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.</p> <span class="tablenote"><b>eBay Partner Network:</b> In order to be commissioned for your sales, you must use the URL returned in the itemAffiliateWebUrl field to forward your buyer to the ebay.com site.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $itemIds A list of item IDs. Item IDs are the eBay RESTful identifier of items. <br><br><b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error. <br><br> In a request, multiple item_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemIDs: </b> 20 <br><br>For more information about item IDs for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param string|null $itemGroupIds A list of item group IDs. Item group IDs are the eBay RESTful identifier of item groups. <br><br><b> RESTful Group Item ID Format: </b><code>############</code><br>For example: <code>3**********9</code><br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error.<br><br>In a request, multiple item_group_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemGroupIDs: </b> 10 <br><br>
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return Items|null
     * @throws ApiException on non-2xx response
     */
    public function getItems(
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $itemIds = null,
        string $itemGroupIds = null,
        string $xEbayCEnduserctx = null,
    ): ?Items {
        $response = $this->getItemsWithHttpInfo(
            $xEbayCMarketplaceId,
            $itemIds,
            $itemGroupIds,
            $xEbayCEnduserctx,
        );

        return $response['data'] ?? null;
    }

    /**
     * @ignore
     * Operation getItemsWithHttpInfo
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $itemIds A list of item IDs. Item IDs are the eBay RESTful identifier of items. <br><br><b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error. <br><br> In a request, multiple item_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemIDs: </b> 20 <br><br>For more information about item IDs for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param string|null $itemGroupIds A list of item group IDs. Item group IDs are the eBay RESTful identifier of item groups. <br><br><b> RESTful Group Item ID Format: </b><code>############</code><br>For example: <code>3**********9</code><br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error.<br><br>In a request, multiple item_group_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemGroupIDs: </b> 10 <br><br>
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return array
     * @throws ApiException on non-2xx response
     */
    public function getItemsWithHttpInfo(
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $itemIds = null,
        string $itemGroupIds = null,
        string $xEbayCEnduserctx = null,
    ): array {
        $returnType = Items::class;

        $request = $this->getItemsRequest(
            $xEbayCMarketplaceId,
            $itemIds,
            $itemGroupIds,
            $xEbayCEnduserctx,
        );

        return $this->ebayClient->sendRequest($request, $returnType);
    }

    /**
     * @ignore
     * Create request object for operation getItems
     * @param string|null $itemIds A list of item IDs. Item IDs are the eBay RESTful identifier of items. <br><br><b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error. <br><br> In a request, multiple item_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemIDs: </b> 20 <br><br>For more information about item IDs for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param string|null $itemGroupIds A list of item group IDs. Item group IDs are the eBay RESTful identifier of item groups. <br><br><b> RESTful Group Item ID Format: </b><code>############</code><br>For example: <code>3**********9</code><br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error.<br><br>In a request, multiple item_group_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemGroupIDs: </b> 10 <br><br>
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @return Request
     */
    private function getItemsRequest(
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $itemIds = null,
        string $itemGroupIds = null,
        string $xEbayCEnduserctx = null,
    ): Request {
        $resourcePath = '/item/';
        $queryParams = [];
        $headerParams = [];

        if (null !== $itemIds) {
            $queryParams['item_ids'] = $itemIds;
        }

        if (null !== $itemGroupIds) {
            $queryParams['item_group_ids'] = $itemGroupIds;
        }

        $headerParams['X-EBAY-C-ENDUSERCTX'] = $xEbayCEnduserctx;

        $headerParams['X-EBAY-C-MARKETPLACE-ID'] = $xEbayCMarketplaceId->value;

        return $this->ebayRequest->getRequest(
            $resourcePath,
            queryParameters: $queryParams,
            headerParameters: $headerParams
        );
    }

    /**
     * Operation getItemsByItemGroup
     *
     *  <p>This method retrieves the details of the individual items in an item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. </p>  <p>You pass in the item group ID as a URI parameter. You use this method to show the item details of items with multiple aspects, such as color, size, storage capacity, etc.  </p>  <p>This method returns two main containers; <b> items</b> and <b> commonDescriptions</b>. The <b> items</b> container has an array of  containers with the details of each item in the group. The <b> commonDescriptions</b> container has an array of containers for a description and the item ids of all the items that have this exact description. Because items within an item group often have the same description, this decreases the size of the response. </p><h3><b> Request headers</b></h3> This method uses the <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations. For details see, <a href="/api-docs/buy/static/api-browse.html#Headers">Request headers</a> in the Buying Integration Guide.   <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.</p> <span class="tablenote"><b>eBay Partner Network: </b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site. </span>
     * @param string $itemGroupId Identifier of the item group to return.  An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. </p> <p>This ID is returned in the <b> itemGroupHref</b> field of the <a href="/api-docs/buy/browse/resources/item_summary/methods/search">search</a> and <a href="/api-docs/buy/browse/resources/item/methods/getItem">getItem</a> methods. <br><br><b> For Example: </b><code> https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id=3**********6</code>
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return ItemGroup|null
     * @throws ApiException on non-2xx response
     */
    public function getItemsByItemGroup(
        string $itemGroupId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $xEbayCEnduserctx = null,
    ): ?ItemGroup {
        $response = $this->getItemsByItemGroupWithHttpInfo(
            $itemGroupId,
            $xEbayCMarketplaceId,
            $xEbayCEnduserctx,
        );

        return $response['data'] ?? null;
    }

    /**
     * @param string $itemGroupId Identifier of the item group to return.  An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. </p> <p>This ID is returned in the <b> itemGroupHref</b> field of the <a href="/api-docs/buy/browse/resources/item_summary/methods/search">search</a> and <a href="/api-docs/buy/browse/resources/item/methods/getItem">getItem</a> methods. <br><br><b> For Example: </b><code> https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id=3**********6</code>
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @return array
     * @throws ApiException on non-2xx response
     *@ignore
     * Operation getItemsByItemGroupWithHttpInfo
     *
     */
    public function getItemsByItemGroupWithHttpInfo(
        string $itemGroupId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $xEbayCEnduserctx = null,
    ): array {
        $returnType = ItemGroup::class;

        $request = $this->getItemsByItemGroupRequest(
            $itemGroupId,
            $xEbayCMarketplaceId,
            $xEbayCEnduserctx,
        );

        return $this->ebayClient->sendRequest($request, $returnType);
    }

    /**
     * @ignore
     * Create request object for operation getItemsByItemGroup
     * @param string $itemGroupId Identifier of the item group to return.  An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. </p> <p>This ID is returned in the <b> itemGroupHref</b> field of the <a href="/api-docs/buy/browse/resources/item_summary/methods/search">search</a> and <a href="/api-docs/buy/browse/resources/item/methods/getItem">getItem</a> methods. <br><br><b> For Example: </b><code> https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id=3**********6</code>
     * @param string|null $xEbayCEnduserctx This header is required to support revenue sharing for eBay Partner Network and to improve the accuracy of shipping and delivery time estimations.<br>For additional information, refer to <a href="/api-docs/buy/static/api-browse.html#Headers" target="_blank ">Use request headers</a>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class="tablenote"><b>Note:</b> If a marketplace ID value is not provided, the default value of <code>EBAY_US</code> is used.</span><br>See <a href="/api-docs/static/rest-request-components.html#marketpl " target="_blank ">HTTP request headers</a> for the marketplace ID values.
     * @return Request
     */
    private function getItemsByItemGroupRequest(
        string $itemGroupId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
        string $xEbayCEnduserctx = null,
    ): Request {
        $resourcePath = '/item/get_items_by_item_group';
        $queryParams = [];
        $headerParams = [];

        $queryParams['item_group_id'] = Serializer::toQueryValue($itemGroupId);


        $headerParams['X-EBAY-C-ENDUSERCTX'] = $xEbayCEnduserctx;

        $headerParams['X-EBAY-C-MARKETPLACE-ID'] = $xEbayCMarketplaceId->value;

        return $this->ebayRequest->getRequest(
            $resourcePath,
            queryParameters: $queryParams,
            headerParameters: $headerParams
        );
    }

    /**
     * Operation checkCompatibility
     *
     * This method checks if a product is compatible with the specified item. You can use this method to check the compatibility of cars, trucks, and motorcycles with a specific part listed on eBay. <br><br>For example, to check the compatibility of a part, you pass in the item ID of the part as a URI parameter and specify all the attributes used to define a specific car in the <b> compatibilityProperties</b> container. If the call is successful, the response will be <b> COMPATIBLE</b>, <b> NOT_COMPATIBLE</b>, or <b> UNDETERMINED</b>. See <a href="/api-docs/buy/browse/resources/item/methods/checkCompatibility#response.compatibilityStatus">compatibilityStatus</a> for details.   <br><br> <span class="tablenote"><b> Note: </b> The only products supported are cars, trucks, and motorcycles. </span><p>  To find the attributes and values for a specific marketplace, you can use the compatibility methods in the <a href="/api-docs/commerce/taxonomy/resources/methods">Taxonomy API</a>. You can use this data to create menus to help buyers specify the product, such as their car.</p> <p> For more details and a list of the required attributes for the US marketplace that describe motor vehicles, see <a href="/api-docs/buy/static/api-browse.html#Check">Check compatibility</a> in the Buy Integration Guide</a>.</p>   <p>For an example, see the <a href="/api-docs/buy/browse/resources/item/methods/checkCompatibility#h2-samples">Samples</a> section. </p><p><span class="tablenote"><b> Note: </b> This method is supported in Sandbox, but only when using the specific Item ID and compatibility name-value pairs called out in <a href="/api-docs/buy/browse/resources/item/methods/checkCompatibility#s0-1-22-6-7-7-6-SandboxSample-1">Sample 2</a>.</span></p><h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.</p>
     * @param  CompatibilityPayload  $body
     * @param string $itemId The eBay RESTful identifier of an item (such as a part you want to check). This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br><br> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>For more information about item ID for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId The ID of the eBay marketplace you want to use. <b> Note: </b> This value is case sensitive.<br><br>For example: <br>&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br><br> For a list of supported sites see, <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.
     * @return CompatibilityResponse|null
     * @throws ApiException on non-2xx response
     */
    public function checkCompatibility(
        CompatibilityPayload $body,
        string $itemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
    ): ?CompatibilityResponse {
        $response = $this->checkCompatibilityWithHttpInfo(
            $body,
            $itemId,
            $xEbayCMarketplaceId,
        );

        return $response['data'] ?? null;
    }

    /**
     * @ignore
     * Operation checkCompatibilityWithHttpInfo
     * @param  CompatibilityPayload  $body
     * @param string $itemId The eBay RESTful identifier of an item (such as a part you want to check). This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br><br> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>For more information about item ID for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId The ID of the eBay marketplace you want to use. <b> Note: </b> This value is case sensitive.<br><br>For example: <br>&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br><br> For a list of supported sites see, <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.
     * @return array
     * @throws ApiException on non-2xx response
     */
    public function checkCompatibilityWithHttpInfo(
        CompatibilityPayload $body,
        string $itemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
    ): array {
        $returnType = CompatibilityResponse::class;

        $request = $this->checkCompatibilityRequest(
            $body,
            $itemId,
            $xEbayCMarketplaceId,
        );

        return $this->ebayClient->sendRequest($request, $returnType);
    }

    /**
     * @ignore
     * Create request object for operation checkCompatibility
     * @param  CompatibilityPayload  $body
     * @param string $itemId The eBay RESTful identifier of an item (such as a part you want to check). This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br><br> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>For more information about item ID for RESTful APIs, see the <a href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
     * @param MarketplaceIdEnum $xEbayCMarketplaceId The ID of the eBay marketplace you want to use. <b> Note: </b> This value is case sensitive.<br><br>For example: <br>&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br><br> For a list of supported sites see, <a href="/api-docs/buy/browse/overview.html#API">API Restrictions</a>.
     * @return Request
     */
    private function checkCompatibilityRequest(
        CompatibilityPayload $body,
        string $itemId,
        MarketplaceIdEnum $xEbayCMarketplaceId,
    ): Request {
        $resourcePath = '/item/{item_id}/check_compatibility';
        $headerParams = [];
        $resourcePath = str_replace(
            '{' . 'item_id' . '}',
            Serializer::toPathValue($itemId),
            $resourcePath
        );

        $headerParams['X-EBAY-C-MARKETPLACE-ID'] = $xEbayCMarketplaceId->value;

        return $this->ebayRequest->postRequest(
            $resourcePath,
            $body,
            headerParameters: $headerParams
        );
    }
}
