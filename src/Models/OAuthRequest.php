<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the request for OAuth token.
 */
class OAuthRequest implements EbayModelInterface
{
    #[Assert\Type('string')]
    public string $grant_type;

    #[Assert\Type('string')]
    public string $scope;
}
