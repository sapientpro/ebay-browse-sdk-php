<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields for the rating of a product review.
 */
class ReviewRating implements EbayModelInterface
{
    use FillsModel;

    /** The average rating given to a product based on customer reviews. */
    public ?string $averageRating;

    /**
     * An array of containers for the product rating histograms that shows the review counts and the product rating.
     * @var RatingHistogram[]|null
     */
    public ?array $ratingHistograms;

    /** The total number of reviews for the item. */
    public ?int $reviewCount;
}
