<?php

namespace SapientPro\EbayBrowseSDK\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use SapientPro\EbayBrowseSDK\ApiException;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class EbayClient
{
    public function __construct(
        public ClientInterface $client,
        public Serializer $serializer,
    ) {
    }

    public function sendRequest(Request $request, string $returnType = null): array
    {
        try {
            $response = $this->client->send($request);
        } catch (RequestException $e) {
            $body = $e->getResponse()?->getBody()?->getContents();
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse()?->getHeaders(),
                null !== $body
                    ? json_decode($body, true)
                    : null
            );
        }

        return $this->prepareResponse($response, $request->getUri(), $returnType);
    }

    private function prepareResponse(
        ResponseInterface $response,
        string $requestUri,
        string $returnType = null,
    ): array {
        $statusCode = $response->getStatusCode();
        $preparedResponse['code'] = $statusCode;

        if (!empty($response->getHeaders())) {
            $preparedResponse['headers'] = $response->getHeaders();
        }

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    $requestUri
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }

        $content = $response->getBody()->getContents();

        if (!empty($content) && null !== $returnType) {
            $model = $this->serializer->deserialize($content, $returnType);

            if (null !== $model) {
                $preparedResponse['data'] = $model;
            }
        }

        return $preparedResponse;
    }
}
