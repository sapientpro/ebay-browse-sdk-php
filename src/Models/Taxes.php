<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the tax fields.
 */
class Taxes implements EbayModelInterface
{
    use FillsModel;

    /** This field is only returned if <code>true</code>, and indicates that eBay will collect tax (sales tax, Goods and Services tax, or VAT) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence. */
    #[Assert\Type('bool')]
    public ?bool $ebayCollectAndRemitTax = null;

    /** This indicates if tax was applied for the cost of the item. */
    #[Assert\Type('bool')]
    public ?bool $includedInPrice = null;

    /** This indicates if tax is applied for the shipping cost. */
    #[Assert\Type('bool')]
    public ?bool $shippingAndHandlingTaxed = null;

    /**
     * The container that returns the tax jurisdiction.
     * @var TaxJurisdiction|null
     */
    #[Assert\Type(TaxJurisdiction::class)]
    public ?TaxJurisdiction $taxJurisdiction = null;

    /** The percentage of tax. */
    #[Assert\Type('string')]
    public ?string $taxPercentage = null;

    /** This field indicates the type of tax that may be collected for the item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:TaxType'>eBay API documentation</a> */
    #[Assert\Type('string')]
    public ?string $taxType = null;
}
