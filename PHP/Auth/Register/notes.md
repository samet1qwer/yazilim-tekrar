# Notlar

## trim()

Kullanıcının yanlışlıkla girdiği boşlukları temizler.

```php
$Username = trim($_POST["Username"]);
```

---

## filter_var()

E-posta adresinin geçerli formatta olup olmadığını kontrol eder.

```php
$Email = filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL);
```

Başarısız olursa `false` döndürür.

---

## password_hash()

Şifreyi güvenli şekilde hash'ler.

```php
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
```

Veritabanına hiçbir zaman düz metin parola kaydedilmemelidir.

---

## Kullanıcı Kontrolü

Aynı kullanıcı adı veya e-posta tekrar kayıt olamasın diye kontrol edilir.

```php
SELECT *
FROM user
WHERE Username = ?
OR Email = ?
```

---

## Prepared Statement

SQL Injection saldırılarına karşı koruma sağlar.

```php
$stmt = $conn->prepare(...);
$stmt->execute(...);
```

---

## Session

Hata mesajları Session ile taşınır.

```php
$_SESSION["error"] = "Mesaj";
```

---

## Redirect

İşlem tamamlandıktan sonra kullanıcı başka sayfaya yönlendirilir.

```php
header("Location: ../Login/Login.php");
exit();
```

---

# Dikkat Edilecekler

- Şifre uzunluğu **hash oluşturmadan önce** kontrol edilmelidir.
- E-posta doğrulaması yalnızca formatı kontrol eder, adresin gerçekten var olduğunu doğrulamaz.
- Kullanıcı adı için minimum ve maksimum karakter sınırı belirlenebilir.
- Şifre karmaşıklığı (büyük harf, küçük harf, sayı, özel karakter) kontrolü eklenebilir.
- Başarılı kayıt sonrası otomatik giriş yapılması veya e-posta doğrulaması gibi ek güvenlik adımları uygulanabilir.
