# PHP Forgot Password

## Amaç

Bu örnek, kullanıcının unuttuğu parolayı sıfırlayabilmesi için güvenli bir parola sıfırlama bağlantısı oluşturmayı göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO
- mail()
- random_bytes()
- bin2hex()

## İşleyiş

1. Kullanıcı e-posta adresini girer.
2. Veritabanında kullanıcı kontrol edilir.
3. Güvenli bir token oluşturulur.
4. Token ve son kullanma süresi veritabanına kaydedilir.
5. Token içeren parola sıfırlama bağlantısı oluşturulur.
6. Bağlantı kullanıcıya e-posta ile gönderilir.
7. Kullanıcı bağlantıya tıklayarak yeni parola belirler.

## Kullanılan Fonksiyonlar

| Fonksiyon      | Açıklama                                   |
| -------------- | ------------------------------------------ |
| trim()         | Boşlukları temizler.                       |
| prepare()      | SQL sorgusunu hazırlar.                    |
| bindParam()    | Parametre bağlar.                          |
| execute()      | Sorguyu çalıştırır.                        |
| fetch()        | Kullanıcı bilgisini getirir.               |
| random_bytes() | Güvenli rastgele byte üretir.              |
| bin2hex()      | Byte dizisini hexadecimal stringe çevirir. |
| time()         | Unix zamanını döndürür.                    |
| mail()         | E-posta gönderir.                          |

## Güvenlik

✅ PDO Prepared Statement

✅ Rastgele Token

✅ Token Süresi

❌ Token'ı tahmin edilebilir oluşturmak

❌ Sonsuza kadar geçerli token kullanmak
