<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Container for a list of items.
 */
class Items implements EbayModelInterface
{
    use FillsModel;

    /**
     * An arraylist of all the items.
     * @var CoreItem[]|null
     */
    #[Assert\Type('array')]
    public ?array $items;

    /** The total number of items retrieved. */
    #[Assert\Type('int')]
    public ?int $total;

    /**
     * An array of warning messages. These types of errors do not prevent the method from executing but should be checked.
     * @var Error[]|null
     */
    #[Assert\Type('array')]
    public ?array $warnings;
}
