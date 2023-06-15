<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum AddonServiceSelectionEnum: string
{
    /**
     * This value indicates that the add-on service may be selected as an option.
     */
    case OPTIONAL = 'OPTIONAL';

    /**
     *
    This value indicates that the add-on service applies automatically and is not a selectable option.
     */
    case REQUIRED = 'REQUIRED';
}
