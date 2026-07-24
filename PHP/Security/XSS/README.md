# PHP Security - Cross Site Scripting (XSS)

## Amaç

Bu örnek, veritabanından alınan kullanıcı verisini `htmlspecialchars()` fonksiyonu ile güvenli şekilde HTML içerisine yazdırarak Cross Site Scripting (XSS) saldırılarını önlemeyi göstermektedir.

## Kullanılan Teknolojiler

- PHP
- Session
- MySQL
- PDO
- HTML
- htmlspecialchars()

## İşleyiş

1. Session başlatılır.
2. Kullanıcının giriş yapıp yapmadığı kontrol edilir.
3. Kullanıcı bilgileri veritabanından alınır.
4. Kullanıcı adı HTML içerisine yazdırılmadan önce `htmlspecialchars()` ile filtrelenir.
5. Zararlı karakterler HTML Entity'lerine dönüştürülür.
6. Kullanıcı güvenli şekilde ekrana gösterilir.

## Kullanılan Fonksiyonlar

| Fonksiyon            | Açıklama                                       |
| -------------------- | ---------------------------------------------- |
| `session_start()`    | Session başlatır.                              |
| `prepare()`          | SQL sorgusunu hazırlar.                        |
| `execute()`          | SQL sorgusunu çalıştırır.                      |
| `fetch()`            | Kullanıcı bilgilerini getirir.                 |
| `htmlspecialchars()` | HTML özel karakterlerini güvenli hale getirir. |
| `header()`           | Sayfa yönlendirmesi yapar.                     |
| `exit`               | Kodun çalışmasını durdurur.                    |

## Güvenlik

✅ XSS Koruması

✅ Output Escaping

✅ Session Kontrolü

✅ Prepared Statement

## Senaryo

- Kullanıcı adı veritabanından okunur.
- Kullanıcı adı ekrana yazdırılmadan önce filtrelenir.
- Zararlı JavaScript kodları çalıştırılamaz.
