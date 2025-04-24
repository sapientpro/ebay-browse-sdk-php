# ConditionDescriptorValue

This type displays the value(s) associated with the specified condition descriptor name, as well as any additional information about a condition descriptor.

* Full name: `\SapientPro\EbayBrowseSDK\Models\ConditionDescriptorValue`
* This class implements:  
  [`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)

---

## Properties

### additionalInfo

Additional information about the condition of an item as it relates to a condition descriptor. This array elaborates on the value specified in the `content` field and provides more details about the item's condition.

```php
public ?array $additionalInfo = null; // string[]
```

---

### content

The value for the condition descriptor indicated in the associated `name` field.

```php
public ?string $content = null;
```

---
