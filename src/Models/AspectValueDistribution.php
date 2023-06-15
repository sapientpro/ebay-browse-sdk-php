<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The container that defines the fields for the conditions refinements. This container is returned when <b> fieldgroups</b> is set to <code>ASPECT_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class AspectValueDistribution implements EbayModelInterface
{
    use FillsModel;

    /** The value of an aspect. For example, Red is a value for the aspect Color. */
    public string $localizedAspectValue;

    /** The number of items with this aspect. */
    public int $matchCount;

    /** A HATEOAS reference for this aspect. */
    public string $refinementHref;
}
