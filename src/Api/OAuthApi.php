<?php

namespace SapientPro\EbayBrowseSDK\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use SapientPro\EbayBrowseSDK\ApiException;
use SapientPro\EbayBrowseSDK\Client\EbayClient;
use SapientPro\EbayBrowseSDK\Client\EbayRequest;
use SapientPro\EbayBrowseSDK\Client\Serializer;
use SapientPro\EbayBrowseSDK\Enums\GrantTypeEnum;
use SapientPro\EbayBrowseSDK\Models\OAuthRequest;
use SapientPro\EbayBrowseSDK\Models\OAuthToken;
use SapientPro\EbayBrowseSDK\Configuration;
use SapientPro\EbayBrowseSDK\HeaderSelector;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class OAuthApi implements EbayApiInterface
{

    const OAUTH_SIGN_IN = [
        'SANDBOX' => 'https://auth.sandbox.ebay.com/',
        'PRODUCTION' => 'https://auth.ebay.com/',
    ];

    /** @ignore */
    private EbayClient $ebayClient;

    /** @ignore */
    private EbayRequest $ebayRequest;

    /** @ignore */
    private Configuration $config;

    /** @ignore */
    private Serializer $serializer;

    /**
     * @ignore
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;

        $this->serializer = new Serializer();
        $client = new Client();

        $this->ebayClient = new EbayClient($client, $this->serializer);
        $this->ebayRequest = new EbayRequest(
            new HeaderSelector(),
            $this->config,
            $this->serializer
        );
    }

    /**
     * @ignore
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /** @ignore */
    public function setEbayClient(EbayClient $ebayClient): void
    {
        $this->ebayClient = $ebayClient;
    }

    /**
     * Operation getClientToken
     *
     * <p>This method retrieves a valid OAuth token.</p><p>All eBay REST APIs use the OAuth 2.0 protocol for application and user authorization. OAuth is the industry standard for assuring your online transactions are secure and you must provide a valid access token for each request you make to the eBay REST interfaces. <a href="/api-docs/static/oauth-client-credentials-grant.html">API Restrictions</a></p><h3><b> Request headers</b></h3> Set the following HTTP request headers:<ul><li>Content-Type – Must be set to: application/x-www-form-urlencoded</li><li>Authorization – The word "Basic " followed by your Base64-encoded OAuth credentials (<code><client_id>:<client_secret></code>).</li></ul> For details, see <a href="/api-docs/static/oauth-base64-credentials.html">Generating your Base64-encoded credentials</a>.<h3><b> Restrictions </b></h3>Format the payload of your POST request with the following values:<ul><li>Set grant_type to client_credentials.</li><li>Set scope to the URL-encoded space-separated list of the scopes needed for the interfaces you call with the access token.</li></ul>For details, see <a href="/api-docs/static/oauth-scopes.html#specifying-scopes">Using OAuth to access eBay APIs</a>.
     * @param array $clientId Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys App ID (Client ID).
     * @param array $clientSecret Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys Cert ID (Client Secret).
     * @return OAuthToken|null
     * @throws ApiException on non-2xx response
     */
    public function getClientToken(
        array $clientId,
        array $clientSecret
    ): ?OAuthToken {
        $response = $this->getOAuthWithHttpInfo(
            $clientId,
            $clientSecret,
            GrantTypeEnum::CLIENT_CREDENTIALS
        );
        return $response['data'] ?? null;
    }

    /**
     * Operation getAuthorizationToken
     *
     * <p>When a user grants your application the authorization to take action on their behalf, eBay returns an <i>authorization code </i> that contains the user's consent for the specified scopes. Use the authorization code in a <code>POST</code> request that's commonly known as an <i>authorization code grant request</i>. This request gets a User access token and its associated refresh token. </p><p>For more info see <a href="https://developer.ebay.com/api-docs/static/oauth-auth-code-grant-request.html">Exchanging the authorization code for a User access token</a></p><p>When you mint a new User access token, the access token is returned along with a <i>refresh token</i>, which you can use to renew the User access token for the associated user. A <b>refresh token request</b> mints an access token that contains the same authorization properties as the original access token.</p><h2 id="about">About refresh tokens</h2><p>For security, a User access token is short-lived. However, a refresh token is long-lived and you can use it to renew a User access token after the token expires. The benefit is that you don't need to get the account-owner's consent each time you need to renew their User access token.</p>
     * @param array $clientId Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys App ID (Client ID).
     * @param array $clientSecret Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys Cert ID (Client Secret).
     * @param string $redirectUri The 'RuName' value assigned to your application and the environment you're targeting.
     * @param string $code The URL-encoded authorization code value returned to you by eBay when the user granted their consent.
     * @return OAuthToken|null
     * @throws ApiException on non-2xx response
     */
    public function getAuthorizationToken(
        array $clientId,
        array $clientSecret,
        string $redirectUri,
        string $code,
    ): ?OAuthToken {
        $tokenFile = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR ."tokenData.info";

        if(file_exists($tokenFile)) {
            $cachedToken = $this->serializer->deserialize(file_get_contents($tokenFile), OAuthToken::class);
            $lastTimestamp = ($cachedToken->refresh_token_timestamp) ? $cachedToken->refresh_token_timestamp : $cachedToken->creation_timestamp;
            
            // If cached token is still valid return it
            if(($cachedToken->expires_in + $lastTimestamp) > time()) {
                return $cachedToken;
            }

            // If cached refresh token is still valid renew token
            if(($cachedToken->refresh_token_expires_in + $lastTimestamp) > time()) {
                $response = $this->getOAuthWithHttpInfo(
                    $clientId,
                    $clientSecret,
                    GrantTypeEnum::REFRESH_TOKEN,
                    redirectUri:$redirectUri,
                    refreshToken:$cachedToken->refresh_token
                );
                // Save data for next refresh
                if($response) {
                    $cachedToken->access_token = $response['data']->access_token;
                    $cachedToken->expires_in = $response['data']->expires_in;
                    $cachedToken->refresh_token_timestamp = time();
                    file_put_contents($tokenFile, json_encode($cachedToken));
                    
                    return $response['data'];
                }

                return null;
            } else {
                // Remove data's file to process new token
                unlink($tokenFile);
			}
        }
        
        $response = $this->getOAuthWithHttpInfo(
            $clientId,
            $clientSecret,
            GrantTypeEnum::AUTHORIZATION_CODE,
            null,
            $redirectUri,
            $code
        );
        
        // Save data for refresh
        if($response) {
            touch($tokenFile);
            $response['data']->creation_timestamp = time();
            file_put_contents($tokenFile, json_encode($response['data']));
        }
        
        return $response['data'] ?? null;
    }

    /**
     * @param array $clientId Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys App ID (Client ID).
     * @param array $clientSecret Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys Cert ID (Client Secret).
     * @param GrantTypeEnum $grantType The grant type associated to the specific request.
     * @param array|null $scope Array of SapientPro\EbayBrowseSDK\Enums\OAuthTokenScopesEnum of the scopes needed for the interfaces you call with the access token.
     * @param string|null $redirectUri The 'RuName' value assigned to your application and the environment you're targeting.
     * @param string|null $code The URL-encoded authorization code value returned to you by eBay when the user granted their consent.
     * @param string|null $refreshToken The refresh token value returned from the authorization code grant request.
     * @return array
     * @throws ApiException on non-2xx response
     * @ignore
     * Operation getOAuthWithHttpInfo
     *
     */
    public function getOAuthWithHttpInfo(
        array $clientId,
        array $clientSecret,
        GrantTypeEnum $grantType,
        ?array $scope = null,
        ?string $redirectUri = null,
        ?string $code = null,
        ?string $refreshToken  = null
    ): array {
        $request = $this->getOAuthRequest(
            $clientId,
            $clientSecret,
            $grantType,
            $scope,
            $redirectUri,
            $code,
            $refreshToken
        );
        try {
            return $this->ebayClient->sendRequest($request, returnType: OAuthToken::class);
        } catch (ApiException $e) {
            if($e->getCode() == 400) {
                $env = strtolower($this->config->getApiEnvironment()->value);

                throw new \Exception("{$e->getMessage()} -> Get a new authorization code value returned by https://developer.ebay.com/my/auth/?env={$env}");
            } else {
                throw $e;
            }
        }
    }

    /**
     * @ignore
     * @param array $clientId Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys App ID (Client ID).
     * @param array $clientSecret Array ['SANDBOX' => '', 'PRODUCTION' => ''] of application keys Cert ID (Client Secret).
     * @param GrantTypeEnum $grantType The grant type associated to the specific request.
     * @param array|null $scope Array of SapientPro\EbayBrowseSDK\Enums\OAuthTokenScopesEnum of the scopes needed for the interfaces you call with the access token.
     * @param string|null $redirectUri The 'RuName' value assigned to your application and the environment you're targeting.
     * @param string|null $code The URL-encoded authorization code value returned to you by eBay when the user granted their consent.
     * @param string|null $refreshToken The refresh token value returned from the authorization code grant request.
     * @return Request
     * Create request object for operation getClientToken and getAuthorizationToken
     *
     */
    private function getOAuthRequest(
        array $clientId,
        array $clientSecret,
        GrantTypeEnum $grantType,
        ?array $scope = null,
        ?string $redirectUri = null,
        ?string $code = null,
        ?string $refreshToken  = null
    ): Request {
        $resourcePath = '/identity/v1/oauth2/token';

        $env = $this->config->getApiEnvironment()->value;

        $headerParameters = [
            'Accept' => ['*/*'],
            'Content-Type' => ['application/x-www-form-urlencoded'],
            'Authorization' =>  'Basic ' . base64_encode($clientId[$env].':'.$clientSecret[$env]),
        ];

        $body = new OAuthRequest();
        $body->grant_type = $grantType->value;

        if($scope) {
            $body->scope = implode(' ', array_map(function($enum) {return $enum->value;}, $scope));
        }
        if($redirectUri) {
            $body->redirect_uri = $redirectUri;
        }
        if($code) {
            $body->code = $code;
        }
        if($refreshToken) {
            $body->refresh_token = $refreshToken;
        }
        
        return $this->ebayRequest->postRequest(
            $resourcePath,
            $body,
            headerParameters: $headerParameters
        );
    }
}
