# PHP Cookie - Remember Me

## Amaç

Bu örnek, kullanıcının "Remember Me (Beni Hatırla)" seçeneğini işaretlemesi durumunda Cookie kullanılarak uzun süreli oturum oluşturulmasını göstermektedir.

## Kullanılan Teknolojiler

- PHP
- Cookie
- Session
- MySQL
- PDO
- password_hash()
- password_verify()
- random_bytes()

## İşleyiş

1. Kullanıcı giriş yapar.
2. Kullanıcı bilgileri veritabanında doğrulanır.
3. Session oluşturulur.
4. "Remember Me" seçeneği kontrol edilir.
5. Rastgele bir token oluşturulur.
6. Token veritabanına kaydedilir.
7. Aynı token Cookie olarak tarayıcıya yazılır.
8. Sonraki ziyaretlerde Cookie doğrulanarak kullanıcı otomatik giriş yapabilir.

## Kullanılan Fonksiyonlar

| Fonksiyon           | Açıklama                                   |
| ------------------- | ------------------------------------------ |
| `session_start()`   | Session başlatır.                          |
| `password_verify()` | Şifre doğrulaması yapar.                   |
| `password_hash()`   | Token'ı hash'ler.                          |
| `random_bytes()`    | Güvenli rastgele veri üretir.              |
| `bin2hex()`         | Byte dizisini hexadecimal formata çevirir. |
| `setcookie()`       | Tarayıcıya Cookie oluşturur.               |

## Güvenlik

✅ Session

✅ Cookie

✅ HttpOnly

✅ Secure

✅ Random Token

✅ Prepared Statement
