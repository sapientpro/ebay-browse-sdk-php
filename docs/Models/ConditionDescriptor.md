# ConditionDescriptor

This type displays additional information about the condition of an item in a structured format.

* Full name: `\SapientPro\EbayBrowseSDK\Models\ConditionDescriptor`
* This class implements:  
  [`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)

---

## Properties

### name

The name of a condition descriptor. The value(s) for this condition descriptor are returned in the associated `values` array.

```php
public ?string $name = null;
```

---

### values

This array displays the value(s) for a condition descriptor (denoted by the associated `name` field), as well as any other additional information about the condition of the item.

```php
public ?array $values = null; // ConditionDescriptorValue.md[]
```

---
