<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

class AutoCorrections implements EbayModelInterface
{
    use FillsModel;

    /** The automatically spell-corrected keyword from the request. */
    #[Assert\Type('string')]
    public string $q;
}
