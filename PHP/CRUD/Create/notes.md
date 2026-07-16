# Notlar

## CREATE TABLE

Yeni bir tablo oluşturmak için kullanılır.

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY
);
```

---

## PDO

SQL sorgusu PDO ile çalıştırılır.

```php
$conn = $db->prepare($sql);
$conn->execute();
```

---

## trim()

Tablo adındaki boşlukları temizler.

```php
$TableName = trim($_POST["TableName"]);
```

---

## Dynamic SQL

Bu örnekte tablo adı kullanıcıdan alınmaktadır.

```php
CREATE TABLE `$TableName`
```

Bu yaklaşım dikkatli kullanılmalıdır.

---

## JSON Response

Sonuç istemciye JSON formatında gönderilir.

```php
echo json_encode([
    "message" => "Tablo oluşturuldu"
]);
```

---

# Dikkat Edilecekler

- Tablo adı regex ile doğrulanmalıdır.
- SQL anahtar kelimeleri engellenmelidir.
- Yetkisiz kullanıcılar tablo oluşturamamalıdır.
- CREATE TABLE işlemi yalnızca yönetici kullanıcılar tarafından yapılmalıdır.
