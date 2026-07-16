# PHP CRUD - Delete | Mülakat Soruları

## 1. CRUD nedir?

Create, Read, Update ve Delete işlemlerinin genel adıdır.

---

## 2. Delete işlemi ne yapar?

Veritabanındaki mevcut bir kaydı siler.

---

## 3. Silmeden önce neden kayıt kontrol edilir?

Olmayan bir kaydı silmeye çalışmamak ve doğru hata mesajı döndürmek için.

---

## 4. DELETE sorgusu nasıl yazılır?

```sql
DELETE FROM users WHERE id = :id;
```

---

## 5. Neden Prepared Statement kullanılır?

SQL Injection saldırılarını önlemek için.

---

## 6. `(int)` dönüşümü neden yapılır?

ID'nin tam sayı olarak kullanılmasını sağlamak için.

```php
$id = (int) $_GET["id"];
```

---

## 7. `json_encode()` ne işe yarar?

PHP dizisini JSON formatına dönüştürür.

---

## 8. DELETE işlemi hangi HTTP metoduyla yapılmalıdır?

REST mimarisinde **DELETE** metoduyla yapılmalıdır.

Bu örnekte eğitim amaçlı `GET` kullanılmıştır.

---

## 9. Gerçek projelerde GET ile Delete yapılır mı?

Hayır.

Silme işlemleri genellikle:

- DELETE
- POST (CSRF korumalı)

istekleri ile yapılır.

---

## 10. Soft Delete nedir?

Kayıt tamamen silinmez.

Örneğin:

```text
deleted_at = 2026-07-16 15:30:00
```

alanı doldurulur ve kayıt pasif hale getirilir.

---

## 11. Hard Delete nedir?

Kayıt veritabanından tamamen silinir.

---

## 12. Delete işleminde hangi güvenlik önlemleri alınmalıdır?

- Yetkilendirme
- Authentication
- CSRF Koruması
- Prepared Statement
- Log Kaydı
- Soft Delete
