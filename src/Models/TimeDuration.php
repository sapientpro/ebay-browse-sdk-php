<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\TimeDurationUnitEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for a period of time in the time-measurement units supplied.
 */
class TimeDuration implements EbayModelInterface
{
    use FillsModel;

    /**
     * An enumeration value that indicates the units (such as hours) of the time span. The enumeration value in this field defines the period of time being used to measure the duration. <br><br><b> Valid Values: </b> YEAR, MONTH, DAY, HOUR, CALENDAR_DAY, BUSINESS_DAY, MINUTE, SECOND, or MILLISECOND <br><br>Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:TimeDurationUnitEnum'>eBay API documentation</a>
     * @var TimeDurationUnitEnum|null
     */
    #[Assert\Type(TimeDurationUnitEnum::class)]
    public ?TimeDurationUnitEnum $unit = null;

    /** Retrieves the duration of the time span (no units).The value in this field indicates the number of years, months, days, hours, or minutes in the defined period. */
    #[Assert\Type('int')]
    public ?int $value = null;
}
