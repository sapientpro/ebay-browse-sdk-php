<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\AddonServiceTypeEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This container describes an add-on service that may be selected for an item or that may apply automatically. A charge may be associated with the add-on service.
 */
class AddonService implements EbayModelInterface
{
    use FillsModel;

    /** This field indicates whether the add-on service must be selected for the item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceSelectionEnum'>eBay API documentation</a> */
    #[Assert\Type('string')]
    public ?string $selection = null;

    /**
     * The amount charged for the add-on service.
     * @var ConvertedAmount|null
     */
    #[Assert\Type(ConvertedAmount::class)]
    public ?ConvertedAmount $serviceFee = null;

    /** The ID number of the add-on service. */
    #[Assert\Type('string')]
    public ?string $serviceId = null;

    /**
     * The type of add-on service, such as AUTHENTICITY_GUARANTEE. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceTypeEnum'>eBay API documentation</a>
     * @var AddonServiceTypeEnum|null
     */
    #[Assert\Type(AddonServiceTypeEnum::class)]
    public ?AddonServiceTypeEnum $serviceType = null;
}
