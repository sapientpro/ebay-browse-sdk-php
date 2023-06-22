<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CurrencyCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

class Amount implements EbayModelInterface
{
    use FillsModel;

    /**
     * The list of valid currencies. Each <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> currency code includes the currency name followed by the numeric value.<br><br>For example, the Canadian Dollar code (CAD) would take the following form: <i>Canadian Dollar, 124</i>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @var CurrencyCodeEnum
     */
    #[Assert\Type(CurrencyCodeEnum::class)]
    public CurrencyCodeEnum $currency;

    /** The value of the discounted amount. */
    #[Assert\Type('string')]
    public string $value;
}
