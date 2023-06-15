***

# Error

The type that defines the fields that can be returned in an error.



* Full name: `\SapientPro\EbayBrowseSDK\Models\Error`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### category

This string value indicates the error category. There are three categories of errors: request errors, application errors, and system errors.

```php
public string $category
```






***

### domain

The name of the primary system where the error occurred. This is relevant for application errors.

```php
public string $domain
```






***

### errorId

A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.

```php
public int $errorId
```






***

### inputRefIds

An array of reference IDs that identify the specific request elements most closely associated to the error or warning, if any.

```php
public ?array $inputRefIds
```






***

### longMessage

A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem.

```php
public ?string $longMessage
```






***

### message

A description of the condition that caused the error or warning.

```php
public string $message
```






***

### outputRefIds

An array of reference IDs that identify the specific response elements most closely associated to the error or warning, if any.

```php
public ?array $outputRefIds
```






***

### parameters

An array of warning and error messages that return one or more variables contextual information about the error or warning. This is often the field or value that triggered the error or warning.

```php
public ?array $parameters
```






***

### subdomain

The name of the subdomain in which the error or warning occurred.

```php
public ?string $subdomain
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
