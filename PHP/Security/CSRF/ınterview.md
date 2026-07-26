# PHP Security - CSRF | Mülakat Soruları

## 1. CSRF nedir?

Cross-Site Request Forgery, kullanıcının bilgisi olmadan kimliği doğrulanmış isteğin başka bir site üzerinden gönderilmesini sağlayan saldırıdır.

---

## 2. CSRF Token nedir?

Her kullanıcı veya form için oluşturulan, tahmin edilmesi zor doğrulama anahtarıdır.

---

## 3. CSRF Token neden Session'da saklanır?

Kullanıcının değiştiremeyeceği güvenli bir yerde tutulması için.

---

## 4. random_bytes() neden kullanılır?

Kriptografik olarak güvenli rastgele Token üretmek için.

---

## 5. bin2hex() ne işe yarar?

Binary veriyi hexadecimal karakter dizisine dönüştürür.

---

## 6. CSRF Token forma nasıl eklenmelidir?

```html
<input type="hidden" name="csrf_token" />
```

şeklinde gönderilmelidir.

---

## 7. Token doğrulaması nasıl yapılır?

Formdan gelen Token ile Session'daki Token karşılaştırılır.

---

## 8. CSRF sadece POST isteklerinde mi görülür?

En çok POST isteklerinde görülür ancak durum değiştiren tüm istekler korunmalıdır.

---

## 9. SameSite Cookie nedir?

Cookie'nin farklı sitelerden gelen isteklerde gönderilmesini sınırlandırarak CSRF riskini azaltan güvenlik özelliğidir.

---

## 10. HTTPS neden önemlidir?

Token'ın ağ üzerinde ele geçirilmesini zorlaştırır.

---

## 11. XSS ile CSRF arasındaki fark nedir?

- XSS, kullanıcı tarayıcısında zararlı kod çalıştırır.
- CSRF, kullanıcının oturumunu kullanarak sahte istek gönderir.

---

## 12. CSRF Token tek kullanımlık olabilir mi?

Evet. Özellikle kritik işlemlerde her istek için yeni Token üretmek daha güvenlidir.

---

## 13. Token doğrulaması başarısız olursa ne yapılmalıdır?

İstek reddedilmeli ve işlem gerçekleştirilmemelidir.

---

## 14. Gerçek projelerde CSRF koruması nasıl güçlendirilir?

- Güçlü ve rastgele Token kullanılmalıdır.
- Token Session'da saklanmalıdır.
- Hidden input ile gönderilmelidir.
- SameSite Cookie kullanılmalıdır.
- HTTPS zorunlu olmalıdır.
- Origin ve Referer doğrulaması yapılmalıdır.

```

```
