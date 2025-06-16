<?php

namespace SapientPro\EbayBrowseSDK\Enums;

enum GrantTypeEnum: string
{
    /**
     * Indicates grant type for authorization code.
     */
    case AUTHORIZATION_CODE = 'authorization_code';

    /**
     * Indicates grant type for client credentials.
     */
    case CLIENT_CREDENTIALS = 'client_credentials';

    /**
     * Indicates grant type for implicit token.
     */
    case IMPLICIT_GRANT = 'token';

    /**
     * Indicates grant type for refresh token.
     */
    case REFRESH_TOKEN = 'refresh_token';
}
