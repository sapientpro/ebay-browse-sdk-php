<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A type that defines the pictogram for the type of hazard that a hazardous material represents.
 */
class HazardPictogram implements EbayModelInterface
{
    use FillsModel;

    /** The description of the hazard pictogram, such as Flammable. */
    #[Assert\Type('string')]
    public ?string $pictogramDescription = null;

    /** The ID of the hazard pictogram. */
    #[Assert\Type('string')]
    public ?string $pictogramId = null;

    /** The URL of the hazard pictogram. */
    #[Assert\Type('string')]
    public ?string $pictogramUrl = null;
}
