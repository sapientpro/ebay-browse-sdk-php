<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The container that defines the fields for the conditions refinements. This container is returned when <b> fieldgroups</b> is set to <code>ASPECT_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class AspectValueDistribution implements EbayModelInterface
{
    use FillsModel;

    /** The value of an aspect. For example, Red is a value for the aspect Color. */
    #[Assert\Type('string')]
    public string $localizedAspectValue;

    /** The number of items with this aspect. */
    #[Assert\Type('int')]
    public int $matchCount;

    /** A HATEOAS reference for this aspect. */
    #[Assert\Type('string')]
    public string $refinementHref;
}
