<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * An array of name/value pairs that provide details regarding the error.
 */
class ErrorParameter implements EbayModelInterface
{
    use FillsModel;

    /** This is the name of input field that caused an issue with the call request. */
    #[Assert\Type('string')]
    public ?string $name;

    /** This is the actual value that was passed in for the element specified in the <b> name</b>  field. */
    #[Assert\Type('string')]
    public ?string $value;
}
