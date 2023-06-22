<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Enums\PaymentMethodBrandEnum;
use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

class PaymentMethodBrand implements EbayModelInterface
{
    use FillsModel;

    /** The payment method brand, such as Visa or PayPal. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentMethodBrandEnum'>eBay API documentation</a> */
    #[Assert\Type(PaymentMethodBrandEnum::class)]
    public ?PaymentMethodBrandEnum $paymentMethodBrandType;

    /**
     * The details of the logo image, such as the size and URL.<br><br><span class="tablenote"> <b> Note: </b> Currently, only the <b>imageUrl</b> is populated.</span>
     * @var Image|null
     */
    #[Assert\Type(Image::class)]
    public ?Image $logoImage;
}
