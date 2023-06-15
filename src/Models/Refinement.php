<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

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
    public ?array $aspectDistributions;

    /**
     * An array of containers for the all the buying option refinements.
     * @var BuyingOptionDistribution[]|null
     */
    public ?array $buyingOptionDistributions;

    /**
     * An array of containers for the all the category refinements.
     * @var CategoryDistribution[]|null
     */
    public ?array $categoryDistributions;

    /**
     * An array of containers for the all the condition refinements.
     * @var ConditionDistribution[]|null
     */
    public ?array $conditionDistributions;

    /** The identifier of the category that most of the items are part of. */
    public string $dominantCategoryId;
}
