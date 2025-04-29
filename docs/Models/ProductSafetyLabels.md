# ProductSafetyLabels

This type contains seller provided product safety pictograms and statements for the listing.

* Full name: `\SapientPro\EbayBrowseSDK\Models\ProductSafetyLabels`
* This class implements:  
  [`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)

---

## Properties

### pictograms

An array of seller provided comma-separated string values that provides identifier, URL, and description for one or more pictograms associated with the listing.

```php
public ?array $pictograms = null; // ProductSafetyLabelPictogram[]
```

---

### statements

An array of seller provided comma-separated string values that provide identifier and description for one or more product safety statements associated with the listing.

```php
public ?array $statements = null; // ProductSafetyLabelStatement[]
```

---
