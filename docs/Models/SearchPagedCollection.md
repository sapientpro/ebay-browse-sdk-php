***

# SearchPagedCollection

The type that defines the fields for a paginated result set. The response consists of 0 or more sequenced <em> pages</em> where each page has 0 or more items.



* Full name: `\SapientPro\EbayBrowseSDK\Models\SearchPagedCollection`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### autoCorrections

The auto-corrected inputs.

```php
public ?\SapientPro\EbayBrowseSDK\Models\AutoCorrections $autoCorrections
```






***

### href

The URI of the current page of results. <br><br>The following example of the <b> search</b> method returns items 1 thru 5 from the list of items found. <br><br><code>https://api.ebay.com/buy/v1/item_summary/search?q=shirt&limit=5&offset=0</code>.

```php
public string $href
```






***

### itemSummaries

An array of the items on this page. The items are sorted according to the sorting method specified in the request.

```php
public array $itemSummaries
```






***

### limit

The value of the <b>limit</b> parameter submitted in the request, which is the maximum number of items to return on a page, from the result set. A result set is the complete set of items returned by the method.

```php
public int $limit
```






***

### next

The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set. <br><br>The following example of the <b> search</b> method returns items 5 thru 10 from the list of items found.<br> <br><code>https://api.ebay.com/buy/v1/item_summary/search?query=t-shirts&limit=5&offset=10 </code>

```php
public ?string $next
```






***

### offset

This value indicates the <b>offset</b> used for current page of items being returned. Assume the initial request used an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>3</code>. Then in the first page of results, this value would be <code>0</code>, and items 1-3 are returned. For the second page, this value is <code>3</code> and so on.

```php
public int $offset
```






***

### prev

The URI for the previous page of results. This is returned if there is a previous page of results from the result set. <br><br>The following example of the <b> search</b> method returns items 1 thru 5 from the list of items found, which would be the first set of items returned.<br> <br><code>https://api.ebay.com/buy/v1/item_summary/search?query=t-shirts&limit=5&offset=0</code>

```php
public string $prev
```






***

### refinement

The container for all the search refinements.

```php
public \SapientPro\EbayBrowseSDK\Models\Refinement $refinement
```






***

### total

The total number of items that match the input criteria.<br><br><span class="tablenote"><b>Note:</b> <code>total</code> is just an indicator of the number of listings for a given query. It could vary based on the number of listings with variations included in the result. It is strongly recommended that <code>total</code> not be used in pagination use cases. Instead, use <a href="/api-docs/buy/browse/resources/item_summary/methods/search#response.next "> next</a> to determine the results on the next page.</span>

```php
public int $total
```






***

### warnings

The container with all the warnings for the request.

```php
public ?array $warnings
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
