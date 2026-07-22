# Notlar

## Session Nedir?

Session, kullanıcıya ait verilerin sunucu tarafında saklanmasını sağlayan mekanizmadır.

---

## session_start()

```php
session_start();
```

Session kullanılmadan önce çağrılmalıdır.

---

## $\_SESSION

```php
$_SESSION
```

Kullanıcıya ait tüm oturum verilerini tutar.

---

## Session Dizisi

```php
$_SESSION['sepet']
```

Sepette bulunan ürünleri saklar.

---

## PDO

```php
$stmt = $db->prepare(...);
```

SQL Injection saldırılarına karşı güvenli sorgu oluşturur.

---

## fetch()

```php
$stmt->fetch(PDO::FETCH_ASSOC);
```

Veritabanından tek kayıt döndürür.

---

## JSON Response

```php
echo json_encode(...);
```

İstemciye JSON formatında cevap gönderir.

---

## Dikkat Edilecekler

- Session başlatılmadan Session kullanılamaz.
- Kullanıcıdan gelen ürün fiyatına güvenilmemelidir.
- Ürün bilgileri veritabanından alınmalıdır.
- Session içerisine gereksiz büyük veriler yazılmamalıdır.
- Session düzenli olarak temizlenmelidir.

---

## Best Practices

- Ürün bilgilerini her zaman veritabanından alın.
- Session'a yalnızca gerekli bilgileri kaydedin.
- Session timeout süresi belirleyin.
- Giriş yapan kullanıcı için Session ID yenileyin (`session_regenerate_id()`).

---

## Güvenlik

Session kullanırken dikkat edilmesi gereken saldırılar:

- Session Hijacking
- Session Fixation
- XSS
- CSRF

Gerçek projelerde Session ID'leri düzenli olarak yenilenmeli ve yalnızca HTTPS üzerinden iletilmelidir.
