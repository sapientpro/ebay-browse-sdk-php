# ResponsiblePerson

This type provides information, such as name and contact details, for an EU-based Responsible Person or entity, associated with the product.

* Full name: `\SapientPro\EbayBrowseSDK\Models\ResponsiblePerson`
* This class implements:  
  [`\SapientPro\EbayBrowseSDK\Models\EbayModelInterface`](./EbayModelInterface.md)

---

## Properties

### addressLine1

The first line of the Responsible Person's street address.

```php
public ?string $addressLine1 = null;
```

---

### addressLine2

The second line of the Responsible Person's address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'.

```php
public ?string $addressLine2 = null;
```

---

### city

The city of the Responsible Person's street address.

```php
public ?string $city = null;
```

---

### companyName

The name of the Responsible Person or entity.

```php
public ?string $companyName = null;
```

---

### contactUrl

The contact URL of the Responsible Person or entity.

```php
public ?string $contactUrl = null;
```

---

### country

The two-letter ISO 3166 standard of the country of the address.

```php
public ?CountryCodeEnum $country = null;
```

---

### countryName

The country name of the Responsible Person's street address.

```php
public ?string $countryName = null;
```

---

### county

The county of the Responsible Person's street address.

```php
public ?string $county = null;
```

---

### email

The email of the Responsible Person's street address.

```php
public ?string $email = null;
```

---

### phone

The phone number of the Responsible Person's street address.

```php
public ?string $phone = null;
```

---

### postalCode

The postal code of the Responsible Person's street address.

```php
public ?string $postalCode = null;
```

---

### stateOrProvince

The state or province of the Responsible Person's street address.

```php
public ?string $stateOrProvince = null;
```

---

### types

The type(s) associated with the Responsible Person or entity.

```php
public ?array $types = null; // ResponsiblePersonTypeEnum[]
```

---
