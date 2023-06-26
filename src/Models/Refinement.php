<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type defines the fields for the various refinements of an item. You can use the information in this container to create histograms, which help shoppers choose exactly what they want.
 */
class Refinement implements EbayModelInterface
{
    use FillsModel;

    /**
     * An array of containers for the all the aspect refinements.
     * @var AspectDistribution[]|null
     */
    #[Assert\Type('array')]
    public ?array $aspectDistributions = null;

    /**
     * An array of containers for the all the buying option refinements.
     * @var BuyingOptionDistribution[]|null
     */
    #[Assert\Type('array')]
    public ?array $buyingOptionDistributions = null;

    /**
     * An array of containers for the all the category refinements.
     * @var CategoryDistribution[]|null
     */
    #[Assert\Type('array')]
    public ?array $categoryDistributions = null;

    /**
     * An array of containers for the all the condition refinements.
     * @var ConditionDistribution[]|null
     */
    #[Assert\Type('array')]
    public ?array $conditionDistributions = null;

    /** The identifier of the category that most of the items are part of. */
    #[Assert\Type('string')]
    public string $dominantCategoryId;
}
