# PHP File Upload - Document Upload

## Amaç

Bu örnek, kullanıcının yüklediği belge dosyasını (DOC, DOCX, PDF) doğrulayarak sunucuya yüklemeyi ve dosya yolunu veritabanına kaydetmeyi göstermektedir.

## Kullanılan Teknolojiler

- PHP
- HTML Form
- File Upload
- MySQL
- PDO
- JSON Response

## İşleyiş

1. Kullanıcı belge seçer.
2. Dosyanın başarıyla gönderildiği kontrol edilir.
3. Dosyanın uzantısı doğrulanır.
4. MIME Type doğrulanır.
5. Dosya boyutu kontrol edilir.
6. Benzersiz dosya adı oluşturulur.
7. Dosya uploads klasörüne taşınır.
8. Dosya yolu veritabanına kaydedilir.
9. İşlem sonucu JSON olarak döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon              | Açıklama                                                 |
| ---------------------- | -------------------------------------------------------- |
| `isset()`              | Form verisinin gönderilip gönderilmediğini kontrol eder. |
| `pathinfo()`           | Dosya uzantısını alır.                                   |
| `in_array()`           | Uzantı ve MIME Type doğrulaması yapar.                   |
| `uniqid()`             | Benzersiz dosya adı oluşturur.                           |
| `move_uploaded_file()` | Dosyayı hedef klasöre taşır.                             |
| `prepare()`            | SQL sorgusunu hazırlar.                                  |
| `bindParam()`          | SQL parametresi bağlar.                                  |
| `execute()`            | SQL sorgusunu çalıştırır.                                |
| `json_encode()`        | JSON formatında cevap üretir.                            |

## Desteklenen Dosya Türleri

- DOC
- DOCX
- PDF

## Maksimum Dosya Boyutu

**1 MB**

## Güvenlik

✅ Dosya Uzantısı Kontrolü

✅ MIME Type Kontrolü

✅ Dosya Boyutu Kontrolü

✅ Benzersiz Dosya Adı

✅ Prepared Statement

## Senaryo

- Kullanıcı bir belge yükler.
- Sistem belgeyi doğrular.
- Dosya uploads klasörüne taşınır.
- Dosya yolu veritabanına kaydedilir.
