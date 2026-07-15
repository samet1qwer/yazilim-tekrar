# Notlar

## random_bytes()

Kriptografik olarak güvenli rastgele byte üretir.

```php
$token = random_bytes(50);
```

---

## bin2hex()

Üretilen byte dizisini URL'de kullanılabilecek karakterlere dönüştürür.

```php
$token = bin2hex(random_bytes(50));
```

---

## Token

Parola sıfırlama isteğini doğrulamak için kullanılır.

Her kullanıcı için benzersiz olmalıdır.

---

## Token Süresi

```php
$expires = time() + 3600;
```

3600 saniye = 1 saat

Belirli bir süreden sonra token geçersiz olmalıdır.

---

## mail()

PHP'nin yerleşik mail fonksiyonudur.

```php
mail($email, $subject, $message);
```

Gerçek projelerde genellikle

- PHPMailer
- Symfony Mailer
- Laravel Mail

tercih edilir.

---

## PDO

Prepared Statement SQL Injection saldırılarını önler.

```php
$stmt = $db->prepare(...);
```

---

## Şifre Sıfırlama Akışı

1. Email girilir.

2. Kullanıcı bulunur.

3. Token oluşturulur.

4. Token veritabanına kaydedilir.

5. Mail gönderilir.

6. Kullanıcı linke tıklar.

7. Yeni parola belirlenir.

---

## Dikkat Edilecekler

- Token tek kullanımlık olmalıdır.
- Token süresi dolduğunda silinmelidir.
- Token başarılı sıfırlamadan sonra silinmelidir.
- HTTPS kullanılmalıdır.
- Mail yerine ekranda bilgi verilmemelidir.
- Kullanıcı bulunmasa bile aynı mesaj gösterilmelidir.
