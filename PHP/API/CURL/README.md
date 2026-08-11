# PHP cURL - HTTP Request

## Amaç

Bu örnek, PHP'nin cURL kütüphanesini kullanarak bir web sunucusuna HTTP isteği göndermeyi ve sunucudan dönen cevabı almayı göstermektedir.

## Kullanılan Teknolojiler

- PHP
- cURL
- HTTP
- HTTPS

## İşleyiş

1. Hedef URL belirlenir.
2. `curl_init()` ile cURL oturumu başlatılır.
3. `CURLOPT_RETURNTRANSFER` ile response'un doğrudan ekrana basılması yerine değişkene alınması sağlanır.
4. `curl_exec()` ile HTTP isteği gönderilir.
5. Sunucudan gelen response `$response` değişkenine aktarılır.
6. `curl_close()` ile cURL oturumu kapatılır.
7. Response ekrana yazdırılır.

## Kullanılan Fonksiyonlar

| Fonksiyon       | Açıklama                          |
| --------------- | --------------------------------- |
| `curl_init()`   | cURL oturumunu başlatır.          |
| `curl_setopt()` | cURL seçeneklerini yapılandırır.  |
| `curl_exec()`   | HTTP isteğini gerçekleştirir.     |
| `curl_close()`  | cURL oturumunu kapatır.           |
| `echo`          | Dönen response'u ekrana yazdırır. |

## Kullanılan cURL Ayarı

```php
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
```

Bu ayar sayesinde `curl_exec()` response'u doğrudan ekrana yazdırmak yerine geri döndürür.

## Örnek Kod

```php
<?php

$hedef_url = "https://sametkarakurt.com.tr";

$ch = curl_init($hedef_url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

echo $response;
```

## Senaryo

PHP uygulaması:

```text
PHP Application
      |
      | cURL HTTP Request
      ↓
Web Server
      |
      | HTTP Response
      ↓
PHP Application
```

## Dikkat Edilecekler

- URL'nin `https://` ile başlaması tercih edilmelidir.
- cURL hataları kontrol edilmelidir.
- HTTP status code kontrol edilmelidir.
- Hassas bilgiler URL içerisine yazılmamalıdır.
- SSL/TLS doğrulaması production ortamında kapatılmamalıdır.
