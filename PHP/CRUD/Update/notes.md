# Notlar

## Update

CRUD işlemlerinde mevcut kayıtların güncellenmesini sağlar.

---

## Kullanıcı Kontrolü

Güncelleme işleminden önce kullanıcının var olup olmadığı kontrol edilir.

```php
SELECT * FROM users WHERE id = :id
```

---

## password_hash()

Parola veritabanına hash olarak kaydedilir.

```php
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
```

---

## UPDATE

Veritabanındaki mevcut kayıt güncellenir.

```sql
UPDATE users
SET
    name = :name,
    email = :email,
    password = :password
WHERE id = :id;
```

---

## Prepared Statement

SQL Injection saldırılarını önlemek için kullanılır.

```php
$stmt = $db->prepare($sql);
```

---

## bindParam()

SQL parametrelerini değişkenlere bağlar.

```php
$stmt->bindParam(":id", $id);
```

---

## JSON Response

İşlem sonucu JSON olarak döndürülür.

```php
echo json_encode([
    "message" => "Kullanıcı güncellendi"
]);
```

---

# Dikkat Edilecekler

- Email formatı doğrulanmalıdır.
- Şifre uzunluğu kontrol edilmelidir.
- Boş alan kontrolü yapılmalıdır.
- Aynı e-posta başka kullanıcı tarafından kullanılıyor mu kontrol edilmelidir.
- Kullanıcı yetkilendirmesi yapılmalıdır.
