***

# AvailableCoupon





* Full name: `\SapientPro\EbayBrowseSDK\Models\AvailableCoupon`
* This class implements:
[`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)



## Properties


### constraint

The limitations or restrictions of the coupon.

```php
public ?\SapientPro\EbayBrowseSDK\Models\CouponConstraint $constraint
```






***

### discountAmount

The discount amount after the coupon is applied.

```php
public ?\SapientPro\EbayBrowseSDK\Models\Amount $discountAmount
```






***

### discountType

The type of discount that the coupon applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CouponDiscountType'>eBay API documentation</a>

```php
public ?\SapientPro\EbayBrowseSDK\Enums\CouponDiscountType $discountType
```






***

### message

A description of the coupon.<br><br><span class="tablenote"><b> Note: </b> The value returned in the <b>termsWebUrl</b> field should appear for all experiences when displaying coupons. The value in the <b>availableCoupons.message</b> field must also be included, if returned in the API response.</span>

```php
public ?string $message
```






***

### redemptionCode

The coupon code.

```php
public ?string $redemptionCode
```






***

### termsWebUrl

The URL to the coupon terms of use.<br><br><span class="tablenote"><b> Note: </b> The value returned in the <b>termsWebUrl</b> field should appear for all experiences when displaying coupons. The value in the <b>availableCoupons.message</b> field must also be included, if returned in the API response.</span>

```php
public ?string $termsWebUrl
```






***



***
> Automatically generated from source code comments on 2023-06-15 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
