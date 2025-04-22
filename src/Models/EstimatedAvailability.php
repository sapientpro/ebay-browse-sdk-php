<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\AvailabilityStatusEnum;
use SapientPro\EbayBrowseSDK\Enums\AvailabilityThresholdEnum;
use SapientPro\EbayBrowseSDK\Enums\DeliveryOptionsEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields for the estimated item availability information.
 */
class EstimatedAvailability implements EbayModelInterface
{
    use FillsModel;

    /** This field is return only when the seller sets their '<a href="#display-item-quantity">display item quantity</a>' preference to <b> Display "More than 10 available" in your listing (if applicable)</b>. The value of this field will be "10", which is the threshold value. <br><br>Code so that your app gracefully handles any future changes to this value. */
    #[Assert\Type('int')]
    public ?int $availabilityThreshold = null;

    /**
     * This field is return only when the seller sets their <b> Display Item Quantity</b> preference to <b> Display "More than 10 available" in your listing (if applicable)</b>. The value of this field will be <code> MORE_THAN</code>. This indicates that the seller has more than the 'quantity display preference', which is 10, in stock for this item.    <br><br> The following are the display item quantity preferences the seller can set. <br><ul><li> <b> Display "More than 10 available" in your listing (if applicable) </b><ul> <li>If the seller enables this preference, this field is returned as long as there are more than 10 of this item in inventory.</li>  <li> If the quantity is equal to 10 or drops below 10, this field is not returned and the estimated quantity of the item is returned in the <b> estimatedAvailableQuantity</b> field.</li></ul> </li> <li> <b> Display the exact quantity in your items</b> <br>If the seller enables this preference, the <b> availabilityThresholdType</b> and <b> availabilityThreshold</b> fields are not returned and the estimated quantity of the item is returned in the <b> estimatedAvailableQuantity</b> field.<br><br><b> Note: </b> Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. </li></ul>   <br>Code so that your app gracefully handles any future changes to these preferences. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityThresholdEnum'>eBay API documentation</a>
     * @var AvailabilityThresholdEnum|null
     */
    #[Assert\Type(AvailabilityThresholdEnum::class)]
    public ?AvailabilityThresholdEnum $availabilityThresholdType = null;

    /**
     * An array of available delivery options. <br><br><b> Valid Values: </b> SHIP_TO_HOME, SELLER_ARRANGED_LOCAL_PICKUP, IN_STORE_PICKUP, PICKUP_DROP_OFF, or DIGITAL_DELIVERY <br><br>Code so that your app gracefully handles any future changes to this list.
     * @var array<DeliveryOptionsEnum>|null
     */
    #[Assert\Type('array')]
    public ?array $deliveryOptions = null;

    /**
     * An enumeration value representing the inventory status of this item.<br><br><span class="tablenote"><b> Note: </b>Be sure to review the <b>itemEndDate</b> field to determine whether the item is available for purchase.</span><br><br><b> Valid Values: </b> IN_STOCK, LIMITED_STOCK, or OUT_OF_STOCK <br><br>Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityStatusEnum'>eBay API documentation</a>
     * @var AvailabilityStatusEnum|null
     */
    #[Assert\Type(AvailabilityStatusEnum::class)]
    public ?AvailabilityStatusEnum $estimatedAvailabilityStatus = null;

    /** The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned. */
    #[Assert\Type('int')]
    public ?int $estimatedAvailableQuantity = null;

    /** The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned. */
    public ?int $estimatedRemainingQuantity = null;

    /** The estimated number of this item that have been sold. */
    #[Assert\Type('int')]
    public ?int $estimatedSoldQuantity = null;
}
