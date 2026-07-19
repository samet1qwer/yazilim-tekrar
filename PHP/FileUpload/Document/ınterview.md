# PHP File Upload - Document Upload | Mülakat Soruları

## 1. PHP'de belge yükleme nasıl yapılır?

`$_FILES` dizisi kullanılarak yapılır.

---

## 2. move_uploaded_file() ne işe yarar?

Geçici dizindeki dosyayı hedef klasöre taşır.

---

## 3. pathinfo() ne işe yarar?

Dosyanın uzantısını elde etmek için kullanılır.

---

## 4. uniqid() neden kullanılır?

Dosya isimlerinin çakışmasını önlemek için.

---

## 5. MIME Type neden kontrol edilir?

Dosyanın gerçekten beklenen türde olup olmadığını doğrulamak için.

---

## 6. Sadece dosya uzantısı kontrolü yeterli midir?

Hayır.

Gerçek MIME Type ve dosya içeriği de doğrulanmalıdır.

---

## 7. Maksimum dosya boyutu neden belirlenmelidir?

Sunucu kaynaklarının gereksiz kullanılmasını önlemek için.

---

## 8. Prepared Statement neden kullanılır?

SQL Injection saldırılarını önlemek için.

---

## 9. Web Shell Upload nedir?

Sunucuya çalıştırılabilir zararlı dosyaların yüklenmesidir.

---

## 10. Double Extension saldırısı nedir?

`belge.pdf.php` gibi çift uzantılı dosyalarla güvenlik kontrollerini aşmayı hedefleyen saldırıdır.

---

## 11. Path Traversal saldırısı nedir?

Dosyanın beklenmeyen dizinlere yazılmasını sağlamaya çalışan saldırıdır.

---

## 12. Upload klasörü nasıl korunmalıdır?

- PHP çalıştırılması engellenmelidir.
- Yazma izinleri sınırlandırılmalıdır.
- Gereksiz erişimler kapatılmalıdır.

---

## 13. MIME Type Spoofing nedir?

Dosyanın MIME Type bilgisinin değiştirilerek sistemin kandırılmaya çalışılmasıdır.

---

## 14. Gerçek projelerde belge yükleme sistemi nasıl daha güvenli hale getirilir?

- `finfo_file()` ile MIME doğrulanmalıdır.
- Rastgele dosya adı kullanılmalıdır.
- Dosya boyutu sınırlandırılmalıdır.
- Zararlı dosya taraması yapılmalıdır.
- Upload dizininde PHP çalıştırılması engellenmelidir.
- Yalnızca izin verilen dosya türleri kabul edilmelidir.
- Dosya içeriği doğrulanmalıdır.
