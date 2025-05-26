<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Type the defines the OAuth token.
 */
class OAuthToken implements EbayModelInterface
{
    use FillsModel;

    /** The token expiration. */
    #[Assert\Type('int')]
    public ?int $expires_in = null;

    /** The generated access token. */
    #[Assert\Type('string')]
    public string $access_token;

    /** The token type. */
    #[Assert\Type('string')]
    public ?string $token_type = null;
}
