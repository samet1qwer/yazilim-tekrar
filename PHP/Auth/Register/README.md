# PHP Register

## Amaç

Bu örnek, PHP ve PDO kullanılarak güvenli kullanıcı kaydı oluşturmayı göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO
- Session
- password_hash()
- filter_var()

## İşleyiş

1. Kullanıcı kayıt formunu doldurur.
2. Boş alan kontrolü yapılır.
3. E-posta adresi doğrulanır.
4. Şifre uzunluğu kontrol edilir.
5. Kullanıcı adı ve e-posta daha önce kullanılmış mı kontrol edilir.
6. Şifre `password_hash()` ile hash'lenir.
7. Kullanıcı veritabanına kaydedilir.
8. Başarılı kayıt sonrası Login sayfasına yönlendirilir.

## Kullanılan Fonksiyonlar

| Fonksiyon       | Açıklama                                |
| --------------- | --------------------------------------- |
| session_start() | Session başlatır.                       |
| trim()          | Baştaki ve sondaki boşlukları temizler. |
| filter_var()    | E-posta doğrulaması yapar.              |
| password_hash() | Şifreyi güvenli şekilde hash'ler.       |
| prepare()       | SQL sorgusunu hazırlar.                 |
| execute()       | Sorguyu çalıştırır.                     |
| rowCount()      | Sonuç sayısını döndürür.                |
| header()        | Sayfa yönlendirmesi yapar.              |
| exit()          | Scripti sonlandırır.                    |

## Güvenlik

✅ Prepared Statement

✅ password_hash()

✅ Email doğrulaması

✅ Duplicate kullanıcı kontrolü

❌ Şifreyi düz metin saklama

❌ SQL sorgusunu string birleştirme
