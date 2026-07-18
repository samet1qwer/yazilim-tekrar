# Notlar

## Otomatik Giriş (Auto Login)

Remember Me sistemi sayesinde kullanıcı tekrar kullanıcı adı ve şifre girmeden giriş yapabilir.

---

## Session Kontrolü

```php
if(isset($_SESSION['user_id']))
```

Kullanıcı zaten giriş yaptıysa tekrar Login sayfasına gelmez.

---

## Cookie Kontrolü

```php
if(isset($_COOKIE['remember_token']))
```

Tarayıcıdaki Remember Token kontrol edilir.

---

## PDO

```php
$stmt = $get->prepare(...);
```

SQL Injection saldırılarına karşı güvenlidir.

---

## fetch()

```php
$stmt->fetch(PDO::FETCH_ASSOC);
```

Veritabanından tek kullanıcı döndürür.

---

## Session Oluşturma

```php
$_SESSION['id']
```

Kullanıcının oturumu oluşturulur.

---

## header()

```php
header("Location: Dashboard.php");
```

Başarılı doğrulama sonrasında kullanıcı yönlendirilir.

---

## exit

```php
exit;
```

Yönlendirme sonrası kodun çalışmasını durdurur.

---

## Dikkat Edilecekler

- Cookie içerisinde kullanıcı bilgileri tutulmamalıdır.
- Remember Token rastgele oluşturulmalıdır.
- Token hash olarak veritabanında saklanmalıdır.
- Her girişte yeni token üretilmelidir.
- Logout işleminde Cookie silinmelidir.
- Token süresi kontrol edilmelidir.
- HTTPS kullanılmalıdır.

---

## Best Practices

- HttpOnly kullanın.
- Secure kullanın.
- SameSite kullanın.
- Token'ı hash olarak saklayın.
- Token expire süresi belirleyin.

---

## Kod Hakkında Önemli Not

Bu örnekte bulunan

```php
password_hash($_COOKIE['remember_token'], PASSWORD_DEFAULT)
```

kullanımı doğru değildir.

Çünkü `password_hash()` her çalıştığında farklı bir hash üretir.

Doğru yöntem:

- Cookie içerisindeki gerçek token alınır.
- Veritabanındaki hash okunur.
- `password_verify()` ile doğrulanır.

Bu yöntem gerçek projelerde kullanılan güvenli yaklaşımdır.
Not:hash kısımlarına tekrardan bak...
