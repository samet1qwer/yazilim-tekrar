# PHP Reset Password

## Amaç

Bu örnek, kullanıcıya gönderilen parola sıfırlama bağlantısındaki token doğrulanarak yeni parola oluşturulmasını göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO
- password_hash()
- Token Doğrulama

## İşleyiş

1. Kullanıcı e-postadaki bağlantıya tıklar.
2. URL'den token alınır.
3. Token veritabanında aranır.
4. Token süresi kontrol edilir.
5. Yeni parola ve parola tekrarı karşılaştırılır.
6. Parola `password_hash()` ile hash'lenir.
7. Veritabanındaki parola güncellenir.
8. İşlem tamamlandıktan sonra kullanıcı giriş yapabilir.

## Kullanılan Fonksiyonlar

| Fonksiyon         | Açıklama                          |
| ----------------- | --------------------------------- |
| `$_GET`           | URL parametresini alır.           |
| `prepare()`       | SQL sorgusunu hazırlar.           |
| `bindParam()`     | Parametre bağlar.                 |
| `execute()`       | Sorguyu çalıştırır.               |
| `fetch()`         | Kullanıcı bilgisini getirir.      |
| `time()`          | Geçerli Unix zamanını döndürür.   |
| `password_hash()` | Şifreyi güvenli şekilde hash'ler. |
| `trim()`          | Boşlukları temizler.              |

## Güvenlik

✅ Token doğrulama

✅ Token süresi kontrolü

✅ password_hash()

✅ Prepared Statement

❌ Düz metin parola

❌ Süresi dolmayan token
