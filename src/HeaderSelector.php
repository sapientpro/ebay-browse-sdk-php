<?php

namespace SapientPro\EbayBrowseSDK;

/**
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
class HeaderSelector
{
    /**
     * @param  string[]  $accept
     * @param  string[]  $contentTypes
     *
     * @return array
     */
    public function selectHeaders(array $accept, array $contentTypes): array
    {
        $headers = [];

        $accept = $this->selectAcceptHeader($accept);

        if (null !== $accept) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);

        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param  string[]  $accept  Array of header
     *
     * @return string|null Accept (e.g. application/json)
     */
    private function selectAcceptHeader(array $accept): ?string
    {
        if (empty($accept)) {
            return null;
        }

        return implode(',', $accept);
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param  string[]  $contentType  Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader(array $contentType): string
    {
        if (empty($contentType)) {
            return 'application/json';
        }

        return implode(',', $contentType);
    }
}
