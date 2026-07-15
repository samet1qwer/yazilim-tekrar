# Notlar

## Token Kontrolü

URL'den gelen token alınır.

```php
$token = $_GET["token"];
```

---

## Kullanıcı Doğrulama

Token veritabanında aranır.

```php
SELECT * FROM users WHERE token = :token
```

---

## Token Süresi

```php
$user["expires"] > time()
```

Süresi dolmuş token kabul edilmez.

---

## Şifre Kontrolü

Yeni parola ile tekrar girilen parola aynı olmalıdır.

```php
$newPassword === $confirmPassword
```

---

## password_hash()

Parola güvenli şekilde hash'lenir.

```php
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
```

---

## PDO

Prepared Statement SQL Injection saldırılarını önler.

```php
$stmt = $db->prepare(...);
```

---

## Şifre Güncelleme

Yeni hash veritabanına kaydedilir.

```php
UPDATE users
SET password = :password
WHERE email = :email
```

---

# Dikkat Edilecekler

- Token başarılı işlemden sonra silinmelidir.
- expires alanı temizlenmelidir.
- Şifre uzunluğu kontrol edilmelidir.
- Güçlü parola politikası uygulanmalıdır.
- HTTPS kullanılmalıdır.
- Başarılı işlemden sonra Login sayfasına yönlendirme yapılmalıdır.
- Aynı token ikinci kez kullanılmamalıdır.
