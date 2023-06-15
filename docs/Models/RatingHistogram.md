***

# RatingHistogram

The type that defines the fields for product ratings. Only products that are in the eBay product catalog can be reviewed and rated.



* Full name: `\SapientPro\EbayBrowseSDK\Models\RatingHistogram`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### count

The total number of user ratings that the product has received.

```php
public ?int $count
```






***

### rating

This is the average rating for the product. As part of a product review, users rate the product. Products are rated from one star (terrible) to five stars (excellent), with each star having a corresponding point value - one star gets 1 point, two stars get 2 points, and so on. If a product had one four-star rating and one five-star rating, its average rating would be <code> 4.5</code>, and this is the value that would appear in this field.

```php
public ?string $rating
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
