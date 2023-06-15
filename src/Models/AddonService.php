<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\AddonServiceTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * This container describes an add-on service that may be selected for an item or that may apply automatically. A charge may be associated with the add-on service.
 */
class AddonService implements EbayModelInterface
{
    use FillsModel;

    /** This field indicates whether the add-on service must be selected for the item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceSelectionEnum'>eBay API documentation</a> */
    public ?string $selection;

    /**
     * The amount charged for the add-on service.
     * @var ConvertedAmount|null
     */
    public ?ConvertedAmount $serviceFee;

    /** The ID number of the add-on service. */
    public ?string $serviceId;

    /**
     * The type of add-on service, such as AUTHENTICITY_GUARANTEE. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceTypeEnum'>eBay API documentation</a>
     * @var AddonServiceTypeEnum|null
     */
    public ?AddonServiceTypeEnum $serviceType;
}
