# PHP Security - SQL Injection | Mülakat Soruları

## 1. SQL Injection nedir?

Saldırganın SQL sorgularını manipüle ederek veritabanına yetkisiz erişim sağlamaya çalıştığı güvenlik açığıdır.

---

## 2. SQL Injection nasıl önlenir?

Prepared Statement kullanılarak önlenir.

---

## 3. Prepared Statement nedir?

SQL sorgusunu kullanıcı verisinden ayırarak güvenli çalışmasını sağlayan mekanizmadır.

---

## 4. bindParam() ne işe yarar?

Parametreleri güvenli şekilde SQL sorgusuna bağlar.

---

## 5. PDO neden tercih edilir?

Prepared Statement desteği sunduğu ve güvenli veritabanı işlemleri sağladığı için.

---

## 6. SQL Injection'a karşı string birleştirme neden kullanılmamalıdır?

Çünkü saldırgan SQL sorgusunu değiştirebilir.

---

## 7. password_hash() neden kullanılır?

Parolaları güvenli şekilde hashleyerek veritabanında düz metin olarak saklanmasını önler.

---

## 8. password_verify() ne zaman kullanılır?

Giriş sırasında kullanıcının girdiği parola ile veritabanındaki hash'i karşılaştırmak için.

---

## 9. Session kontrolü neden önemlidir?

Yetkisiz kullanıcıların işlem yapmasını engeller.

---

## 10. SQL Injection hangi OWASP kategorisinde yer alır?

OWASP Top 10 içerisinde **Injection** kategorisinde yer alır.

---

## 11. SQL Injection'ın sonuçları nelerdir?

- Veri sızdırma
- Veri silme
- Veri değiştirme
- Yetki yükseltme
- Kimlik doğrulama atlatma

---

## 12. Parametreli sorgular neden güvenlidir?

Kullanıcı verisi SQL kodu olarak değil, veri olarak işlenir.

---

## 13. Gerçek projelerde SQL Injection'a karşı başka hangi önlemler alınabilir?

- Yetki kontrolleri
- Input Validation
- ORM kullanımı
- En az yetki prensibi (Least Privilege)
- Hata mesajlarını gizleme
- WAF kullanımı

---

## 14. SQL Injection ile XSS arasındaki fark nedir?

- SQL Injection veritabanını hedef alır.
- XSS kullanıcı tarayıcısını hedef alır.

```

```
