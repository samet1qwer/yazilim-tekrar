# Notlar

## cURL Nedir?

cURL, farklı protokoller üzerinden veri göndermek ve almak için kullanılan bir araçtır.

PHP içerisinde cURL extension'ı kullanılarak HTTP/HTTPS istekleri gönderilebilir.

---

## curl_init()

```php
$ch = curl_init($hedef_url);
```

Yeni bir cURL oturumu başlatır.

---

## curl_setopt()

```php
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
```

cURL davranışını yapılandırmak için kullanılır.

---

## CURLOPT_RETURNTRANSFER

```php
CURLOPT_RETURNTRANSFER
```

`curl_exec()` sonucunun doğrudan ekrana yazdırılması yerine değişken olarak döndürülmesini sağlar.

Örneğin:

```php
$response = curl_exec($ch);
```

---

## curl_exec()

```php
$response = curl_exec($ch);
```

HTTP isteğini gerçekleştirir ve response'u döndürür.

---

## curl_close()

```php
curl_close($ch);
```

cURL oturumunu kapatır.

---

## GET Request

Ek bir HTTP metodu belirtilmediğinde cURL varsayılan olarak GET isteği gönderir.

```php
$ch = curl_init("https://example.com");
```

---

## Response

Sunucudan gelen cevap:

```php
$response = curl_exec($ch);
```

ile alınabilir.

---

## Hata Kontrolü

Gerçek projelerde `curl_exec()` sonucunun kontrol edilmesi gerekir.

```php
$response = curl_exec($ch);

if ($response === false) {
    echo curl_error($ch);
}
```

---

## HTTP Status Code

Sunucunun HTTP durum kodu alınabilir:

```php
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
```

Örneğin:

```text
200 → Başarılı
404 → Bulunamadı
500 → Sunucu hatası
```

---

## Dikkat Edilecekler

- cURL extension'ın aktif olması gerekir.
- HTTPS kullanılması tercih edilmelidir.
- SSL doğrulaması production ortamında kapatılmamalıdır.
- Timeout belirlenmelidir.
- Hatalar kontrol edilmelidir.
- HTTP status code kontrol edilmelidir.

---

## Best Practices

Production ortamında aşağıdaki ayarlar kullanılabilir:

```php
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
```

Böylece bağlantının veya isteğin sonsuza kadar beklemesi engellenir.

---

## cURL ile Neler Yapılabilir?

PHP cURL ile:

- GET request
- POST request
- PUT request
- DELETE request
- JSON API request
- Header gönderme
- Cookie gönderme
- Authorization header gönderme
- Dosya gönderme

gibi işlemler yapılabilir.
