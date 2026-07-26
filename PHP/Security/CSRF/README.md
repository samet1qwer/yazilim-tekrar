# PHP Security - CSRF Protection

## Amaç

Bu örnek, PHP Session kullanarak rastgele bir CSRF Token oluşturmayı, form içerisine eklemeyi ve form gönderildiğinde token doğrulaması yaparak Cross-Site Request Forgery (CSRF) saldırılarını önlemeyi göstermektedir.

## Kullanılan Teknolojiler

- PHP
- Session
- HTML Form
- random_bytes()
- bin2hex()

## İşleyiş

1. Session başlatılır.
2. Session içerisinde CSRF Token olup olmadığı kontrol edilir.
3. Yoksa rastgele bir Token oluşturulur.
4. Token Session içerisinde saklanır.
5. Token form içerisine eklenir.
6. Form gönderildiğinde Session'daki Token ile karşılaştırılır.
7. Token doğruysa işlem gerçekleştirilir.
8. Token yanlışsa istek reddedilir.

## Kullanılan Fonksiyonlar

| Fonksiyon         | Açıklama                                   |
| ----------------- | ------------------------------------------ |
| `session_start()` | Session başlatır.                          |
| `isset()`         | Token kontrolü yapar.                      |
| `random_bytes()`  | Güvenli rastgele veri üretir.              |
| `bin2hex()`       | Byte dizisini hexadecimal formata çevirir. |
| `$_SESSION`       | CSRF Token'ı sunucu tarafında saklar.      |

## Güvenlik

✅ CSRF Koruması

✅ Session Kullanımı

✅ Güvenli Rastgele Token

✅ Form Doğrulaması

## Senaryo

- Kullanıcı formu açar.
- Sistem benzersiz bir CSRF Token üretir.
- Token form ile birlikte gönderilir.
- Sunucu gelen Token'ı doğrular.
- Doğrulama başarılıysa işlem devam eder.
