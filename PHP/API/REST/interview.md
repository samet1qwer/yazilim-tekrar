# PHP REST API | Mülakat Soruları

## 1. REST API nedir?

HTTP üzerinden kaynaklarla iletişim kurmak için kullanılan REST mimari yaklaşımına göre tasarlanmış API'dir.

---

## 2. REST'in açılımı nedir?

**Representational State Transfer**

---

## 3. GET ne için kullanılır?

Sunucudan veri almak için kullanılır.

---

## 4. POST ne için kullanılır?

Yeni bir kaynak oluşturmak için kullanılır.

---

## 5. PUT ne için kullanılır?

Mevcut bir kaynağı güncellemek için kullanılır.

---

## 6. DELETE ne için kullanılır?

Bir kaynağı silmek için kullanılır.

---

## 7. PATCH ile PUT arasındaki fark nedir?

PUT genellikle kaynağın tamamını güncellemek için, PATCH ise kaynağın belirli alanlarını kısmi olarak güncellemek için kullanılır.

---

## 8. $\_SERVER["REQUEST_METHOD"] ne işe yarar?

Gelen HTTP isteğinin metodunu öğrenmek için kullanılır.

---

## 9. php://input nedir?

HTTP request body içerisindeki ham veriyi okumak için kullanılan PHP stream'idir.

---

## 10. json_decode() ne işe yarar?

JSON verisini PHP array veya object yapısına dönüştürür.

---

## 11. json_encode() ne işe yarar?

PHP array veya object verisini JSON formatına dönüştürür.

---

## 12. 405 HTTP status code nedir?

İstek metodu sunucu tarafından desteklenmediğinde kullanılan `Method Not Allowed` status code'udur.

---

## 13. 200 ve 201 arasındaki fark nedir?

- `200 OK` → İstek başarılı.
- `201 Created` → Yeni bir kaynak başarıyla oluşturuldu.

---

## 14. REST API'de Authentication ve Authorization arasındaki fark nedir?

**Authentication:** Kullanıcının kim olduğunu doğrular.

**Authorization:** Kullanıcının hangi kaynaklara veya işlemlere erişebileceğini belirler.

---

## 15. REST API neden JSON kullanır?

JSON hafif, okunabilir ve farklı programlama dilleri tarafından kolayca işlenebilir olduğu için API'lerde yaygın olarak kullanılır.

---

## 16. REST API'de Input Validation neden önemlidir?

İstemciden gelen verilerin beklenen formatta olup olmadığını kontrol etmek ve hatalı veya kötü amaçlı verilerin işlenmesini engellemek için.

---

## 17. REST API nasıl güvenli hale getirilir?

- HTTPS
- Authentication
- Authorization
- Input Validation
- Rate Limiting
- CORS kontrolü
- Prepared Statement
- Güvenli hata yönetimi

kullanılmalıdır.

---

## 18. REST API'de Endpoint nedir?

API içerisinde belirli bir kaynağa erişmek için kullanılan URL adresidir.

Örneğin:

```text
/api/v1/todos
/api/v1/todos/1
```

---

## 19. Idempotent işlem nedir?

Aynı isteğin birden fazla kez uygulanmasının kaynağı aynı son duruma getirmesi anlamına gelir.

PUT ve DELETE genellikle idempotent işlemlerdir.

---

## 20. REST API'de Versioning neden kullanılır?

API'nin yeni sürümlerini mevcut istemcileri bozmadan geliştirmek için kullanılır.

Örneğin:

```text
/api/v1/todos
/api/v2/todos
```
