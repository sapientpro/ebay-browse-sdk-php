<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum RegionTypeEnum: string
{
    /**
     * This enumeration value indicates the region is a domestic region or special location within a country. A seller will generally specify these regions as places they are not willing to ship to within a country.
     * This value is not applicable for a tax jurisdiction.
     * For examples of COUNTRY_REGION IDs and values, see the regionId and/or regionName field descriptions.
     */
    case COUNTRY_REGION = 'COUNTRY_REGION';

    /**
     * This enumeration value indicates the region is a state or province within a country, such as California or New York in the US, or Ontario or Alberta in Canada.
     * For examples of STATE_OR_PROVINCE IDs and values, see the regionId and/or regionName field descriptions.
     */
    case STATE_OR_PROVINCE = 'STATE_OR_PROVINCE';

    /**
     * This enumeration value indicates the region is a country. The two-letter code for the country, as defined in the ISO 3166 standard, will be returned in the regionId field, and in the regionName field, the name of the country will be a localized text string.
     */
    case COUNTRY = 'COUNTRY';

    /**
     * This enumeration value indicates the region is a continent or a large geographical region.
     * This value is not applicable for a tax jurisdiction.
     * For examples of WORLD_REGION IDs and values, see the regionId and/or regionName field descriptions.
     */
    case WORLD_REGION = 'WORLD_REGION';

    /**
     * Indicates the region is the entire world. This value is only applicable for included shipping regions, and not excluded shipping regions. If a seller ships to many global locations, but does have a few regions and/or countries that are exceptions, that seller may specify 'WORLDWIDE' as the included region, and will specify the exceptions through the excluded regions list.
     * In the regionName field, 'Worldwide' will be localized, and in the regionId field, the value will be WORLDWIDE.
     * This value is not applicable for a tax jurisdiction.
     */
    case WORLDWIDE = 'WORLDWIDE';
}
