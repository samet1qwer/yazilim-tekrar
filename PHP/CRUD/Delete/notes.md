# Notlar

## Delete İşlemi

CRUD'un Delete adımı veritabanındaki kayıtların silinmesini sağlar.

---

## ID Kontrolü

```php
$id = (int) $_GET["id"];
```

ID değeri tam sayıya dönüştürülerek beklenmeyen veri girişleri azaltılır.

---

## Kullanıcı Kontrolü

Silme işleminden önce kullanıcının gerçekten var olup olmadığı kontrol edilir.

```php
SELECT * FROM users WHERE id = :id
```

Bu sayede olmayan bir kayıt için silme işlemi yapılmaz.

---

## DELETE Sorgusu

```php
DELETE FROM users WHERE id = :id
```

Kullanıcı kaydı veritabanından silinir.

---

## Prepared Statement

```php
$stmt = $db->prepare(...);
```

SQL Injection saldırılarına karşı koruma sağlar.

---

## JSON Yanıtı

İşlem sonucu istemciye JSON olarak döndürülür.

```php
echo json_encode([
    "message" => "Kullanıcı silindi"
]);
```

---

## Dikkat Edilecekler

- ID doğrulanmalıdır.
- Kullanıcı varlığı kontrol edilmelidir.
- Yetkilendirme yapılmalıdır.
- Silinen işlemler loglanabilir.
- Soft Delete tercih edilebilir.
