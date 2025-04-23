<?php

namespace SapientPro\EbayBrowseSDK;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class Configuration
{
    private static self $defaultConfiguration;

    /**
     * Access token for OAuth
     *
     * @var string
     */
    protected string $accessToken = '';

    /**
     * The host
     *
     * @var string
     */
    protected string $host = 'https://api.ebay.com/buy/browse/v1';

    /**
     * User agent of the HTTP request, set to "SapientPro" by default
     *
     * @var string
     */
    protected string $userAgent = 'SapientPro/v1.20.2/php';

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration(): self
    {
        if (!isset(self::$defaultConfiguration)) {
            self::$defaultConfiguration = new self();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the detault configuration instance
     *
     * @param  Configuration  $config  An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(self $config): void
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param  string  $accessToken  Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Sets the host
     *
     * @param  string  $host  Host
     *
     * @return $this
     */
    public function setHost(string $host): self
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param  string  $userAgent  the user agent of the api client
     *
     * @return $this
     */
    public function setUserAgent(string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }
}
