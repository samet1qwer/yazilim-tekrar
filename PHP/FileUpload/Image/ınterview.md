# PHP File Upload - Mülakat Soruları

## 1. PHP'de dosya yükleme nasıl yapılır?

`$_FILES` dizisi kullanılarak yapılır.

---

## 2. move_uploaded_file() ne işe yarar?

Geçici dizindeki dosyayı hedef klasöre taşır.

---

## 3. uniqid() neden kullanılır?

Dosya isimlerinin çakışmasını önlemek için.

---

## 4. Dosya uzantısı neden kontrol edilir?

İzin verilmeyen dosyaların yüklenmesini engellemek için.

---

## 5. MIME Type neden kontrol edilir?

Dosyanın gerçekten beklenen türde olup olmadığını doğrulamak için.

---

## 6. Sadece uzantı kontrolü yeterli midir?

Hayır.

Gerçek MIME Type da doğrulanmalıdır.

---

## 7. Web Shell Upload nedir?

Sunucuya çalıştırılabilir zararlı dosya yüklenmesidir.

---

## 8. Path Traversal saldırısı nedir?

Dosyanın beklenmeyen dizinlere yazılmasını sağlamaya çalışan saldırıdır.

---

## 9. Dosya boyutu neden sınırlandırılır?

Sunucu kaynaklarının kötüye kullanılmasını önlemek için.

---

## 10. Prepared Statement neden kullanılır?

SQL Injection saldırılarını önlemek için.

---

## 11. Upload klasörü nasıl korunmalıdır?

- Yazma izinleri sınırlandırılmalıdır.
- PHP çalıştırılması engellenmelidir.
- Gereksiz erişimler kapatılmalıdır.

---

## 12. Gerçek projelerde dosya yükleme sistemi nasıl daha güvenli hale getirilir?

- `finfo_file()` ile MIME doğrulanır.
- Rastgele dosya adı oluşturulur.
- Dosya boyutu sınırlandırılır.
- Zararlı dosya taraması yapılır.
- Upload dizininde PHP çalıştırılması engellenir.
- Sadece gerekli dosya türlerine izin verilir.

---

## 13. MIME Type Spoofing nedir?

Saldırganın dosyanın MIME Type bilgisini değiştirerek sistemi kandırmaya çalışmasıdır.

---

## 14. Double Extension saldırısı nedir?

`image.jpg.php` gibi çift uzantılı dosyalar kullanılarak güvenlik kontrollerini aşmayı hedefleyen saldırıdır.
