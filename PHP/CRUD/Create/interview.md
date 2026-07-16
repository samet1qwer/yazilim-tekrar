# PHP Create Table | Mülakat Soruları

## 1. CREATE TABLE ne işe yarar?

Veritabanında yeni bir tablo oluşturur.

---

## 2. DDL nedir?

Data Definition Language.

Veritabanı yapısını oluşturmak için kullanılır.

---

## 3. DDL komutları nelerdir?

- CREATE
- ALTER
- DROP
- TRUNCATE

---

## 4. CREATE ile INSERT arasındaki fark nedir?

CREATE

→ Tablo oluşturur.

INSERT

→ Tabloya veri ekler.

---

## 5. Kullanıcıdan tablo adı almak güvenli midir?

Doğrudan kullanılmamalıdır.

Whitelist veya Regex doğrulaması yapılmalıdır.

---

## 6. PDO neden kullanılır?

Veritabanı işlemlerini güvenli ve taşınabilir şekilde gerçekleştirmek için.

---

## 7. rowCount() burada ne döndürür?

Sorgunun etkilediği satır sayısını döndürmeye çalışır.

DDL sorgularında her zaman güvenilir bir başarı göstergesi olmayabilir.

---

## 8. Bu örnek gerçek projelerde kullanılır mı?

Genellikle hayır.

Tablo oluşturma işlemleri migration sistemleri ile yapılır.

Örneğin:

- Laravel Migration
- CodeIgniter Migration
- Phinx

---

## 9. Dinamik CREATE TABLE hangi riskleri taşır?

- Yetkisiz tablo oluşturma
- SQL Injection
- Veritabanı yapısının bozulması

---

## 10. Bu örnek nasıl geliştirilebilir?

- Regex ile tablo adı doğrulama
- Yetkilendirme
- Hata yakalama (`try/catch`)
- Migration sistemi kullanımı
