<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A type that defines the hazard statement for a hazardous material.
 */
class HazardStatement implements EbayModelInterface
{
    use FillsModel;

    /** A description of the nature of the hazard, such as whether the material is toxic if swallowed. */
    #[Assert\Type('string')]
    public ?string $statementDescription;

    /** The ID of the hazard statement. */
    #[Assert\Type('string')]
    public ?string $statementId;
}
