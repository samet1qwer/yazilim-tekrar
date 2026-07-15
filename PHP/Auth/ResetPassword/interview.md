# PHP Reset Password - Mülakat Soruları

## 1. Reset Password sistemi nasıl çalışır?

- Kullanıcı maildeki bağlantıya tıklar.
- Token doğrulanır.
- Token süresi kontrol edilir.
- Yeni parola alınır.
- Parola hash'lenir.
- Veritabanı güncellenir.

---

## 2. Token neden kontrol edilir?

Parola değiştirme yetkisinin gerçekten kullanıcıya ait olduğunu doğrulamak için.

---

## 3. Token süresi neden kontrol edilir?

Eski bağlantıların kullanılmasını önlemek için.

---

## 4. `time()` ne döndürür?

Unix Timestamp döndürür.

---

## 5. `password_hash()` neden kullanılır?

Parolayı güvenli şekilde hash'lemek için.

---

## 6. `password_verify()` nerede kullanılır?

Login işlemi sırasında.

---

## 7. Neden iki kez parola girilir?

Kullanıcının yanlış parola yazmasını önlemek için.

---

## 8. Prepared Statement neden kullanılır?

SQL Injection saldırılarını önlemek için.

---

## 9. Başarılı işlemden sonra token ile ne yapılmalıdır?

Silinmeli veya geçersiz hale getirilmelidir.

---

## 10. HTTPS neden önemlidir?

Token'ın ağ üzerinde ele geçirilmesini önlemek için.

---

## 11. Şifre güncellendikten sonra kullanıcıya ne yapılmalıdır?

Login sayfasına yönlendirilebilir veya otomatik giriş yaptırılabilir.

---

## 12. Bu örnekte hangi güvenlik önlemleri uygulanmıştır?

- ✅ Prepared Statement
- ✅ Token doğrulama
- ✅ Token süresi kontrolü
- ✅ password_hash()

---

## 13. Bu örnekte hangi eksikler vardır?

- Token işlem sonrası silinmiyor.
- expires alanı temizlenmiyor.
- Şifre uzunluğu kontrol edilmiyor.
- Güçlü parola kontrolü yok.
- CSRF koruması yok.
- Rate Limiting yok.
