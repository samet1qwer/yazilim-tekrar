# PHP CRUD - Update

## Amaç

Bu örnek, kullanıcı ID'sine göre veritabanındaki kayıtların güncellenmesini göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO
- password_hash()
- JSON

## İşleyiş

1. Güncellenecek kullanıcı ID'si alınır.
2. İsim, e-posta ve parola bilgileri alınır.
3. Kullanıcının veritabanında olup olmadığı kontrol edilir.
4. Parola güvenli şekilde hash'lenir.
5. Kullanıcı bilgileri güncellenir.
6. İşlem sonucu JSON formatında döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon         | Açıklama                                            |
| ----------------- | --------------------------------------------------- |
| `isset()`         | Alanların gönderilip gönderilmediğini kontrol eder. |
| `password_hash()` | Parolayı güvenli şekilde hash'ler.                  |
| `prepare()`       | SQL sorgusunu hazırlar.                             |
| `bindParam()`     | Parametre bağlar.                                   |
| `execute()`       | Sorguyu çalıştırır.                                 |
| `rowCount()`      | Dönen kayıt sayısını kontrol eder.                  |
| `json_encode()`   | Sonucu JSON formatına dönüştürür.                   |

## Güvenlik

✅ Prepared Statement

✅ password_hash()

✅ Kullanıcı kontrolü

❌ Düz metin parola

❌ SQL sorgusunu string birleştirme
