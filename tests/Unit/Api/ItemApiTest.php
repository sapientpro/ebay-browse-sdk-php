<?php

namespace SapientPro\EbayBrowseSDK\Tests\Unit\Api;

use PHPUnit\Framework\TestCase;
use SapientPro\EbayBrowseSDK\Api\ItemApi;
use SapientPro\EbayBrowseSDK\Enums\AvailabilityStatusEnum;
use SapientPro\EbayBrowseSDK\Enums\AvailabilityThresholdEnum;
use SapientPro\EbayBrowseSDK\Enums\CompatibilityStatus;
use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Enums\CurrencyCodeEnum;
use SapientPro\EbayBrowseSDK\Enums\DeliveryOptionsEnum;
use SapientPro\EbayBrowseSDK\Enums\FulfilledThroughEnum;
use SapientPro\EbayBrowseSDK\Enums\ItemGroupTypeEnum;
use SapientPro\EbayBrowseSDK\Enums\MarketplaceIdEnum;
use SapientPro\EbayBrowseSDK\Enums\PaymentMethodBrandEnum;
use SapientPro\EbayBrowseSDK\Enums\PaymentMethodTypeEnum;
use SapientPro\EbayBrowseSDK\Enums\RefundMethodEnum;
use SapientPro\EbayBrowseSDK\Enums\RegionTypeEnum;
use SapientPro\EbayBrowseSDK\Enums\ResponsiblePersonTypeEnum;
use SapientPro\EbayBrowseSDK\Enums\ReturnMethodEnum;
use SapientPro\EbayBrowseSDK\Enums\ReturnShippingCostPayerEnum;
use SapientPro\EbayBrowseSDK\Enums\TimeDurationUnitEnum;
use SapientPro\EbayBrowseSDK\Enums\ValueTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Address;
use SapientPro\EbayBrowseSDK\Models\AttributeNameValue;
use SapientPro\EbayBrowseSDK\Models\CommonDescriptions;
use SapientPro\EbayBrowseSDK\Models\CompanyAddress;
use SapientPro\EbayBrowseSDK\Models\CompatibilityPayload;
use SapientPro\EbayBrowseSDK\Models\CompatibilityResponse;
use SapientPro\EbayBrowseSDK\Models\ConditionDescriptor;
use SapientPro\EbayBrowseSDK\Models\ConditionDescriptorValue;
use SapientPro\EbayBrowseSDK\Models\ConvertedAmount;
use SapientPro\EbayBrowseSDK\Models\CoreItem;
use SapientPro\EbayBrowseSDK\Models\EconomicOperator;
use SapientPro\EbayBrowseSDK\Models\EstimatedAvailability;
use SapientPro\EbayBrowseSDK\Models\Image;
use SapientPro\EbayBrowseSDK\Models\Item;
use SapientPro\EbayBrowseSDK\Models\ItemGroup;
use SapientPro\EbayBrowseSDK\Models\ItemGroupSummary;
use SapientPro\EbayBrowseSDK\Models\ItemReturnTerms;
use SapientPro\EbayBrowseSDK\Models\Items;
use SapientPro\EbayBrowseSDK\Models\PaymentMethod;
use SapientPro\EbayBrowseSDK\Models\PaymentMethodBrand;
use SapientPro\EbayBrowseSDK\Models\ProductSafetyLabelPictogram;
use SapientPro\EbayBrowseSDK\Models\ProductSafetyLabels;
use SapientPro\EbayBrowseSDK\Models\ProductSafetyLabelStatement;
use SapientPro\EbayBrowseSDK\Models\RatingHistogram;
use SapientPro\EbayBrowseSDK\Models\Region;
use SapientPro\EbayBrowseSDK\Models\ResponsiblePerson;
use SapientPro\EbayBrowseSDK\Models\ReviewRating;
use SapientPro\EbayBrowseSDK\Models\SellerDetail;
use SapientPro\EbayBrowseSDK\Models\SellerLegalInfo;
use SapientPro\EbayBrowseSDK\Models\ShippingOption;
use SapientPro\EbayBrowseSDK\Models\ShipToLocation;
use SapientPro\EbayBrowseSDK\Models\ShipToLocations;
use SapientPro\EbayBrowseSDK\Models\ShipToRegion;
use SapientPro\EbayBrowseSDK\Models\Taxes;
use SapientPro\EbayBrowseSDK\Models\TaxJurisdiction;
use SapientPro\EbayBrowseSDK\Models\TimeDuration;
use SapientPro\EbayBrowseSDK\Models\TypedNameValue;
use SapientPro\EbayBrowseSDK\Tests\Unit\Concerns\CreatesApi;
use SapientPro\EbayBrowseSDK\Tests\Unit\Concerns\MocksClient;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class ItemApiTest extends TestCase
{
    use CreatesApi;
    use MocksClient;

    public function testGetItem(): void
    {
        $mockJsonResponse = file_get_contents(dirname(__DIR__) . '/fixtures/getItemResponse.json');

        $expectedResponse = $this->createItemObject();

        $client = $this->prepareClientMock(200, $mockJsonResponse);
        $api = $this->createApi(ItemApi::class, $client);

        $result = $api->getItem('v1|1**********0|0', MarketplaceIdEnum::EBAY_US);

        $this->assertEquals($expectedResponse, $result);
    }

    public function testGetItemByLegacyId(): void
    {
        $mockJsonResponse = file_get_contents(dirname(__DIR__) . '/fixtures/getItemResponse.json');

        $expectedResponse = $this->createItemObject();

        $client = $this->prepareClientMock(200, $mockJsonResponse);
        $api = $this->createApi(ItemApi::class, $client);

        $result = $api->getItemByLegacyId('1**********0', MarketplaceIdEnum::EBAY_US);

        $this->assertEquals($expectedResponse, $result);
    }

    public function testGetItems(): void
    {
        $mockJsonResponse = file_get_contents(dirname(__DIR__) . '/fixtures/getItemsResponse.json');
        $expectedResponse = $this->createItemsObject();

        $client = $this->prepareClientMock(200, $mockJsonResponse);
        $api = $this->createApi(ItemApi::class, $client);

        $result = $api->getItems(MarketplaceIdEnum::EBAY_US);

        $this->assertEquals($expectedResponse, $result);
    }

    public function testGetItemsByItemGroup(): void
    {
        $mockJsonResponse = file_get_contents(dirname(__DIR__) . '/fixtures/getItemsByItemGroupResponse.json');
        $expectedResponse = $this->createItemGroupObject();

        $client = $this->prepareClientMock(200, $mockJsonResponse);
        $api = $this->createApi(ItemApi::class, $client);

        $result = $api->getItemsByItemGroup('1**********9', MarketplaceIdEnum::EBAY_US);

        $this->assertEquals($expectedResponse, $result);
    }

    public function testCheckCompatibility(): void
    {
        /** @var CompatibilityPayload $requestBody */
        $requestBody = CompatibilityPayload::fromArray([
            'compatibilityProperties' => [
                AttributeNameValue::fromArray([
                    'name' => 'Year',
                    'value' => '2016',
                ]),
                AttributeNameValue::fromArray([
                    'name' => 'Make',
                    'value' => 'Honda',
                ]),
                AttributeNameValue::fromArray([
                    'name' => 'Model',
                    'value' => 'Fit',
                ]),
                AttributeNameValue::fromArray([
                    'name' => 'Trim',
                    'value' => 'EX-L Hatchback 4-Door',
                ]),
                AttributeNameValue::fromArray([
                    'name' => 'Engine',
                    'value' => '1.5L 1497CC l4 GAS DOHC Naturally Aspirated',
                ]),
            ]
        ]);

        $mockResponseBody = <<<JSON
{
    "compatibilityStatus": "COMPATIBLE"
}
JSON;

        $expectedResponse = CompatibilityResponse::fromArray([
            'compatibilityStatus' => CompatibilityStatus::COMPATIBLE,
        ]);


        $client = $this->prepareClientMock(200, $mockResponseBody);
        $api = $this->createApi(ItemApi::class, $client);

        $result = $api->checkCompatibility($requestBody, 'v1|1**********0|0', MarketplaceIdEnum::EBAY_US);

        $this->assertEquals($expectedResponse, $result);
    }

    private function createItemObject(): Item
    {
        return Item::fromArray([
            'itemId' => 'v1|1**********0|0',
            'sellerItemRevision' => '1',
            'title' => 'Sample Item',
            'shortDescription' => 'Summary',
            'price' => ConvertedAmount::fromArray([
                'value' => '29.00',
                'currency' => CurrencyCodeEnum::USD,
            ]),
            'categoryPath' => "Home & Garden|Patio, Lawn & Garden|Outdoor Power Equipment|Other Outdoor Power Equipment Accessories",
            'categoryIdPath' => "159907|159912|29518|261019",
            'condition' => 'New',
            'conditionId' => '1000',
            'itemLocation' => Address::fromArray([
                'city' => 'A**********h',
                'stateOrProvince' => 'T**********e',
                'postalCode' => '3****',
                'country' => CountryCodeEnum::US,
            ]),
            'image' => Image::fromArray([
                'imageUrl' => 'https://i.ebayimg.com/images/g/Z**********l/s-l1600.jpg',
            ]),
            'immediatePay' => false,
            'seller' => SellerDetail::fromArray([
                'username' => 'c**********r',
                'userId' => 'user123456',
                'feedbackPercentage' => '98.6',
                'feedbackScore' => 16632,
                'sellerLegalInfo' => SellerLegalInfo::fromArray([
                    'email' => 'string@test.com',
                    'economicOperator' => EconomicOperator::fromArray([
                        'companyName' => 'Test',
                        'email' => 'test@company.com'
                    ])
                ])
            ]),
            'brand' => 'test',
            'mpn' => 'DCA800SSK2C',
            'manufacturer' => CompanyAddress::fromArray([
                'companyName' => 'Test',
                'contactUrl' => 'company-test.org',
                'email' => 'company@test.org'
            ]),
            'estimatedAvailabilities' => [
                EstimatedAvailability::fromArray([
                    'estimatedAvailabilityStatus' => AvailabilityStatusEnum::IN_STOCK,
                    'estimatedAvailableQuantity' => 2,
                    'estimatedRemainingQuantity' => 2,
                    'estimatedSoldQuantity' => 0,
                    'deliveryOptions' => [
                        DeliveryOptionsEnum::SHIP_TO_HOME
                    ]
                ]),
            ],
            'conditionDescriptors' => [
                ConditionDescriptor::fromArray([
                    'name' => 'Descriptor',
                    'values' => [
                        ConditionDescriptorValue::fromArray([
                            'content' => 'New'
                        ])
                    ]
                ])
            ],
            'responsiblePersons' => [
                ResponsiblePerson::fromArray([
                    'companyName' => 'Test',
                    'contactUrl' => 'company-test.org',
                    'email' => 'company@test.org',
                    'types' => [
                        ResponsiblePersonTypeEnum::EU_RESPONSIBLE_PERSON,
                    ],
                ])
            ],
            'productSafetyLabels' => ProductSafetyLabels::fromArray([
                'pictograms' => [
                    ProductSafetyLabelPictogram::fromArray([
                        'pictogramDescription' => 'PDescription',
                        'pictogramId' => '5sw4w'
                    ])
                ],
                'statements' => [
                    ProductSafetyLabelStatement::fromArray([
                        'statementDescription' => 'SDescription',
                        'statementId' => '5sw4w1'
                    ])
                ]
            ]),
            'shippingOptions' => [
                ShippingOption::fromArray([
                    'shippingServiceCode' => 'Economy Shipping',
                    'type' => 'Economy Shipping',
                    'shippingCost' => ConvertedAmount::fromArray([
                        'value' => '950.00',
                        'currency' => CurrencyCodeEnum::USD,
                    ]),
                    'quantityUsedForEstimate' => 1,
                    'minEstimatedDeliveryDate' => '2020-11-06T10:00:00.000Z',
                    'maxEstimatedDeliveryDate' => '2020-11-06T10:00:00.000Z',
                    'additionalShippingCostPerUnit' => ConvertedAmount::fromArray([
                        'value' => '950.00',
                        'currency' => CurrencyCodeEnum::USD,
                    ]),
                    'shippingCostType' => 'FIXED'
                ])
            ],
            'shipToLocations' => ShipToLocations::fromArray([
                'regionIncluded' => [
                    ShipToRegion::fromArray([
                        "regionName" => "United States",
                        "regionType" => RegionTypeEnum::COUNTRY,
                        "regionId" => "US"
                    ])
                ],
                'regionExcluded' => [
                    ShipToRegion::fromArray([
                        "regionName" => "Alaska/Hawaii",
                        "regionType" => RegionTypeEnum::COUNTRY_REGION,
                        "regionId" => "_AH"
                    ]),
                    ShipToRegion::fromArray([
                        "regionName" => "US Protectorates",
                        "regionType" => RegionTypeEnum::COUNTRY_REGION,
                        "regionId" => "_PR"
                    ]),
                ]
            ]),
            'returnTerms' => ItemReturnTerms::fromArray([
                'returnsAccepted' => true,
                'refundMethod' => RefundMethodEnum::MONEY_BACK,
                'returnShippingCostPayer' => ReturnShippingCostPayerEnum::BUYER,
                'returnPeriod' => TimeDuration::fromArray([
                    'unit' => TimeDurationUnitEnum::CALENDAR_DAY,
                    'value' => 14,
                ]),
            ]),
            'taxes' => [
                Taxes::fromArray([
                    'taxJurisdiction' => TaxJurisdiction::fromArray([
                        'region' => Region::fromArray([
                            'regionName' => 'Alabama',
                            'regionType' => RegionTypeEnum::STATE_OR_PROVINCE
                        ]),
                        'taxJurisdictionId' => 'AL'
                    ]),
                    'taxType' => 'STATE_SALES_TAX',
                    'shippingAndHandlingTaxed' => true,
                    'includedInPrice' => false,
                    'ebayCollectAndRemitTax' => true
                ])
            ],
            'localizedAspects' => [
                TypedNameValue::fromArray([
                    'type' => ValueTypeEnum::STRING,
                    'name' => 'Brand',
                    'value' => 'Multiquip'
                ]),
            ],
            'primaryProductReviewRating' => ReviewRating::fromArray([
                'reviewCount' => 0,
                'averageRating' => '0.0',
                'ratingHistograms' => [
                    RatingHistogram::fromArray([
                        'rating' => '5',
                        'count' => 0
                    ])
                ]
            ]),
            'priorityListing' => true,
            'topRatedBuyingExperience' => false,
            'buyingOptions' => [
                'FIXED_PRICE'
            ],
            'itemWebUrl' => 'https://www.ebay.com/itm/Sample-Item/1**********0',
            'description' => 'Detailed description',
            'paymentMethods' => [
                PaymentMethod::fromArray([
                    'paymentMethodType' => PaymentMethodTypeEnum::WALLET,
                    'paymentMethodBrands' => [
                        PaymentMethodBrand::fromArray([
                            'paymentMethodBrandType' => PaymentMethodBrandEnum::PAYPAL
                        ])
                    ]
                ])
            ],
            'enabledForGuestCheckout' => false,
            'eligibleForInlineCheckout' => true,
            'lotSize' => 0,
            'legacyItemId' => '1**********0',
            'adultOnly' => false,
            'categoryId' => '261019'
        ]);
    }

    private function createItemsObject(): Items
    {
        return Items::fromArray([
            'total' => 2,
            'items' => [
                CoreItem::fromArray([
                    'itemId' => 'v1|1**********7|0',
                    'sellerItemRevision' => '5',
                    'price' => ConvertedAmount::fromArray([
                        'value' => '34.75',
                        'currency' => CurrencyCodeEnum::USD
                    ]),
                    'estimatedAvailabilities' => [
                        EstimatedAvailability::fromArray([
                            'availabilityThresholdType' => AvailabilityThresholdEnum::MORE_THAN,
                            'availabilityThreshold' => 10,
                            'estimatedAvailabilityStatus' => AvailabilityStatusEnum::IN_STOCK,
                            'estimatedSoldQuantity' => 695
                        ])
                    ],
                    'priorityListing' => false,
                    'topRatedBuyingExperience' => true,
                    'itemWebUrl' => 'https://www.ebay.com/itm/Mini-Drone-4DRC-V2-Selfie-WIFI-FPV-With-HD-Camera-Foldable-Arm-RC-Quadcopter-US-/1**********7',
                    'enabledForGuestCheckout' => false,
                    'eligibleForInlineCheckout' => false,
                    'shippingOptions' => [
                        ShippingOption::fromArray([
                            'shippingServiceCode' => 'International Priority Shipping',
                            'shippingCarrierCode' => 'PBI',
                            'type' => 'Expedited shipping',
                            'shippingCost' => ConvertedAmount::fromArray([
                                'value' => '21.20',
                                'currency' => CurrencyCodeEnum::USD
                            ]),
                            'importCharges' => ConvertedAmount::fromArray([
                                'value' => '25.31',
                                'currency' => CurrencyCodeEnum::USD
                            ]),
                            'fulfilledThrough' => FulfilledThroughEnum::GLOBAL_SHIPPING,
                            'quantityUsedForEstimate' => 1,
                            'minEstimatedDeliveryDate' => '2022-03-24T10:04:38.000Z',
                            'maxEstimatedDeliveryDate' => '2022-03-31T10:04:38.000Z',
                            'shippingCostType' => 'FIXED'
                        ])
                    ],
                    'legacyItemId' => '1**********7',
                    'itemCreationDate' => '2022-02-28T18:47:21.000Z'
                ]),
                CoreItem::fromArray([
                    'itemId' => 'v1|2**********4|0',
                    'sellerItemRevision' => '106',
                    'price' => ConvertedAmount::fromArray([
                        'value' => '65.49',
                        'currency' => CurrencyCodeEnum::USD
                    ]),
                    'currentBidPrice' => ConvertedAmount::fromArray([
                        'value' => '41.50',
                        'currency' => CurrencyCodeEnum::USD
                    ]),
                    'estimatedAvailabilities' => [
                        EstimatedAvailability::fromArray([
                            'availabilityThresholdType' => AvailabilityThresholdEnum::MORE_THAN,
                            'availabilityThreshold' => 10,
                            'estimatedAvailabilityStatus' => AvailabilityStatusEnum::IN_STOCK,
                            'estimatedSoldQuantity' => 642
                        ])
                    ],
                    'priorityListing' => false,
                    'topRatedBuyingExperience' => true,
                    'bidCount' => 8,
                    'itemWebUrl' => 'https://www.ebay.com/itm/2020-NEW-Rc-Drone-4k-HD-Wide-Angle-Camera-WiFi-fpv-Drone-Dual-Camera-Quadcopter-/2**********4',
                    'minimumPriceToBid' => ConvertedAmount::fromArray([
                        'value' => '42.50',
                        'currency' => CurrencyCodeEnum::USD
                    ]),
                    'uniqueBidderCount' => 2,
                    'reservePriceMet' => true,
                    'enabledForGuestCheckout' => false,
                    'eligibleForInlineCheckout' => true,
                    'shippingOptions' => [
                        ShippingOption::fromArray([
                            'shippingServiceCode' => 'International Priority Shipping',
                            'shippingCarrierCode' => 'PBI',
                            'type' => 'Expedited shipping',
                            'shippingCost' => ConvertedAmount::fromArray([
                                'value' => '21.20',
                                'currency' => CurrencyCodeEnum::USD
                            ]),
                            'importCharges' => ConvertedAmount::fromArray([
                                'value' => '25.31',
                                'currency' => CurrencyCodeEnum::USD
                            ]),
                            'fulfilledThrough' => FulfilledThroughEnum::GLOBAL_SHIPPING,
                            'quantityUsedForEstimate' => 1,
                            'minEstimatedDeliveryDate' => '2022-03-24T10:04:38.000Z',
                            'maxEstimatedDeliveryDate' => '2022-03-31T10:04:38.000Z',
                            'shippingCostType' => 'FIXED'
                        ])
                    ],
                    'legacyItemId' => '2**********4',
                    'itemCreationDate' => '2022-02-28T18:47:21.000Z'
                ])
            ]
        ]);
    }

    private function createItemGroupObject()
    {
        return ItemGroup::fromArray([
            'commonDescriptions' => [
                CommonDescriptions::fromArray([
                    'description' => 'Echo Fox Clothing',
                    'itemIds' => [
                        "v1|1**********9|4**********2",
                        "v1|1**********9|4**********3",
                        "v1|1**********9|4**********5",
                        "v1|1**********9|4**********6"
                    ]
                ])
            ],
            'items' => [
                Item::fromArray([
                    'itemId' => 'v1|1**********9|4**********2',
                    'sellerItemRevision' => '6',
                    'title' => 'American Apparel T-Shirt 2001 Fine Jersey Crew Neck Blank Cotton Tee Shirt',
                    'shortDescription' => 'An American classic! The fine jersey crew neck tee is one of the most popular tee shirts in the world. Known for it\'s unmatched smoothness, and perfect fit. This tee shirt is crafted from high quality combed cotton, and made right in the USA.',
                    'price' => ConvertedAmount::fromArray([
                        'value' => '6.90',
                        'currency' => CurrencyCodeEnum::USD
                    ]),
                    'categoryPath' => 'Clothing, Shoes & Accessories|Men\'s Clothing|Men\'s Shirts|T-Shirts',
                    'categoryIdPath' => '11450|1059|185100|15687',
                    'condition' => 'New without tags',
                    'conditionId' => '1500',
                    'itemLocation' => Address::fromArray([
                        'city' => 'United States',
                        'country' => CountryCodeEnum::US
                    ]),
                    'image' => Image::fromArray([
                        'imageUrl' => 'https://i.ebayimg.com/00/s/N**********=/z/xB0AAOSwBahVei9n/$_57.JPG?set_id=8**********F',
                    ]),
                    'color' => 'Black',
                    'material' => '100% Cotton',
                    'pattern' => 'Solid',
                    'sizeType' => 'Regular',
                    'brand' => 'American Apparel',
                    'itemCreationDate' => '2022-02-28T18:47:21.000Z',
                    'itemEndDate' => '2022-03-05T16:53:41.000Z',
                    'seller' => SellerDetail::fromArray([
                        'username' => 'e***g',
                        'feedbackPercentage' => '98.9',
                        'feedbackScore' => 13307,
                    ]),
                    'estimatedAvailabilities' => [
                        EstimatedAvailability::fromArray([
                            'deliveryOptions' => [
                                DeliveryOptionsEnum::SHIP_TO_HOME
                            ],
                            'availabilityThresholdType' => AvailabilityThresholdEnum::MORE_THAN,
                            'availabilityThreshold' => 10,
                            'estimatedSoldQuantity' => 492,
                            'estimatedAvailabilityStatus' => AvailabilityStatusEnum::IN_STOCK,
                        ])
                    ],
                    'shippingOptions' => [
                        ShippingOption::fromArray([
                            'shippingServiceCode' => 'USPS First Class Package',
                            'trademarkSymbol' => '�',
                            'shippingCarrierCode' => 'USPS',
                            'type' => 'Standard Shipping',
                            'shippingCost' => ConvertedAmount::fromArray([
                                'value' => '3.50',
                                'currency' => CurrencyCodeEnum::USD
                            ]),
                            'quantityUsedForEstimate' => 1,
                            'minEstimatedDeliveryDate' => '2017-06-08T10:00:00.000Z',
                            'maxEstimatedDeliveryDate' => '2017-06-13T10:00:00.000Z',
                            'shipToLocationUsedForEstimate' => ShipToLocation::fromArray([
                                'country' => CountryCodeEnum::US
                            ]),
                            'additionalShippingCostPerUnit' => ConvertedAmount::fromArray([
                                'value' => '1.50',
                                'currency' => CurrencyCodeEnum::USD
                            ]),
                            'shippingCostType' => 'FIXED',
                        ])
                    ],
                    'shipToLocations' => ShipToLocations::fromArray([
                        'regionIncluded' => [
                            ShipToRegion::fromArray([
                                'regionName' => 'Worldwide',
                                'regionType' => RegionTypeEnum::WORLDWIDE,
                                'regionId' => 'WORLDWIDE'
                            ])
                        ],
                        'regionExcluded' => [
                            ShipToRegion::fromArray([
                                'regionName' => 'Africa',
                                'regionType' => RegionTypeEnum::WORLD_REGION,
                                'regionId' => 'AFRICA'
                            ])
                        ]
                    ]),
                    'returnTerms' => ItemReturnTerms::fromArray([
                        'returnsAccepted' => true,
                        'refundMethod' => RefundMethodEnum::MONEY_BACK,
                        'returnMethod' => ReturnMethodEnum::EXCHANGE,
                        'returnPeriod' => TimeDuration::fromArray([
                            'unit' => TimeDurationUnitEnum::CALENDAR_DAY,
                            'value' => 60
                        ]),
                        'returnShippingCostPayer' => ReturnShippingCostPayerEnum::BUYER
                    ]),
                    'localizedAspects' => [
                        TypedNameValue::fromArray([
                            'type' => ValueTypeEnum::STRING,
                            'name' => 'Size (Men\'s)',
                            'value' => 'S'
                        ])
                    ],
                    'priorityListing' => true,
                    'topRatedBuyingExperience' => false,
                    'buyingOptions' => [
                        'FIXED_PRICE'
                    ],
                    'primaryItemGroup' => ItemGroupSummary::fromArray([
                        'itemGroupId' => '1**********9',
                        'itemGroupType' => ItemGroupTypeEnum::SELLER_DEFINED_VARIATIONS,
                        'itemGroupHref' => 'https://api.ebay.com/buy/browse/v1/get_items_by_item_group?item_group_id=1**********9',
                        'itemGroupTitle' => 'American Apparel T-Shirt 2001 Fine Jersey Crew Neck Blank Cotton Tee Shirt',
                        'itemGroupImage' => Image::fromArray([
                            "imageUrl" => "https://i.ebayimg.com/00/s/N**********=/z/ZYkAAOSwstxVJKeL/\$_57.JPG?set_id=8**********F"
                        ]),
                        'itemGroupAdditionalImages' => [
                            Image::fromArray([
                                "imageUrl" => "https://i.ebayimg.com/00/s/N**********=/z/E~AAAOSw~OdVeiy~/\$_57.JPG?set_id=8**********F",
                            ]),
                            Image::fromArray([
                                'imageUrl' => 'https://i.ebayimg.com/00/s/N**********=/z/cn4AAOSwBLlVeiy0/$_57.JPG?set_id=8**********F',
                            ])
                        ],
                    ]),
                    'enabledForGuestCheckout' => true,
                    'eligibleForInlineCheckout' => true,
                    'legacyItemId' => '1**********9',
                    'adultOnly' => false,
                    'categoryId' => '15687',
                ])
            ]
        ]);
    }
}
