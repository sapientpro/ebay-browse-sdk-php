<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for basic and detailed information about the seller of the item returned by the <b> item</b> resource.
 */
class SellerDetail implements EbayModelInterface
{
    use FillsModel;

    /** The percentage of the total positive feedback. */
    public string $feedbackPercentage;

    /** The feedback score of the seller. This value is based on the ratings from eBay members that bought items from this seller. */
    public int $feedbackScore;

    /** This indicates if the seller is a business or an individual. This is determined when the seller registers with eBay. If they register for a business account, this value will be BUSINESS. If they register for a private account, this value will be INDIVIDUAL. This designation is required by the tax laws in the following countries:  <br><br> This field is returned only on the following sites. <br><br>EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL <br><br><b> Valid Values:</b> BUSINESS or INDIVIDUAL <br><br>Code so that your app gracefully handles any future changes to this list. */
    public ?string $sellerAccountType;

    /**
     * The container with the seller's contact info and fields that are required by law.
     * @var SellerLegalInfo|null
     */
    public ?SellerLegalInfo $sellerLegalInfo;

    /** The user name created by the seller for use on eBay. */
    public string $username;
}