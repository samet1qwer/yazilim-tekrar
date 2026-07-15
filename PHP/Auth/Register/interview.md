# PHP Register - Mülakat Soruları

## 1. `password_hash()` neden kullanılır?

Parolaları güvenli bir şekilde hash'lemek için kullanılır. Veritabanında düz metin parola saklanmamalıdır.

---

## 2. `password_verify()` ne işe yarar?

Kullanıcının girdiği parola ile veritabanındaki hash'i karşılaştırır.

```php
password_verify($password, $user["UserPassword"]);
```

---

## 3. `filter_var()` ne için kullanılır?

Veriyi doğrulamak veya filtrelemek için kullanılır.

Örneğin e-posta doğrulama:

```php
filter_var($email, FILTER_VALIDATE_EMAIL);
```

---

## 4. `trim()` neden kullanılır?

Girilen verinin başındaki ve sonundaki boşlukları temizlemek için kullanılır.

```php
$username = trim($_POST["Username"]);
```

---

## 5. Neden Prepared Statement kullanılır?

SQL Injection saldırılarını önlemek için.

```php
$stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
$stmt->execute([$email]);
```

---

## 6. Aynı kullanıcı adı neden tekrar kontrol edilir?

Veri bütünlüğünü korumak ve duplicate kayıt oluşmasını engellemek için.

---

## 7. `rowCount()` ne döndürür?

Sorgudan dönen kayıt sayısını döndürür.

```php
$count = $stmt->rowCount();
```

---

## 8. Session neden kullanılır?

Kullanıcı bilgilerini veya hata mesajlarını sayfalar arasında taşımak için.

```php
$_SESSION["error"] = "Hata mesajı";
```

---

## 9. `header()` fonksiyonundan sonra neden `exit()` kullanılır?

Yönlendirmeden sonra kodun çalışmaya devam etmesini engellemek için.

```php
header("Location: Login.php");
exit();
```

---

## 10. `password_hash()` sonucu neden her seferinde farklıdır?

Rastgele bir **salt** kullanıldığı için aynı parola her seferinde farklı hash üretir.

---

## 11. Şifre uzunluğu neden hash oluşturmadan önce kontrol edilmelidir?

Çünkü `password_hash()` çıktısı yaklaşık 60 karakterdir.

Yanlış:

```php
$hash = password_hash($password, PASSWORD_DEFAULT);

strlen($hash);
```

Doğru:

```php
strlen($password);
```

---

## 12. `FILTER_VALIDATE_EMAIL` ne döndürür?

- Geçerliyse e-posta adresini döndürür.
- Geçersizse `false` döndürür.

---

## 13. SQL Injection nedir?

Kullanıcının SQL sorgusunu değiştirecek şekilde veri göndermesidir.

Korunma yöntemi:

- Prepared Statement
- Parametre bağlama

---

## 14. XSS nedir?

Kötü amaçlı JavaScript kodunun sayfaya enjekte edilmesidir.

Korunma yöntemi:

```php
htmlspecialchars()
```

---

## 15. CSRF nedir?

Kullanıcının bilgisi dışında başka bir siteden istek gönderilmesidir.

Korunma yöntemi:

- CSRF Token
- SameSite Cookie

---

## 16. Registration sırasında başka hangi kontroller yapılabilir?

- Güçlü parola kontrolü
- Telefon doğrulaması
- E-posta doğrulaması
- CAPTCHA
- Rate Limiting
- Kullanıcı adı karakter kontrolü

---

## 17. Veritabanında parola nasıl saklanmalıdır?

✅ Hash olarak

```php
password_hash($password, PASSWORD_DEFAULT);
```

❌ Düz metin

❌ MD5

❌ SHA1

---

## 18. Kullanıcı kayıt olurken neden e-posta kontrol edilir?

- Aynı e-posta ile ikinci hesap açılmasını önlemek
- Hesap doğrulama işlemlerini desteklemek
- Parola sıfırlama işlemlerini mümkün kılmak

---

## 19. Bu örnekte hangi güvenlik önlemleri uygulanmıştır?

- ✅ Prepared Statement
- ✅ password_hash()
- ✅ Session
- ✅ Email doğrulama
- ✅ Duplicate kullanıcı kontrolü

---

## 20. Bu örnek nasıl geliştirilebilir?

- E-posta doğrulama bağlantısı
- Şifre karmaşıklığı kontrolü
- Rate Limiting
- CSRF koruması
- CAPTCHA
- Kullanıcı adı kuralları
- Log kayıtları
