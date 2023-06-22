<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A type that defines the hazardous materials labels for an item.
 */
class HazardousMaterialsLabels implements EbayModelInterface
{
    use FillsModel;

    /** Additional information about the hazardous materials labels. */
    #[Assert\Type('string')]
    public ?string $additionalInformation = null;

    /**
     * An array of hazard pictograms that apply to the item.
     * @var HazardPictogram[]|null
     */
    #[Assert\Type('array')]
    public ?array $pictograms = null;

    /** The signal word for the hazardous materials label (such as Danger or Warning). */
    #[Assert\Type('string')]
    public ?string $signalWord = null;

    /** The ID of the signal word for the hazardous materials label. */
    #[Assert\Type('string')]
    public ?string $signalWordId = null;

    /**
     * An array of hazard statements for the item.
     * @var HazardStatement[]|null
     */
    #[Assert\Type('array')]
    public ?array $statements = null;
}
