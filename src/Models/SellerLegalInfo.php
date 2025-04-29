<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the contact information for a seller.
 */
class SellerLegalInfo implements EbayModelInterface
{
    use FillsModel;

    /** The seller's business email address. */
    #[Assert\Type('string')]
    public ?string $email = null;

    /** The seller's business fax number. */
    #[Assert\Type('string')]
    public ?string $fax = null;

    /** This is a free-form string created by the seller. This is information often found on business cards, such as address. This is information used by some countries. */
    #[Assert\Type('string')]
    public ?string $imprint = null;

    /** The seller's first name. */
    #[Assert\Type('string')]
    public ?string $legalContactFirstName = null;

    /** The seller's last name. */
    #[Assert\Type('string')]
    public ?string $legalContactLastName = null;

    /** The name of the seller's business. */
    #[Assert\Type('string')]
    public ?string $name = null;

    /** The seller's business phone number. */
    #[Assert\Type('string')]
    public ?string $phone = null;

    /** The seller's registration number. This is information used by some countries. */
    #[Assert\Type('string')]
    public ?string $registrationNumber = null;

    /**
     * The container that returns the seller's address to be used to contact them.
     * @var LegalAddress|null
     */
    #[Assert\Type(LegalAddress::class)]
    public ?LegalAddress $sellerProvidedLegalAddress = null;

    /** This is a free-form string created by the seller. This is the seller's terms or condition, which is in addition to the seller's return policies. */
    #[Assert\Type('string')]
    public ?string $termsOfService = null;

    /**
     * An array of the seller's VAT (value added tax) IDs and the issuing country. VAT is a tax added by some European countries.
     * @var VatDetail[]|null
     */
    #[Assert\Type('array')]
    public ?array $vatDetails = null;

    /**
     * @var EconomicOperator|null
     * Provides required information about the manufacturer and/or supplier of the item.
     */
    #[Assert\Type(EconomicOperator::class)]
    public ?EconomicOperator $economicOperator = null;

    /** The Waste Electrical and Electronic Equipment (WEEE) registration number required for any seller to place electrical and electronic equipment on the market in Germany. This manufacturer number is assigned to the first distributors of electrical and electronic equipment and comprises a country code and an 8-digit sequence of digits (e.g. “WEEE Reg. No. DE 12345678”). Occurrence: Conditional */
    #[Assert\Type('string')]
    public ?string $weeeNumber = null;
}
