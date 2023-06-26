<?php

namespace SapientPro\EbayBrowseSDK\Client;

use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use SapientPro\EbayBrowseSDK\Configuration;
use SapientPro\EbayBrowseSDK\Enums\HttpMethodEnum;
use SapientPro\EbayBrowseSDK\HeaderSelector;
use SapientPro\EbayBrowseSDK\Models\EbayModelInterface;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class EbayRequest
{
    public function __construct(
        public HeaderSelector $headerSelector,
        public Configuration $config,
        public Serializer $serializer,
    ) {
    }

    public function getRequest(
        string $resourcePath,
        array $queryParameters = [],
        array $headerParameters = [],
    ): Request {
        $query = $this->processParameters($queryParameters);
        $headers = $this->processHeaders(HttpMethodEnum::GET, $headerParameters);

        return new Request(
            HttpMethodEnum::GET->value,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers
        );
    }

    public function postRequest(
        string $resourcePath,
        EbayModelInterface $body = null,
        array $queryParameters = [],
        array $headerParameters = [],
    ): Request {
        $query = $this->processParameters($queryParameters);
        $headers = $this->processHeaders(HttpMethodEnum::POST, $headerParameters, $body);
        $serializedBody = $body ? $this->serializer->serialize($body) : null;

        return new Request(
            HttpMethodEnum::POST->value,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $serializedBody
        );
    }

    public function putRequest(
        string $resourcePath,
        EbayModelInterface $body = null,
        array $queryParameters = [],
        array $headerParameters = [],
    ): Request {
        $query = $this->processParameters($queryParameters);
        $headers = $this->processHeaders(HttpMethodEnum::PUT, $headerParameters, $body);
        $serializedBody = $body ? $this->serializer->serialize($body) : null;

        return new Request(
            HttpMethodEnum::PUT->value,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $serializedBody
        );
    }

    public function deleteRequest(
        string $resourcePath,
        array $queryParameters = [],
        array $headerParameters = [],
    ): Request {
        $query = $this->processParameters($queryParameters);
        $headers = $this->processHeaders(HttpMethodEnum::DELETE, $headerParameters);

        return new Request(
            HttpMethodEnum::DELETE->value,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers
        );
    }

    private function processParameters(array $queryParameters = []): string
    {
        $filteredParameters = $this->filterParameters($queryParameters);

        return Query::build($filteredParameters);
    }

    private function processHeaders(
        HttpMethodEnum $method,
        array $headerParameters = [],
        EbayModelInterface $body = null,
    ): array {
        $filteredParameters = $this->filterParameters($headerParameters);

        $headers = match ($method) {
            HttpMethodEnum::GET => $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            ),
            HttpMethodEnum::POST => $this->headerSelector->selectHeaders(
                ['application/json'],
                $body ? ['application/json'] : []
            ),
            HttpMethodEnum::PUT => $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            ),
            HttpMethodEnum::DELETE => $this->headerSelector->selectHeaders(
                [],
                []
            )
        };

        // this endpoint requires OAuth (access token)
        if (null !== $this->config->getAccessToken()) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        return array_merge($defaultHeaders, $filteredParameters, $headers);
    }

    private function filterParameters(array $parameters): array
    {
        return array_filter(
            $parameters,
            fn ($parameter) => null !== $parameter
        );
    }
}
