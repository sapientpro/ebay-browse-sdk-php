<?php

namespace SapientPro\EbayBrowseSDK\Models;

use SapientPro\EbayBrowseSDK\Models\Concerns\FillsModel;

/**
 * The type that defines the fields that can be returned in an error.
 */
class Error implements EbayModelInterface
{
    use FillsModel;

    /** This string value indicates the error category. There are three categories of errors: request errors, application errors, and system errors. */
    public string $category;

    /** The name of the primary system where the error occurred. This is relevant for application errors. */
    public string $domain;

    /** A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. */
    public int $errorId;

    /**
     * An array of reference IDs that identify the specific request elements most closely associated to the error or warning, if any.
     * @var string[]|null
     */
    public ?array $inputRefIds;

    /** A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem. */
    public ?string $longMessage;

    /** A description of the condition that caused the error or warning. */
    public string $message;

    /**
     * An array of reference IDs that identify the specific response elements most closely associated to the error or warning, if any.
     * @var string[]|null
     */
    public ?array $outputRefIds;

    /**
     * An array of warning and error messages that return one or more variables contextual information about the error or warning. This is often the field or value that triggered the error or warning.
     * @var ErrorParameter[]|null
     */
    public ?array $parameters;

    /** The name of the subdomain in which the error or warning occurred. */
    public ?string $subdomain;
}
