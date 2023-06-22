<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\PaymentInstructionEnum;
use SapientPro\EbayBrowseSDK\Enums\PaymentMethodTypeEnum;
use SapientPro\EbayBrowseSDK\Enums\SellerInstructionEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

class PaymentMethod implements EbayModelInterface
{
    use FillsModel;

    /**
     * The payment method type, such as credit card or cash. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentMethodTypeEnum'>eBay API documentation</a>
     * @var PaymentMethodTypeEnum|null
     */
    #[Assert\Type(PaymentMethodTypeEnum::class)]
    public ?PaymentMethodTypeEnum $paymentMethodType;

    /**
     * The payment method brands, including the payment method brand type and logo image.
     * @var PaymentMethodBrand[]|null
     */
    #[Assert\Type('array')]
    public ?array $paymentMethodBrands;

    /**
     * The payment instructions for the buyer, such as <i>cash in person</i> or <i>contact seller</i>.
     * @var PaymentInstructionEnum[]|null
     */
    #[Assert\Type('array')]
    public ?array $paymentInstructions;

    /**
     * The seller instructions to the buyer, such as <i>accepts credit cards</i> or <i>see description</i>.
     * @var SellerInstructionEnum[]|null
     */
    #[Assert\Type('array')]
    public ?array $sellerInstructions;
}
