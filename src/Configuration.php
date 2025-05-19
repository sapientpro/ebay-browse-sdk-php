<?php

namespace SapientPro\EbayBrowseSDK;

use SapientPro\EbayBrowseSDK\Enums\ApiEnvironmentType;

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
     * The environment
     *
     * @var string
     */
    protected string $environment = ApiEnvironmentType::SANDBOX->value;

    /**
     * The host
     *
     * @var string
     */
    protected string $host = ApiEnvironmentType::SANDBOX_ENDPOINT->value;

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
        return ($this->environment == ApiEnvironmentType::PRODUCTION)
            ? ApiEnvironmentType::PRODUCTION_ENDPOINT->value
            : ApiEnvironmentType::SANDBOX_ENDPOINT->value;
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


    /**
     * Gets the environment of the api client
     *
     * @return string environment
     */
    public function getApiEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * Sets the environment of the api client
     *
     * @param  string  $environment  the environment of the api client
     *
     * @return $this
     */
    public function setApiEnvironment(string $environment): self
    {
        $this->environment = $environment;

        return $this;
    }
}
