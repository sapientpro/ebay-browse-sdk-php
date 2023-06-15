<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum TimeDurationUnitEnum: string
{
    /**
     * Indicates the time duration is based on the number of years.
     */
    case YEAR = 'YEAR';

    /**
     * Indicates the time duration is based on the number of months.
     */
    case MONTH = 'MONTH';

    /**
     * Indicates the time duration is based on the number of days.
     */
    case DAY = 'DAY';

    /**
     * Indicates the time duration is based on the number of hours.
     */
    case HOUR = 'HOUR';

    /**
     * Indicates the time duration is based on the calendar, meaning Sunday through Saturday and does not exclude holidays.
     */
    case CALENDAR_DAY = 'CALENDAR_DAY';

    /**
     * Indicates the time duration is based on the number of business days, meaning 'working days'. So it excludes all holidays for the location and in some locations can include Saturday.
     */
    case BUSINESS_DAY = 'BUSINESS_DAY';

    /**
     * Indicates the time duration is based on the number of minutes.
     */
    case MINUTE = 'MINUTE';

    /**
     * Indicates the time duration is based on the number of seconds.
     */
    case SECOND = 'SECOND';

    /**
     * Indicates the time duration is based on the number of milliseconds.
     */
    case MILLISECOND = 'MILLISECOND';
}
