<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for an address.
 */
class Address implements EbayModelInterface
{
    use FillsModel;

    /** The first line of the street address. <b> Note: </b> This is conditionally returned in the <b> itemLocation</b> field. */
    #[Assert\Type('string')]
    public ?string $addressLine1 = null;

    /** The second line of the street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'. */
    #[Assert\Type('string')]
    public ?string $addressLine2 = null;

    /** The city of the address. */
    #[Assert\Type('string')]
    public string $city;

    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166</a> standard of the country of the address. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @var CountryCodeEnum
     */
    #[Assert\Type(CountryCodeEnum::class)]
    public CountryCodeEnum $country;

    /** The county of the address. */
    #[Assert\Type('string')]
    public ?string $county = null;

    /** The postal code (or zip code in US) code of the address. Sellers set a postal code (or zip code in US) for items when they are listed. The postal code is used for calculating proximity searches. It is anonymized when returned in <b>itemLocation.postalCode</b> via the API. */
    #[Assert\Type('string')]
    public ?string $postalCode = null;

    /** The state or province of the address.  <b> Note: </b> This is conditionally returned in the <b> itemLocation</b> field. */
    #[Assert\Type('string')]
    public ?string $stateOrProvince = null;
}
