# PHP Session - Mülakat Soruları

## 1. Session nedir?

Kullanıcıya ait bilgilerin sunucu tarafında saklanmasını sağlayan mekanizmadır.

---

## 2. session_start() ne işe yarar?

Session oluşturur veya mevcut Session'ı başlatır.

---

## 3. Session ile Cookie arasındaki fark nedir?

Session sunucuda saklanır.

Cookie istemci (tarayıcı) tarafında saklanır.

---

## 4. Neden sepet bilgileri Session'da tutulur?

Kullanıcı oturumu boyunca ürün bilgilerini güvenli şekilde saklamak için.

---

## 5. Kullanıcıdan gelen ürün fiyatı neden kullanılmamalıdır?

Değiştirilebilir olduğu için güvenli değildir.

---

## 6. Ürün bilgileri nereden alınmalıdır?

Veritabanından alınmalıdır.

---

## 7. Session Hijacking nedir?

Başkasına ait Session ID'nin ele geçirilerek oturumun çalınmasıdır.

---

## 8. Session Fixation nedir?

Saldırganın önceden belirlediği Session ID ile kullanıcının giriş yapmasını sağlamasıdır.

---

## 9. session_regenerate_id() neden kullanılır?

Giriş yaptıktan sonra Session ID'yi yenileyerek Session Fixation saldırılarını önlemek için.

---

## 10. Session ne zaman silinmelidir?

- Logout işleminde
- Session süresi dolduğunda
- Kullanıcı uzun süre işlem yapmadığında

---

## 11. Session verileri nerede saklanır?

Sunucu tarafında saklanır.

---

## 12. Session neden Cookie'den daha güvenlidir?

Veriler sunucuda tutulduğu için kullanıcı tarafından değiştirilemez.

---

## 13. Gerçek projelerde alışveriş sepeti nasıl yönetilir?

- Misafir kullanıcılar için Session kullanılabilir.
- Giriş yapan kullanıcılar için sepet verileri veritabanında tutulur.
- Session ile veritabanı senkronize edilir.

---

## 14. Session güvenliği nasıl artırılır?

- `session_regenerate_id()` kullanılmalıdır.
- HTTPS kullanılmalıdır.
- HttpOnly ve Secure Cookie ayarlanmalıdır.
- Session timeout uygulanmalıdır.
- Logout sırasında Session tamamen temizlenmelidir.
