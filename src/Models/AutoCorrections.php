<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

class AutoCorrections implements EbayModelInterface
{
    use FillsModel;

    /** The automatically spell-corrected keyword from the request. */
    public string $q;
}
