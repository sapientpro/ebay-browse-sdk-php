<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Type that defines the fields for the seller's address.
 */
class LegalAddress implements EbayModelInterface
{
    use FillsModel;

    /** The first line of the street address. */
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
     * @var CountryCodeEnum|null
     */
    #[Assert\Type(CountryCodeEnum::class)]
    public ?CountryCodeEnum $country = null;

    /** The name of the country of the address. */
    #[Assert\Type('string')]
    public ?string $countryName = null;

    /** The name of the county of the address. */
    #[Assert\Type('string')]
    public ?string $county = null;

    /** The postal code of the address. */
    #[Assert\Type('string')]
    public ?string $postalCode = null;

    /** The state or province of the address. */
    #[Assert\Type('string')]
    public string $stateOrProvince;
}
