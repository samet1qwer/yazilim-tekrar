# PHP File Upload - Image Upload

## Amaç

Bu örnek, kullanıcının seçtiği resim dosyasını güvenli kontrollerden geçirerek sunucuya yüklemeyi ve yüklenen dosyanın yolunu veritabanına kaydetmeyi göstermektedir.

## Kullanılan Teknolojiler

- PHP
- HTML Form
- File Upload
- MySQL
- PDO
- JSON Response

## İşleyiş

1. Formdan resim dosyası gönderilir.
2. Dosyanın gönderilip gönderilmediği kontrol edilir.
3. Dosya uzantısı doğrulanır.
4. MIME Type doğrulanır.
5. Dosya boyutu kontrol edilir.
6. Dosya için benzersiz isim oluşturulur.
7. Dosya uploads klasörüne taşınır.
8. Dosya yolu veritabanına kaydedilir.
9. Başarılı işlem sonrası JSON mesajı döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon              | Açıklama                                           |
| ---------------------- | -------------------------------------------------- |
| `isset()`              | Dosyanın gönderilip gönderilmediğini kontrol eder. |
| `in_array()`           | Uzantı ve MIME Type doğrulaması yapar.             |
| `pathinfo()`           | Dosya uzantısını alır.                             |
| `uniqid()`             | Benzersiz dosya adı oluşturur.                     |
| `move_uploaded_file()` | Dosyayı sunucuya taşır.                            |
| `prepare()`            | SQL sorgusunu hazırlar.                            |
| `bindParam()`          | Parametre bağlar.                                  |
| `execute()`            | SQL sorgusunu çalıştırır.                          |
| `json_encode()`        | JSON formatında çıktı üretir.                      |

## Güvenlik

✅ Dosya Uzantısı Kontrolü

✅ MIME Type Kontrolü

✅ Dosya Boyutu Kontrolü

✅ Benzersiz Dosya Adı

✅ Prepared Statement

✅ SQL Injection Koruması

## Desteklenen Dosyalar

- JPG
- JPEG
- PNG
- GIF

## Maksimum Dosya Boyutu

**1 MB**

## Senaryo

- Kullanıcı bir resim seçer.
- Sistem dosyayı doğrular.
- Dosya uploads klasörüne yüklenir.
- Dosya yolu veritabanına kaydedilir.
