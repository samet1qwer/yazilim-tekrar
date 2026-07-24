# Notlar

## SQL Injection Nedir?

SQL Injection, saldırganın SQL sorgularını manipüle ederek veritabanına yetkisiz erişim sağlamaya çalıştığı güvenlik açığıdır.

---

## Prepared Statement

```php
$stmt = $db->prepare($sql);
```

SQL sorgusunu önceden derler ve kullanıcı verisini sorgudan ayırır.

---

## bindParam()

```php
$stmt->bindParam(':name', $_POST['name']);
```

Parametreleri güvenli şekilde sorguya bağlar.

---

## execute()

```php
$stmt->execute();
```

Hazırlanan sorguyu çalıştırır.

---

## password_hash()

```php
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
```

Parolayı güvenli şekilde hashleyerek veritabanında düz metin olarak saklanmasını önler.

---

## Session Kontrolü

```php
if (!isset($_SESSION['user_id']))
```

Sadece giriş yapan kullanıcıların profil güncellemesine izin verir.

---

## JSON Response

```php
echo json_encode(...);
```

İşlem sonucunu istemciye JSON olarak döndürür.

---

## Dikkat Edilecekler

- SQL sorgularında string birleştirme yapılmamalıdır.
- Prepared Statement kullanılmalıdır.
- Parolalar asla düz metin olarak saklanmamalıdır.
- Session kontrolü yapılmalıdır.
- Kullanıcı girişleri doğrulanmalıdır.

---

## Best Practices

- PDO veya MySQLi Prepared Statement kullanın.
- `password_hash()` ve `password_verify()` kullanın.
- Giriş verilerini doğrulayın.
- Yetkilendirme kontrolleri ekleyin.
- Hata mesajlarında veritabanı detaylarını göstermeyin.

---

## Güvenlik

Korunulması gereken saldırılar:

- SQL Injection
- Authentication Bypass
- Credential Theft
- Information Disclosure

Prepared Statement, SQL Injection saldırılarını önlemenin en etkili yöntemlerinden biridir.
