# Notlar

## CSRF Nedir?

Cross-Site Request Forgery (CSRF), kullanıcının oturumu açıkken haberi olmadan istek göndermesini sağlayan saldırı türüdür.

---

## CSRF Token

CSRF saldırılarını önlemek için her forma benzersiz bir Token eklenir.

---

## Session

```php
$_SESSION['csrf_token']
```

Token sunucu tarafında saklanır.

---

## random_bytes()

```php
random_bytes(32);
```

Kriptografik olarak güvenli rastgele veri üretir.

---

## bin2hex()

```php
bin2hex(random_bytes(32));
```

Üretilen byte dizisini hexadecimal karakter dizisine dönüştürür.

---

## Token Doğrulama

```php
if ($_POST['csrf_token'] == $_SESSION['csrf_token'])
```

Formdan gelen Token ile Session'daki Token karşılaştırılır.

---

## Hidden Input

Gerçek projelerde Token kullanıcıya gösterilmez.

```html
<input
  type="hidden"
  name="csrf_token"
  value="<?= $_SESSION['csrf_token']; ?>"
/>
```

---

## Dikkat Edilecekler

- Her kullanıcı için farklı Token oluşturulmalıdır.
- Token Session'da saklanmalıdır.
- Token tahmin edilemez olmalıdır.
- İşlem tamamlandıktan sonra Token yenilenebilir.
- HTTPS kullanılmalıdır.

---

## Best Practices

- `random_bytes()` kullanın.
- Token'ı `hidden` input ile gönderin.
- Hassas işlemlerde Token'ı tek kullanımlık yapın.
- POST isteklerinde CSRF doğrulaması yapın.
- SameSite Cookie kullanın.

---

## Güvenlik

CSRF Token aşağıdaki saldırılara karşı koruma sağlar:

- Cross-Site Request Forgery (CSRF)

Tek başına CSRF Token yeterli değildir. Gerçek projelerde ayrıca:

- SameSite Cookie
- HTTPS
- Origin / Referer doğrulaması

gibi ek güvenlik önlemleri de kullanılmalıdır.
