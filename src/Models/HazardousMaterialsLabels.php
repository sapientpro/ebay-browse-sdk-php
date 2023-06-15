<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * A type that defines the hazardous materials labels for an item.
 */
class HazardousMaterialsLabels implements EbayModelInterface
{
    use FillsModel;

    /** Additional information about the hazardous materials labels. */
    public ?string $additionalInformation;

    /**
     * An array of hazard pictograms that apply to the item.
     * @var HazardPictogram[]|null
     */
    public ?array $pictograms;

    /** The signal word for the hazardous materials label (such as Danger or Warning). */
    public ?string $signalWord;

    /** The ID of the signal word for the hazardous materials label. */
    public ?string $signalWordId;

    /**
     * An array of hazard statements for the item.
     * @var HazardStatement[]|null
     */
    public ?array $statements;
}
