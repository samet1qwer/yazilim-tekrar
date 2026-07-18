# PHP Native Mail | Mülakat Soruları

## mail() ne işe yarar?

PHP'nin yerleşik e-posta gönderme fonksiyonudur.

---

## mail() neden her sunucuda çalışmayabilir?

Sunucuda SMTP veya mail servisi yapılandırılmamış olabilir.

---

## HTML mail nasıl gönderilir?

Content-Type header'ı kullanılarak.

---

## Reply-To nedir?

Mail'e cevap verildiğinde kullanılacak adres.

---

## Native mail() gerçek projelerde kullanılır mı?

Küçük projelerde kullanılabilir.

Büyük projelerde genellikle PHPMailer tercih edilir.

---

## mail() fonksiyonunun dezavantajları nelerdir?

- SMTP desteği sınırlıdır.
- Teslim garantisi yoktur.
- Hata yönetimi zayıftır.
- Ek dosya göndermek zordur.
