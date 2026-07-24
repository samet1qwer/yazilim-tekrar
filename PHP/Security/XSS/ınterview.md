# PHP Security - XSS | Mülakat Soruları

## 1. XSS nedir?

Cross Site Scripting (XSS), saldırganın web sayfasına zararlı JavaScript kodu enjekte etmesini sağlayan güvenlik açığıdır.

---

## 2. XSS'in kaç türü vardır?

- Stored XSS
- Reflected XSS
- DOM Based XSS

---

## 3. htmlspecialchars() ne işe yarar?

HTML özel karakterlerini güvenli HTML Entity'lerine dönüştürerek JavaScript kodlarının çalışmasını engeller.

---

## 4. ENT_QUOTES ne işe yarar?

Tek ve çift tırnak karakterlerini de dönüştürür.

---

## 5. XSS ile SQL Injection aynı şey midir?

Hayır.

- SQL Injection veritabanını hedef alır.
- XSS kullanıcı tarayıcısını hedef alır.

---

## 6. Kullanıcı verisi neden doğrudan echo edilmemelidir?

Çünkü zararlı HTML veya JavaScript kodları çalıştırılabilir.

---

## 7. Output Escaping nedir?

Veriyi ekrana yazdırmadan önce güvenli hale getirme işlemidir.

---

## 8. htmlspecialchars() hangi durumlarda kullanılmalıdır?

HTML içerisine kullanıcı verisi yazdırılırken kullanılmalıdır.

---

## 9. CSP (Content Security Policy) nedir?

Tarayıcının hangi JavaScript kaynaklarını çalıştırabileceğini belirleyen güvenlik mekanizmasıdır.

---

## 10. Reflected XSS nedir?

Zararlı kodun istekle birlikte gönderilip aynı istekte kullanıcıya geri döndürülmesidir.

---

## 11. Stored XSS nedir?

Zararlı kodun veritabanına kaydedilip daha sonra diğer kullanıcılara gösterilmesidir.

---

## 12. DOM Based XSS nedir?

XSS'in yalnızca istemci tarafındaki JavaScript kodları üzerinden oluştuğu saldırı türüdür.

---

## 13. htmlspecialchars() her durumda yeterli midir?

Hayır.

HTML çıktıları için uygundur ancak JavaScript, CSS veya URL bağlamlarında farklı escaping yöntemleri kullanılmalıdır.

---

## 14. Gerçek projelerde XSS nasıl önlenir?

- Output Escaping uygulanmalıdır.
- `htmlspecialchars()` kullanılmalıdır.
- CSP kullanılmalıdır.
- Kullanıcı girdileri doğrulanmalıdır.
- Güvenlik başlıkları eklenmelidir.
- Modern frameworklerin otomatik escaping özelliklerinden yararlanılmalıdır.

```

```
