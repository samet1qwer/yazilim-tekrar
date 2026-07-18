# PHP Cookie - Automatic Login (Remember Me)

## Amaç

Bu örnek, daha önce "Remember Me (Beni Hatırla)" seçeneğini işaretleyen kullanıcının, tarayıcıdaki Cookie doğrulanarak otomatik olarak oturum açmasını göstermektedir.

## Kullanılan Teknolojiler

- PHP
- Session
- Cookie
- MySQL
- PDO
- password_verify()

## İşleyiş

1. Session kontrol edilir.
2. Kullanıcı giriş yapmışsa Dashboard'a yönlendirilir.
3. Tarayıcıdaki Remember Token Cookie'si kontrol edilir.
4. Cookie içerisindeki token doğrulanır.
5. Veritabanındaki hash ile karşılaştırılır.
6. Token doğrulanırsa Session oluşturulur.
7. Kullanıcı Dashboard sayfasına yönlendirilir.

## Kullanılan Fonksiyonlar

| Fonksiyon           | Açıklama                          |
| ------------------- | --------------------------------- |
| `session_start()`   | Session başlatır.                 |
| `isset()`           | Session ve Cookie kontrolü yapar. |
| `prepare()`         | SQL sorgusunu hazırlar.           |
| `execute()`         | Hazırlanan sorguyu çalıştırır.    |
| `fetch()`           | Kullanıcı bilgilerini getirir.    |
| `password_verify()` | Remember Token doğrulaması yapar. |
| `header()`          | Sayfa yönlendirmesi yapar.        |
| `exit`              | Kodun çalışmasını durdurur.       |

## Güvenlik

✅ Session Kontrolü

✅ Remember Me

✅ Prepared Statement

✅ Hashlenmiş Token

✅ HttpOnly Cookie

✅ Secure Cookie

## Senaryo

- Kullanıcı daha önce giriş yapmıştır.
- Remember Me seçeneğini işaretlemiştir.
- Tarayıcı Cookie'yi göndermektedir.
- Sistem Cookie'yi doğrular.
- Kullanıcı tekrar giriş yapmadan Dashboard'a yönlendirilir.
