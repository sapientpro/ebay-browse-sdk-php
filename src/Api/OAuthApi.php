<?php

namespace SapientPro\EbayBrowseSDK\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use SapientPro\EbayBrowseSDK\ApiException;
use SapientPro\EbayBrowseSDK\Client\EbayClient;
use SapientPro\EbayBrowseSDK\Client\EbayRequest;
use SapientPro\EbayBrowseSDK\Client\Serializer;
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
    /** @ignore */
    private EbayClient $ebayClient;

    /** @ignore */
    private EbayRequest $ebayRequest;

    /** @ignore */
    private Configuration $config;

    /**
     * @ignore
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;

        $serializer = new Serializer();
        $client = new Client();

        $this->ebayClient = new EbayClient($client, $serializer);
        $this->ebayRequest = new EbayRequest(
            new HeaderSelector(),
            $this->config,
            $serializer
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
     * Operation getToken
     *
     * <p>This method retrieves a valid OAuth token.</p><p>All eBay REST APIs use the OAuth 2.0 protocol for application and user authorization. OAuth is the industry standard for assuring your online transactions are secure and you must provide a valid access token for each request you make to the eBay REST interfaces. <a href="/api-docs/static/oauth-client-credentials-grant.html">API Restrictions</a></p><h3><b> Request headers</b></h3> Set the following HTTP request headers:<ul><li>Content-Type – Must be set to: application/x-www-form-urlencoded</li><li>Authorization – The word "Basic " followed by your Base64-encoded OAuth credentials (<code><client_id>:<client_secret></code>).</li></ul> For details, see <a href="/api-docs/static/oauth-base64-credentials.html">Generating your Base64-encoded credentials</a>.<h3><b> Restrictions </b></h3>Format the payload of your POST request with the following values:<ul><li>Set grant_type to client_credentials.</li><li>Set scope to the URL-encoded space-separated list of the scopes needed for the interfaces you call with the access token.</li></ul>For details, see <a href="/api-docs/static/oauth-scopes.html#specifying-scopes">Using OAuth to access eBay APIs</a>.
     * @param string $clientId Application keys App ID (Client ID).
     * @param string $clientSecret Application keys Cert ID (Client Secret).
     * @param string|null $scope URL-encoded space-separated list of the scopes needed for the interfaces you call with the access token.
     * @return OAuthToken|null
     * @throws ApiException on non-2xx response
     */
    public function getToken(
        string $clientId,
        string $clientSecret,
        string $scope = null
    ): ?OAuthToken {
        $response = $this->getOAuthWithHttpInfo(
            $clientId,
            $clientSecret,
            $scope
        );
        return $response['data'] ?? null;
    }

    /**
     * @param string $clientId Application keys App ID (Client ID).
     * @param string $clientSecret Application keys Cert ID (Client Secret).
     * @param string|null $scope URL-encoded space-separated list of the scopes needed for the interfaces you call with the access token.
     * @return array
     * @throws ApiException on non-2xx response
     * @ignore
     * Operation getItemWithHttpInfo
     *
     */
    public function getOAuthWithHttpInfo(
        string $clientId,
        string $clientSecret,
        string $scope
    ): array {
        $request = $this->getOAuthRequest(
            $clientId,
            $clientSecret,
            $scope
        );

        return $this->ebayClient->sendRequest($request, returnType: OAuthToken::class);
    }

    /**
     * @ignore
     * @param string $clientId Application keys App ID (Client ID).
     * @param string $clientSecret Application keys Cert ID (Client Secret).
     * @param string|null $scope URL-encoded space-separated list of the scopes needed for the interfaces you call with the access token.
     * @return Request
     * Create request object for operation getItem
     *
     */
    private function getOAuthRequest(
        string $clientId,
        string $clientSecret,
        string $scope = null
    ): Request {
        $resourcePath = '/identity/v1/oauth2/token';

        $headerParameters = [
            'Accept' => ['*/*'],
            'Content-Type' => ['application/x-www-form-urlencoded'],
            'Authorization' =>  'Basic ' . base64_encode($clientId.':'.$clientSecret),
        ];
        
        $body = new OAuthRequest();
        $body->grant_type = 'client_credentials';
        $body->scope = $scope;

        return $this->ebayRequest->postRequest(
            $resourcePath,
            $body,
            headerParameters: $headerParameters
        );
    }
}
