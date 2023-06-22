<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CountryCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type the defines the fields for the VAT (value add tax) information.
 */
class VatDetail implements EbayModelInterface
{
    use FillsModel;

    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " target="_blank">ISO 3166</a> standard of the country issuing the seller's VAT (value added tax) ID. VAT is a tax added by some European countries. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @var CountryCodeEnum|null
     */
    #[Assert\Type(CountryCodeEnum::class)]
    public ?CountryCodeEnum $issuingCountry;

    /** The seller's VAT (value added tax) ID. VAT is a tax added by some European countries. */
    #[Assert\Type('string')]
    public ?string $vatId;
}
