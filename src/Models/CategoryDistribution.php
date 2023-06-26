<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The container that defines the fields for the category refinements. This container is returned when <b> fieldgroups</b> is set to <code>CATEGORY_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class CategoryDistribution implements EbayModelInterface
{
    use FillsModel;

    /** The identifier of the category. */
    #[Assert\Type('string')]
    public string $categoryId;

    /** The name of the category, such as Baby & Toddler Clothing. */
    #[Assert\Type('string')]
    public string $categoryName;

    /** The number of items in this category. */
    #[Assert\Type('int')]
    public int $matchCount;

    /** The HATEOAS reference of this category. */
    #[Assert\Type('string')]
    public string $refinementHref;
}
