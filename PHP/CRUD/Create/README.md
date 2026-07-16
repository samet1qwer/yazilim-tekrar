# PHP Database - Create Table

## Amaç

Bu örnek, PHP ve PDO kullanarak MySQL veritabanında dinamik olarak yeni bir tablo oluşturmayı göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO

## İşleyiş

1. Kullanıcı tablo adını girer.
2. Tablo adı alınır.
3. CREATE TABLE sorgusu hazırlanır.
4. PDO ile sorgu çalıştırılır.
5. İşlem sonucu JSON formatında döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon     | Açıklama                           |
| ------------- | ---------------------------------- |
| trim()        | Boşlukları temizler.               |
| prepare()     | SQL sorgusunu hazırlar.            |
| execute()     | Sorguyu çalıştırır.                |
| rowCount()    | Etkilenen kayıt sayısını döndürür. |
| json_encode() | Sonucu JSON formatına dönüştürür.  |

## Güvenlik

✅ PDO

❌ Kullanıcıdan gelen tablo adı doğrudan kullanılmamalıdır.

❌ Yetkilendirme yapılmadan tablo oluşturulmamalıdır.
