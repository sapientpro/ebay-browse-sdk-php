<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that provides required Economic Operator information about the manufacturer and/or supplier of the item.
 */
class EconomicOperator implements EbayModelInterface
{
    use FillsModel;

    /** The company name of the registered Economic Operator. */
    #[Assert\Type('string')]
    public ?string $companyName = null;

    /** The first line of the registered Economic Operator's street address. */
    #[Assert\Type('string')]
    public ?string $addressLine1 = null;

    /** The second line, if any, of the registered Economic Operator's street address. */
    #[Assert\Type('string')]
    public ?string $addressLine2 = null;

    /** The city of the registered Economic Operator's street address. */
    #[Assert\Type('string')]
    public ?string $city = null;

    /** The state or province of the registered Economic Operator's street address. */
    #[Assert\Type('string')]
    public ?string $stateOrProvince = null;

    /** The postal code of the registered Economic Operator's street address. */
    #[Assert\Type('string')]
    public ?string $postalCode = null;

    /** The two-letter ISO 3166 standard abbreviation of the country of the registered Economic Operator's address. */
    #[Assert\Type('string')]
    public ?string $country = null;

    /** The registered Economic Operator's business phone number. */
    #[Assert\Type('string')]
    public ?string $phone = null;

    /** The registered Economic Operator's business email address. */
    #[Assert\Type('string')]
    public ?string $email = null;
}
