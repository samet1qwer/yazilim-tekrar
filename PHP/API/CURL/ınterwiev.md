# PHP cURL | Mülakat Soruları

## 1. cURL nedir?

Sunucular arasında veri gönderip almak için kullanılan bir araç ve kütüphanedir.

---

## 2. PHP'de cURL ne için kullanılır?

Harici API'lere HTTP/HTTPS istekleri göndermek ve response almak için kullanılır.

---

## 3. curl_init() ne işe yarar?

Yeni bir cURL oturumu başlatır.

---

## 4. curl_setopt() ne işe yarar?

cURL isteğinin ayarlarını yapılandırır.

---

## 5. CURLOPT_RETURNTRANSFER ne işe yarar?

Response'un doğrudan ekrana yazdırılması yerine değişken olarak döndürülmesini sağlar.

---

## 6. curl_exec() ne işe yarar?

Hazırlanan cURL isteğini çalıştırır.

---

## 7. curl_close() neden kullanılır?

cURL oturumunu kapatmak ve kullanılan kaynakları serbest bırakmak için kullanılır.

---

## 8. cURL varsayılan olarak hangi HTTP metodunu kullanır?

Ek bir ayar yapılmadığında GET kullanır.

---

## 9. HTTP status code nasıl alınır?

```php
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
```

ile alınabilir.

---

## 10. cURL hatası nasıl kontrol edilir?

```php
if ($response === false) {
    echo curl_error($ch);
}
```

şeklinde kontrol edilebilir.

---

## 11. cURL ile POST isteği nasıl gönderilir?

`CURLOPT_POST` ve `CURLOPT_POSTFIELDS` kullanılabilir.

---

## 12. CURLOPT_TIMEOUT ne işe yarar?

İsteğin maksimum çalışma süresini belirler.

---

## 13. CURLOPT_CONNECTTIMEOUT ne işe yarar?

Sunucuya bağlantı kurulması için beklenecek maksimum süreyi belirler.

---

## 14. cURL ile API arasında nasıl bir ilişki vardır?

API bir servis arayüzüdür.

cURL ise bu API'ye HTTP isteği göndermek için kullanılabilecek araçlardan biridir.

---

## 15. cURL ile hangi HTTP metodları kullanılabilir?

- GET
- POST
- PUT
- PATCH
- DELETE

---

## 16. Gerçek projelerde cURL kullanırken nelere dikkat edilmelidir?

- Timeout belirlenmelidir.
- Connection timeout belirlenmelidir.
- HTTP status code kontrol edilmelidir.
- cURL hataları kontrol edilmelidir.
- HTTPS kullanılmalıdır.
- SSL/TLS doğrulaması kapatılmamalıdır.
- API anahtarları ve hassas bilgiler güvenli şekilde saklanmalıdır.
