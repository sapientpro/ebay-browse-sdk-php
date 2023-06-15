<?php

namespace SapientPro\EbayBrowseSDK\Models\Concerns;

use SapientPro\EbayBrowseSDK\Client\Serializer;
use SapientPro\EbayBrowseSDK\Models\EbayModelInterface;
use SapientPro\EbayBrowseSDK\Models\NonExistentPropertyException;

/**
 * @ignore
 * @package  SapientPro\EbayBrowseSDK
 * @author   SapientPro
 * @link     https://github.com/sapientpro
 */
trait FillsModel
{
    public static function fromArray(array $data): EbayModelInterface
    {
        $model = new self();

        foreach ($data as $key => $value) {
            $model->$key = $value;
        }

        return $model;
    }

    public static function fromPlainArray(array $data): ?EbayModelInterface
    {
        $serializer = new Serializer();

        return $serializer->denormalize($data, self::class);
    }

    public static function fromJson(string $json): ?EbayModelInterface
    {
        $serializer = new Serializer();

        return $serializer->deserialize($json, self::class);
    }

    public function __set(string $name, mixed $value): void
    {
        throw new NonExistentPropertyException(
            "Cannot set property $name to " . __CLASS__ . ', as it is not declared in the model'
        );
    }
}
