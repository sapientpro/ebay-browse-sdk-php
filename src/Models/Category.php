<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used by the <b>categories</b> container in the response of the <b>search</b>  method, and contains the name and ID of the item category.
 */
class Category implements EbayModelInterface
{
    use FillsModel;

    /** The unique identifier of the category. */
    #[Assert\Type('string')]
    public string $categoryId;

    /** The name of the category. */
    #[Assert\Type('string')]
    public string $categoryName;
}
