<?php

namespace SapientPro\EbayBrowseSDK\Enums;

/**
 * This enumeration type is used to indicate the type of EU Responsible Person associated with a listing.
 */
enum ResponsiblePersonTypeEnum: string
{
    /** This enum value indicates the Responsible person is an EU Responsible Person. An EU Responsible Person is crucial for ensuring that products comply with all relevant regulations and safety standards to protect human health. */
    case EU_RESPONSIBLE_PERSON = 'EU_RESPONSIBLE_PERSON';
}
