<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum ValueTypeEnum: string
{
    /**
     * Indicates the value returned is a string.
     */
    case STRING = 'STRING';

    /**
     * Indicates the value returned is an array of strings.
     */
    case STRING_ARRAY = 'STRING_ARRAY';
}
