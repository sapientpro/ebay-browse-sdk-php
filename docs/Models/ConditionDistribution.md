***

# ConditionDistribution

The container that defines the fields for the conditions refinements. This container is returned when <b> fieldgroups</b> is set to <code>CONDITION_REFINEMENTS</code> or <code>FULL</code> in the request.



* Full name: `\SapientPro\EbayBrowseSDK\Models\ConditionDistribution`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### condition

The text describing the condition of the item, such as New or Used. For a list of condition names, see <a href="/devzone/finding/callref/enums/conditionIdList.html " target="_blank">Item Condition IDs and Names</a>.  <br><br>Code so that your app gracefully handles any future changes to this list.

```php
public ?string $condition
```






***

### conditionId

The identifier of the condition. For example, 1000 is the identifier for NEW.

```php
public ?string $conditionId
```






***

### matchCount

The number of items having the condition.

```php
public int $matchCount
```






***

### refinementHref

The HATEOAS reference of this condition.

```php
public string $refinementHref
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
