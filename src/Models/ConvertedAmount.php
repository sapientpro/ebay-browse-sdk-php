<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\CurrencyCodeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
 */
class ConvertedAmount implements EbayModelInterface
{
    use FillsModel;

    /**
     * The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> convertedFromValue</b> field. This value is required or returned only if currency conversion/localization is required, and represents the pre-conversion currency. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @var CurrencyCodeEnum|null
     */
    public ?CurrencyCodeEnum $convertedFromCurrency;

    /** The monetary amount before any conversion is performed, in the currency specified by the <b> convertedFromCurrency</b> field. This value is required or returned only if currency conversion/localization is required. The <b> value</b> field contains the converted amount of this value, in the currency specified by the <b> currency</b> field. */
    public ?string $convertedFromValue;

    /**
     * The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> value</b> field. If currency conversion/localization is required, this is the post-conversion currency of the amount in the <b> value</b> field.   <br><br><b> Default:</b> The currency of the authenticated user's country. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @var CurrencyCodeEnum|null
     */
    public ?CurrencyCodeEnum $currency;

    /** The monetary amount, in the currency specified by the <b> currency</b> field. If currency conversion/localization is required, this value is the converted amount, and the <b> convertedFromValue</b> field contains the amount in the original currency. */
    public ?string $value;
}
