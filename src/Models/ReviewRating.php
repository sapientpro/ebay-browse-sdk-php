<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the rating of a product review.
 */
class ReviewRating implements EbayModelInterface
{
    use FillsModel;

    /** The average rating given to a product based on customer reviews. */
    #[Assert\Type('string')]
    public ?string $averageRating = null;

    /**
     * An array of containers for the product rating histograms that shows the review counts and the product rating.
     * @var RatingHistogram[]|null
     */
    #[Assert\Type('array')]
    public ?array $ratingHistograms = null;

    /** The total number of reviews for the item. */
    #[Assert\Type('int')]
    public ?int $reviewCount = null;
}
