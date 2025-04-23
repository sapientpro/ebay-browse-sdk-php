<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used to provide contact information for the manufacturer of the product.
 */
class CompanyAddress implements EbayModelInterface
{
    use FillsModel;

    /** The first line of the product manufacturer's street address. */
    #[Assert\Type('string')]
    public ?string $addressLine1 = null;

    /** The second line of the product manufacturer's street address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'. */
    #[Assert\Type('string')]
    public ?string $addressLine2 = null;

    /** The city of the product manufacturer's street address. */
    #[Assert\Type('string')]
    public ?string $city = null;

    /** The company name of the product manufacturer. */
    #[Assert\Type('string')]
    public ?string $companyName = null;

    /** The contact URL of the product manufacturer. */
    #[Assert\Type('string')]
    public ?string $contactUrl = null;

    /** @var CountryCodeEnum|null The two-letter ISO 3166 standard code for the country of the address. */
    #[Assert\Type(CountryCodeEnum::class)]
    public ?CountryCodeEnum $country = null;

    /** The country name of the product manufacturer's street address. */
    #[Assert\Type('string')]
    public ?string $countryName = null;

    /** The county of the product manufacturer's street address. */
    #[Assert\Type('string')]
    public ?string $county = null;

    /** The product manufacturer's business email address. */
    #[Assert\Type('string')]
    public ?string $email = null;

    /** The product manufacturer's business phone number. */
    #[Assert\Type('string')]
    public ?string $phone = null;

    /** The postal code of the product manufacturer's street address. */
    #[Assert\Type('string')]
    public ?string $postalCode = null;

    /** The state or province of the product manufacturer's street address. */
    #[Assert\Type('string')]
    public ?string $stateOrProvince = null;
}
