# PHP Cookie - Mülakat Soruları

## 1. Remember Me sistemi nedir?

Kullanıcının tekrar giriş yapmadan oturum açmasını sağlayan sistemdir.

---

## 2. Remember Me nasıl çalışır?

- Token oluşturulur.
- Veritabanına hash olarak kaydedilir.
- Tarayıcıya Cookie yazılır.
- Sonraki girişlerde doğrulanır.

---

## 3. Cookie neden kullanılır?

Kullanıcı bilgilerini istemci tarafında kısa süreli saklamak için kullanılır.

---

## 4. Session ile Cookie arasındaki fark nedir?

Session sunucuda tutulur.

Cookie tarayıcıda tutulur.

---

## 5. Neden kullanıcı ID'si Cookie'ye yazılmaz?

Kolayca değiştirilebilir ve hesap ele geçirme riskine neden olabilir.

---

## 6. Token neden hash olarak saklanmalıdır?

Veritabanı ele geçirilse bile gerçek token öğrenilemez.

---

## 7. password_hash() ile neden arama yapılmaz?

Çünkü her çağrıldığında farklı hash üretir.

---

## 8. Doğru doğrulama yöntemi nedir?

`password_verify()` kullanılarak yapılmalıdır.

---

## 9. Logout işleminde ne yapılmalıdır?

- Session silinir.
- Cookie silinir.
- Remember Token veritabanından kaldırılır.

---

## 10. Remember Me sistemi hangi saldırılara karşı korunmalıdır?

- XSS
- Session Hijacking
- Cookie Theft
- Session Fixation
- CSRF

---

## 11. Secure Cookie nedir?

Cookie'nin yalnızca HTTPS üzerinden gönderilmesini sağlar.

---

## 12. HttpOnly ne işe yarar?

JavaScript'in Cookie'ye erişmesini engeller.

---

## 13. SameSite ne işe yarar?

CSRF saldırılarına karşı koruma sağlar.

---

## 14. Gerçek projelerde Remember Me sistemi nasıl olmalıdır?

- Rastgele token kullanılmalıdır.
- Hash olarak saklanmalıdır.
- password_verify() ile doğrulanmalıdır.
- Süresi sınırlandırılmalıdır.
- Logout'ta silinmelidir.
- HttpOnly, Secure ve SameSite kullanılmalıdır.
