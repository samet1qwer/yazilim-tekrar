# PHP Cookie | Mülakat Soruları

## 1. Cookie nedir?

Tarayıcı tarafında saklanan küçük veri parçalarıdır.

---

## 2. Session ile Cookie arasındaki fark nedir?

Session sunucuda saklanır.

Cookie istemcide (tarayıcıda) saklanır.

---

## 3. setcookie() ne işe yarar?

Tarayıcıya yeni bir Cookie oluşturur.

---

## 4. Remember Me sistemi nasıl çalışır?

- Kullanıcı giriş yapar.
- Rastgele Token oluşturulur.
- Token veritabanına kaydedilir.
- Cookie oluşturulur.
- Sonraki ziyaretlerde Cookie doğrulanır.

---

## 5. random_bytes() neden kullanılır?

Tahmin edilmesi zor güvenli token üretmek için.

---

## 6. HttpOnly nedir?

JavaScript'in Cookie'ye erişmesini engelleyen güvenlik özelliğidir.

---

## 7. Secure Cookie nedir?

Cookie'nin yalnızca HTTPS bağlantılarında gönderilmesini sağlar.

---

## 8. Cookie içerisinde neden kullanıcı ID'si saklanmaz?

Kolayca değiştirilebilir ve hesap ele geçirme riskine yol açabilir.

---

## 9. Remember Token neden hash olarak saklanmalıdır?

Veritabanı ele geçirilse bile gerçek token'ın öğrenilmesini önlemek için.

---

## 10. Logout işleminde ne yapılmalıdır?

- Session sonlandırılmalıdır.
- Cookie silinmelidir.
- Veritabanındaki Remember Token temizlenmelidir.

---

## 11. Cookie'nin güvenli olması için hangi bayraklar kullanılmalıdır?

- HttpOnly
- Secure
- SameSite

---

## 12. Cookie hangi saldırılara karşı korunmalıdır?

- XSS
- Session Hijacking
- Cookie Theft
- Session Fixation

---

## 13. SameSite Cookie nedir?

CSRF saldırılarına karşı koruma sağlayan Cookie özelliğidir.

Değerleri:

- `Strict`
- `Lax`
- `None`

---

## 14. Gerçek projelerde Remember Me sistemi nasıl daha güvenli hale getirilebilir?

- Token hash olarak saklanmalıdır.
- Her girişte yeni token üretilmelidir.
- Logout'ta token silinmelidir.
- Token süresi sınırlandırılmalıdır.
- SameSite, HttpOnly ve Secure bayrakları kullanılmalıdır.
