# Notlar

## XSS Nedir?

Cross Site Scripting (XSS), saldırganın web sayfasına zararlı JavaScript kodu enjekte etmesine olanak sağlayan güvenlik açığıdır.

---

## htmlspecialchars()

```php
htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
```

Özel karakterleri HTML Entity'lerine dönüştürerek tarayıcının bunları kod olarak çalıştırmasını engeller.

---

## ENT_QUOTES

```php
ENT_QUOTES
```

Hem tek (`'`) hem de çift (`"`) tırnak karakterlerini dönüştürür.

---

## UTF-8

```php
'UTF-8'
```

Karakter kodlamasını belirtir ve Unicode karakterlerin doğru işlenmesini sağlar.

---

## PDO

```php
$stmt = $db->prepare(...);
```

SQL Injection saldırılarına karşı güvenli sorgu oluşturur.

---

## Session Kontrolü

```php
if (!$_SESSION['user_id'])
```

Giriş yapmamış kullanıcıların sayfaya erişmesini engeller.

---

## Güvensiz Kullanım

```php
echo $row['name'];
```

Bu kullanım XSS saldırısına neden olabilir.

---

## Güvenli Kullanım

```php
echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
```

Tarayıcıya yalnızca düz metin gönderilir.

---

## Dikkat Edilecekler

- Kullanıcıdan gelen hiçbir veri doğrudan ekrana yazdırılmamalıdır.
- HTML içerisinde gösterilecek tüm veriler escape edilmelidir.
- `htmlspecialchars()` çıktı üretirken kullanılmalıdır.
- SQL Injection ve XSS farklı güvenlik açıklarıdır.

---

## Best Practices

- Her zaman Output Escaping uygulayın.
- UTF-8 karakter seti kullanın.
- Kullanıcı girdilerini doğrulayın.
- Güvenlik başlıkları (CSP, X-Content-Type-Options vb.) ekleyin.
- Modern frameworklerin otomatik escaping özelliklerinden yararlanın.

---

## Güvenlik

Korunulması gereken saldırılar:

- Reflected XSS
- Stored XSS
- DOM Based XSS

`htmlspecialchars()` HTML çıktısı için etkili bir koruma sağlar ancak JavaScript, CSS veya URL bağlamlarında farklı escaping yöntemleri kullanılmalıdır.
