<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for the contact information for a seller.
 */
class SellerLegalInfo implements EbayModelInterface
{
    use FillsModel;

    /** The seller's business email address. */
    public ?string $email;

    /** The seller's business fax number. */
    public ?string $fax;

    /** This is a free-form string created by the seller. This is information often found on business cards, such as address. This is information used by some countries. */
    public ?string $imprint;

    /** The seller's first name. */
    public ?string $legalContactFirstName;

    /** The seller's last name. */
    public ?string $legalContactLastName;

    /** The name of the seller's business. */
    public ?string $name;

    /** The seller's business phone number. */
    public ?string $phone;

    /** The seller's registration number. This is information used by some countries. */
    public ?string $registrationNumber;

    /**
     * The container that returns the seller's address to be used to contact them.
     * @var LegalAddress|null
     */
    public ?LegalAddress $sellerProvidedLegalAddress;

    /** This is a free-form string created by the seller. This is the seller's terms or condition, which is in addition to the seller's return policies. */
    public ?string $termsOfService;

    /**
     * An array of the seller's VAT (value added tax) IDs and the issuing country. VAT is a tax added by some European countries.
     * @var VatDetail[]|null
     */
    public ?array $vatDetails;

    /** The Waste Electrical and Electronic Equipment (WEEE) registration number required for any seller to place electrical and electronic equipment on the market in Germany. This manufacturer number is assigned to the first distributors of electrical and electronic equipment and comprises a country code and an 8-digit sequence of digits (e.g. “WEEE Reg. No. DE 12345678”). Occurrence: Conditional */
    public ?string $weeeNumber;
}
