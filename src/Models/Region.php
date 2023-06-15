<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\RegionTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * This type is used to provide region details for a tax jurisdiction.
 */
class Region implements EbayModelInterface
{
    use FillsModel;

    /** A localized text string that indicates the name of the region. Taxes are generally charged at the state/province level or at the country level in the case of VAT tax. */
    public ?string $regionName;

    /**
     * An enumeration value that indicates the type of region for the tax jurisdiction. <br><br><b> Valid Values: </b> <ul><li><b> STATE_OR_PROVINCE </b> - Indicates the region is a state or province within a country, such as California or New York in the US, or Ontario or Alberta in Canada.</li><li><b> COUNTRY </b> - Indicates the region is a single country.</li></ul>  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:RegionTypeEnum'>eBay API documentation</a>
     * @var RegionTypeEnum|null
     */
    public ?RegionTypeEnum $regionType;
}
