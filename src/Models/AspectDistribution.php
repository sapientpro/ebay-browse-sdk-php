<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that define the fields for the aspect information. Aspects are the variations of an item, such as color, size, etc.
 */
class AspectDistribution implements EbayModelInterface
{
    use FillsModel;

    /**
     * An array of containers for the various values of the aspect and the match count and a HATEOAS reference (<b> refinementHref</b>) for this aspect.
     * @var AspectValueDistribution[]|null
     */
    #[Assert\Type('array')]
    public ?array $aspectValueDistributions;

    /** The name of an aspect, such as Brand, Color, etc. */
    #[Assert\Type('string')]
    public ?string $localizedAspectName;
}
