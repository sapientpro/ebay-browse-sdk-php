<?php

namespace SapientPro\EbayBrowseSDK\Client;

use SapientPro\EbayBrowseSDK\Models\Exceptions\IncompatibleValueTypeException;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class Validator
{
    /**
     * Validate an array of data against the model
     * It must implement the EbayModelInterface
     * @param array $data array that represents the model
     * @param string $model model class name
     * @return void
     * @throws IncompatibleValueTypeException
     */
    public static function validateArray(array $data, string $model): void
    {
        $validator = self::getValidator();

        /** @var ClassMetadata $modelMetadata */
        $modelMetadata = $validator->getMetadataFor($model);
        $constraints = [];

        foreach ($modelMetadata->getConstrainedProperties() as $property) {
            $constraints[$property] = $modelMetadata
                ->getPropertyMetadata($property)[0]
                ->getConstraints();
        }

        $violations = $validator->validate(
            $data,
            new Assert\Collection(array(
                'fields' => $constraints,
                'allowExtraFields' => false,
                'allowMissingFields' => true
                )
            )
        );

        if (count($violations) > 0) {
            /** @var ConstraintViolation $violation */
            $violation = $violations[0];

            throw new IncompatibleValueTypeException(
                sprintf(
                    'Invalid value for %s property %s: %s',
                    $model,
                    $violation->getPropertyPath(),
                    $violation->getMessage()
                )
            );
        }
    }

    private static function getValidator(): ValidatorInterface
    {
        return Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator();
    }
}
