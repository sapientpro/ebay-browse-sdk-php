<?php

namespace SapientPro\EbayBrowseSDK\Tests\Unit\Api;

use PHPUnit\Framework\TestCase;
use SapientPro\EbayBrowseSDK\Api\ItemSummaryApi;
use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Enums\CurrencyCodeEnum;
use SapientPro\EbayBrowseSDK\Enums\MarketplaceIdEnum;
use SapientPro\EbayBrowseSDK\Enums\PriceTreatmentEnum;
use SapientPro\EbayBrowseSDK\Models\Category;
use SapientPro\EbayBrowseSDK\Models\ConvertedAmount;
use SapientPro\EbayBrowseSDK\Models\Image;
use SapientPro\EbayBrowseSDK\Models\ItemLocationImpl;
use SapientPro\EbayBrowseSDK\Models\ItemSummary;
use SapientPro\EbayBrowseSDK\Models\MarketingPrice;
use SapientPro\EbayBrowseSDK\Models\SearchByImageRequest;
use SapientPro\EbayBrowseSDK\Models\SearchPagedCollection;
use SapientPro\EbayBrowseSDK\Models\Seller;
use SapientPro\EbayBrowseSDK\Models\ShippingOptionSummary;
use SapientPro\EbayBrowseSDK\Tests\Unit\Concerns\CreatesApi;
use SapientPro\EbayBrowseSDK\Tests\Unit\Concerns\MocksClient;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class ItemSummaryApiTest extends TestCase
{
    use CreatesApi;
    use MocksClient;

    public function testSearch(): void
    {
        $mockResponseJson = file_get_contents(dirname(__DIR__) . '/fixtures/searchResponse.json');
        $expectedResponse = $this->createSearchPagedCollectionObject();

        $client = $this->prepareClientMock(200, $mockResponseJson);
        /** @var ItemSummaryApi $api */
        $api = $this->createApi(ItemSummaryApi::class, $client);

        $response = $api->search(xEbayCMarketplaceId: MarketplaceIdEnum::EBAY_US, limit: 1, q: 'drone');

        $this->assertEquals($expectedResponse, $response);
    }

    public function testSearchByImage(): void
    {
        $mockResponseJson = file_get_contents(dirname(__DIR__) . '/fixtures/searchResponse.json');
        $expectedResponse = $this->createSearchPagedCollectionObject();

        /** @var SearchByImageRequest $requestBody */
        $requestBody = SearchByImageRequest::fromArray([
            'image' => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAARnQU1BAACx"
        ]);

        $client = $this->prepareClientMock(200, $mockResponseJson);
        /** @var ItemSummaryApi $api */
        $api = $this->createApi(ItemSummaryApi::class, $client);

        $response = $api->searchByImage(body: $requestBody, xEbayCMarketplaceId: MarketplaceIdEnum::EBAY_US, limit: 1);

        $this->assertEquals($expectedResponse, $response);
    }

    private function createSearchPagedCollectionObject()
    {
        return SearchPagedCollection::fromArray([
            'href' => 'https://api.ebay.com/buy/browse/v1/item_summary/search?q=drone&limit=1&offset=0',
            'total' => 260202,
            'next' => 'https://api.ebay.com/buy/browse/v1/item_summary/search?q=drone&limit=1&offset=1',
            'limit' => 1,
            'offset' => 0,
            'itemSummaries' => [
                ItemSummary::fromArray([
                    'itemId' => 'v1|1**********1|0',
                    'title' => 'Syma X5SW-V3 Wifi FPV RC Drone Quadcopter 2.4Ghz 6-Axis Gyro with Headless Mode',
                    'leafCategoryIds' => [
                        "179697",
                        "182186"
                    ],
                    'categories' => [
                        Category::fromArray([
                            'categoryId' => '179697',
                            'categoryName' => 'Camera Drones',
                        ]),
                        Category::fromArray([
                            'categoryId' => '182186',
                            'categoryName' => 'Other RC Model Vehicles & Kits',
                        ]),
                        Category::fromArray([
                            'categoryId' => '2562',
                            'categoryName' => 'Radio Control & Control Line',
                        ])
                    ],
                    'image' => Image::fromArray([
                        'imageUrl' => 'https://i.ebayimg.com/thumbs/images/g/n**************a/s-***5.jpg'
                    ]),
                    'price' => ConvertedAmount::fromArray([
                        'value' => '59.99',
                        'currency' => CurrencyCodeEnum::USD
                    ]),
                    'itemHref' => 'https://api.ebay.com/buy/browse/v1/item/v1******************0',
                    'seller' => Seller::fromArray([
                        'username' => 'm********e',
                        'feedbackPercentage' => '98.6',
                        'feedbackScore' => 130000,
                    ]),
                    'marketingPrice' => MarketingPrice::fromArray([
                        'originalPrice' => ConvertedAmount::fromArray([
                            'value' => '74.99',
                            'currency' => CurrencyCodeEnum::USD
                        ]),
                        'discountPercentage' => '20',
                        'discountAmount' => ConvertedAmount::fromArray([
                            'value' => '15.00',
                            'currency' => CurrencyCodeEnum::USD
                        ]),
                        'priceTreatment' => PriceTreatmentEnum::LIST_PRICE
                    ]),
                    'condition' => 'New',
                    'conditionId' => '1000',
                    'thumbnailImages' => [
                        Image::fromArray([
                            'imageUrl' => 'https://i.ebayimg.com/images/g/n**************a/s-l***0.jpg'
                        ])
                    ],
                    'shippingOptions' => [
                        ShippingOptionSummary::fromArray([
                            'shippingCostType' => 'FIXED',
                            'shippingCost' => ConvertedAmount::fromArray([
                                'value' => '0.00',
                                'currency' => CurrencyCodeEnum::USD
                            ]),
                            'minEstimatedDeliveryDate' => '2022-11-19T08:00:00.000Z',
                            'maxEstimatedDeliveryDate' => '2022-11-21T08:00:00.000Z',
                            'guaranteedDelivery' => true,
                        ])
                    ],
                    'buyingOptions' => [
                        "FIXED_PRICE",
                        "BEST_OFFER"
                    ],
                    'itemAffiliateWebUrl' => 'https://www.ebay.com/itm/1**********1?hash=i************d*9',
                    'itemWebUrl' => 'https://www.ebay.com/itm/1**********1?hash=i************d*p',
                    'itemOriginDate' => '2025-04-23T11:32:02Z',
                    'itemLocation' => ItemLocationImpl::fromArray([
                        'postalCode' => '0****',
                        'country' => CountryCodeEnum::US
                    ]),
                    'additionalImages' => [
                        Image::fromArray([
                            'imageUrl' => 'https://origin-galleryplus.ebayimg.com/ws/web/1**********1_2_0_1/225x225.jpg'
                        ]),
                        Image::fromArray([
                            'imageUrl' => 'https://origin-galleryplus.ebayimg.com/ws/web/1**********1_3_0_1/225x225.jpg'
                        ])
                    ],
                    'adultOnly' => false,
                    'legacyItemId' => '1**********1',
                    'availableCoupons' => false,
                    'itemCreationDate' => '2022-12-25T07:14:44.000Z',
                    'topRatedBuyingExperience' => true,
                    'priorityListing' => true,
                    'listingMarketplaceId' => MarketplaceIdEnum::EBAY_US
                ])
            ]
        ]);
    }
}
