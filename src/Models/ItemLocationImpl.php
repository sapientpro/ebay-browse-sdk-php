<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for the location of an item, such as information typically used for an address, including postal code, county, state/province, street address, city, and country (2-digit ISO code).
 */
class ItemLocationImpl implements EbayModelInterface
{
    use FillsModel;

    /** The first line of the street address. */
    public ?string $addressLine1;

    /** The second line of the street address. This field may contain such values as an apartment or suite number. */
    public ?string $addressLine2;

    /** The city in which the item is located. <br><br><b>Restriction:</b> This field is populated in the <b> search</b> method response <i> only</i> when <b> fieldgroups</b> = <code>EXTENDED</code>. */
    public ?string $city;

    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html ">ISO 3166</a> standard code that indicates the country in which the item is located.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @var CountryCodeEnum
     */
    public CountryCodeEnum $country;

    /** The county in which the item is located. */
    public ?string $county;

    /** The postal code (or zip code in US) where the item is located. Sellers set a postal code (or zip code in US) for items when they are listed. The postal code is used for calculating proximity searches. It is anonymized when returned in <b>itemLocation.postalCode</b> via the API. */
    public ?string $postalCode;

    /** The state or province in which the item is located. */
    public ?string $stateOrProvince;
}
