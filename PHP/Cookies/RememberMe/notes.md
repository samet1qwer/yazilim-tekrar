# Notlar

## Cookie Nedir?

Cookie, tarayıcı tarafında saklanan küçük veri parçalarıdır.

---

## Remember Me

Kullanıcının tekrar giriş yapmasını engeller.

---

## setcookie()

Cookie oluşturur.

```php
setcookie(
    "remember_token",
    $token,
    time() + 60 * 60 * 24 * 30,
    "/",
    "",
    true,
    true
);
```

---

## Cookie Süresi

```php
time() + 60 * 60 * 24 * 30
```

30 günlük Cookie oluşturur.

---

## random_bytes()

Tahmin edilmesi zor rastgele veri üretir.

```php
random_bytes(32);
```

---

## password_hash()

Remember Token veritabanında hash olarak saklanmalıdır.

---

## HttpOnly

```php
true
```

JavaScript'in Cookie'ye erişmesini engeller.

---

## Secure

```php
true
```

Cookie yalnızca HTTPS üzerinden gönderilir.

---

## Session

Kullanıcının aktif oturumu sunucuda tutulur.

---

## Dikkat Edilecekler

- Cookie içerisine kullanıcı bilgileri yazılmamalıdır.
- Token tahmin edilemez olmalıdır.
- Logout işleminde Cookie silinmelidir.
- Token süresi dolunca geçersiz hale getirilmelidir.
- HTTPS kullanılmalıdır.
