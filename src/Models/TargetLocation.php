<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the distance between the item location and the buyer's location.
 */
class TargetLocation implements EbayModelInterface
{
    use FillsModel;

    /** This value shows the unit of measurement used to measure the distance between the location of the item and the buyer's location. This value is typically <code> mi</code> or <code> km</code>. */
    #[Assert\Type('string')]
    public ?string $unitOfMeasure = null;

    /** This value indicates the distance (measured in the measurement unit in the <b> unitOfMeasure</b>  field) between the item location and the buyer's location. */
    #[Assert\Type('string')]
    public ?string $value = null;
}
