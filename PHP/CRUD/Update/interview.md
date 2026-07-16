# PHP CRUD - Update | Mülakat Soruları

## 1. Update işlemi ne yapar?

Veritabanındaki mevcut bir kaydı günceller.

---

## 2. UPDATE sorgusu nasıl yazılır?

```sql
UPDATE users
SET name = :name
WHERE id = :id;
```

---

## 3. Güncellemeden önce neden kullanıcı kontrol edilir?

Olmayan bir kaydı güncellemeye çalışmamak için.

---

## 4. password_hash() neden kullanılır?

Parolayı güvenli şekilde hash'lemek için.

---

## 5. UPDATE sırasında hangi alanlar doğrulanmalıdır?

- Email
- Şifre
- Boş alanlar
- Yetkilendirme

---

## 6. Prepared Statement neden kullanılır?

SQL Injection saldırılarını önlemek için.

---

## 7. bindParam() ne işe yarar?

SQL sorgusundaki parametreleri değişkenlere bağlar.

---

## 8. UPDATE ile INSERT arasındaki fark nedir?

INSERT yeni kayıt oluşturur.

UPDATE mevcut kaydı değiştirir.

---

## 9. JSON neden kullanılır?

İstemci ile sunucu arasında veri alışverişi yapmak için.

---

## 10. Bu örnek nasıl geliştirilebilir?

- Email doğrulaması
- Şifre uzunluğu kontrolü
- Duplicate email kontrolü
- Transaction kullanımı
- Yetkilendirme
- Audit Log
