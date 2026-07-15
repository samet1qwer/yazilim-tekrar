# PHP Forgot Password - Mülakat Soruları

## 1. Forgot Password sistemi nasıl çalışır?

- Kullanıcı e-posta girer.
- Token oluşturulur.
- Token veritabanına kaydedilir.
- Kullanıcıya mail gönderilir.
- Kullanıcı yeni parola oluşturur.

---

## 2. Token neden kullanılır?

Parola sıfırlama isteğinin gerçekten kullanıcıya ait olduğunu doğrulamak için.

---

## 3. Token neden rastgele olmalıdır?

Tahmin edilememesi için.

---

## 4. random_bytes() neden tercih edilir?

Kriptografik olarak güvenli rastgele veri üretir.

```php
random_bytes(50);
```

---

## 5. bin2hex() ne işe yarar?

Byte dizisini hexadecimal stringe çevirir.

---

## 6. Token neden veritabanına kaydedilir?

Gönderilen bağlantının doğrulanabilmesi için.

---

## 7. Token neden süreli olmalıdır?

Eski bağlantıların kötüye kullanılmasını önlemek için.

---

## 8. time() fonksiyonu ne döndürür?

Unix Timestamp döndürür.

---

## 9. Kullanıcı bulunamazsa ne yapılmalıdır?

Gerçek projelerde

```
Eğer hesap mevcutsa parola sıfırlama bağlantısı gönderilecektir.
```

şeklinde genel bir mesaj verilmelidir.

Böylece kullanıcıların kayıtlı olup olmadığı anlaşılamaz.

---

## 10. Bu örnekte hangi güvenlik önlemleri uygulanmıştır?

- ✅ Prepared Statement
- ✅ Güvenli Token
- ✅ Token Süresi

---

## 11. Bu örnekte hangi güvenlik eksikleri vardır?

- Token sıfırlandıktan sonra silinmiyor.
- HTTPS kullanılmıyor.
- mail() yerine PHPMailer kullanılabilir.
- Rate Limiting yok.
- Kullanıcı enumeration yapılabiliyor.

---

## 12. Gerçek projelerde mail() yerine ne kullanılır?

- PHPMailer
- Symfony Mailer
- Laravel Mail

---

## 13. Token neden URL'de gönderilir?

Kullanıcının doğrulama bağlantısı ile yeni parola oluşturabilmesi için.

---

## 14. SQL Injection nasıl engellenmiştir?

Prepared Statement kullanılarak.

---

## 15. Gerçek projelerde başka hangi güvenlik önlemleri eklenebilir?

- Rate Limiting
- CAPTCHA
- HTTPS
- Tek kullanımlık token
- IP loglama
- Mail doğrulama
- Audit Log
