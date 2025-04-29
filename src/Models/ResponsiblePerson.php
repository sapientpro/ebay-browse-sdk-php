<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Enums\ResponsiblePersonTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type provides information, such as name and contact details,
 * for an EU-based Responsible Person or entity, associated with the product.
 */
class ResponsiblePerson implements EbayModelInterface
{
    use FillsModel;

    /** The first line of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $addressLine1 = null;

    /** The second line of the Responsible Person's address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'. */
    #[Assert\Type('string')]
    public ?string $addressLine2 = null;

    /** The city of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $city = null;

    /** The name of the Responsible Person or entity. */
    #[Assert\Type('string')]
    public ?string $companyName = null;

    /** The contact URL of the Responsible Person or entity. */
    #[Assert\Type('string')]
    public ?string $contactUrl = null;

    /** @var CountryCodeEnum|null The two-letter ISO 3166 standard of the country of the address. */
    #[Assert\Type(CountryCodeEnum::class)]
    public ?CountryCodeEnum $country = null;

    /** The country name of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $countryName = null;

    /** The county of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $county = null;

    /** The email of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $email = null;

    /** The phone number of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $phone = null;

    /** The postal code of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $postalCode = null;

    /** The state or province of the Responsible Person's street address. */
    #[Assert\Type('string')]
    public ?string $stateOrProvince = null;

    /** @var ResponsiblePersonTypeEnum[]|null The type(s) associated with the Responsible Person or entity. */
    #[Assert\Type('array')]
    public ?array $types = null;
}
