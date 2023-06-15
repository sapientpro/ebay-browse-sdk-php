<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * Type that defines the fields for the seller's address.
 */
class LegalAddress implements EbayModelInterface
{
    use FillsModel;

    /** The first line of the street address. */
    public ?string $addressLine1;

    /** The second line of the street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'. */
    public ?string $addressLine2;

    /** The city of the address. */
    public string $city;

    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166</a> standard of the country of the address. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @var CountryCodeEnum|null
     */
    public ?CountryCodeEnum $country;

    /** The name of the country of the address. */
    public ?string $countryName;

    /** The name of the county of the address. */
    public ?string $county;

    /** The postal code of the address. */
    public ?string $postalCode;

    /** The state or province of the address. */
    public string $stateOrProvince;
}
