<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The type that defines the fields that can be returned in an error.
 */
class Error implements EbayModelInterface
{
    use FillsModel;

    /** This string value indicates the error category. There are three categories of errors: request errors, application errors, and system errors. */
    #[Assert\Type('string')]
    public string $category;

    /** The name of the primary system where the error occurred. This is relevant for application errors. */
    #[Assert\Type('string')]
    public string $domain;

    /** A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. */
    #[Assert\Type('string')]
    public int $errorId;

    /**
     * An array of reference IDs that identify the specific request elements most closely associated to the error or warning, if any.
     * @var string[]|null
     */
    #[Assert\Type('array')]
    public ?array $inputRefIds = null;

    /** A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem. */
    #[Assert\Type('string')]
    public ?string $longMessage = null;

    /** A description of the condition that caused the error or warning. */
    #[Assert\Type('string')]
    public string $message;

    /**
     * An array of reference IDs that identify the specific response elements most closely associated to the error or warning, if any.
     * @var string[]|null
     */
    #[Assert\Type('array')]
    public ?array $outputRefIds = null;

    /**
     * An array of warning and error messages that return one or more variables contextual information about the error or warning. This is often the field or value that triggered the error or warning.
     * @var ErrorParameter[]|null
     */
    #[Assert\Type('array')]
    public ?array $parameters = null;

    /** The name of the subdomain in which the error or warning occurred. */
    #[Assert\Type('string')]
    public ?string $subdomain = null;
}
