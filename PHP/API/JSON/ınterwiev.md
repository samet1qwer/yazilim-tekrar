# PHP API / JSON | Mülakat Soruları

## 1. JSON nedir?

Uygulamalar arasında veri alışverişi yapmak için kullanılan hafif bir veri formatıdır.

---

## 2. PHP'de JSON nasıl oluşturulur?

`json_encode()` fonksiyonu kullanılır.

```php
echo json_encode($data);
```

---

## 3. application/json ne anlama gelir?

HTTP response'unun JSON formatında olduğunu belirtir.

---

## 4. header() neden kullanılır?

HTTP response header bilgilerini değiştirmek için kullanılır.

---

## 5. $\_POST nedir?

HTTP POST isteğiyle gönderilen form verilerine erişmek için kullanılan PHP superglobal değişkenidir.

---

## 6. Prepared Statement neden kullanılır?

SQL sorgularında kullanıcı verisini SQL kodundan ayırarak SQL Injection riskini azaltmak için kullanılır.

---

## 7. json_encode() ne işe yarar?

PHP array veya object gibi verileri JSON stringine dönüştürür.

---

## 8. isset() ne işe yarar?

Bir değişkenin tanımlı olup olmadığını kontrol eder.

---

## 9. API'de HTTP status code neden önemlidir?

İstemcinin işlemin sonucunu standart şekilde anlayabilmesini sağlar.

Örneğin:

- `200` → Başarılı
- `201` → Kaynak oluşturuldu
- `400` → Hatalı istek
- `401` → Yetkisiz
- `404` → Bulunamadı
- `500` → Sunucu hatası

---

## 10. MD5 güvenli midir?

Hayır.

MD5 günümüzde güvenlik amaçlı hashleme için güvenli kabul edilmez.

---

## 11. Tarihi neden MD5 ile hashlememeliyiz?

Tarih gibi bir verinin hashlenmesine gerek yoktur. Tarih veritabanında uygun bir `DATE` veya `DATETIME` alanında saklanmalıdır.

---

## 12. API'de input validation neden önemlidir?

Geçersiz, eksik veya beklenmeyen verilerin sisteme gönderilmesini engellemek için.

---

## 13. API ile normal PHP sayfası arasındaki fark nedir?

API genellikle uygulamalar arasında veri alışverişi sağlar ve JSON gibi makine tarafından işlenebilir formatlar kullanır.

---

## 14. POST ile GET arasındaki temel fark nedir?

GET genellikle veri almak için, POST ise veri göndermek veya sunucuda değişiklik oluşturmak için kullanılır.

---

## 15. Gerçek projelerde JSON API nasıl daha güvenli hale getirilir?

- Input Validation
- Prepared Statement
- Authentication
- Authorization
- Rate Limiting
- HTTPS
- Doğru HTTP status code
- Standart hata response'ları
- Hassas verilerin response'tan çıkarılması

kullanılmalıdır.
