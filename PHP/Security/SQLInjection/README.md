# PHP Security - SQL Injection Prevention

## Amaç

Bu örnek, kullanıcının profil bilgilerini güvenli bir şekilde güncellerken PDO Prepared Statement kullanarak SQL Injection saldırılarını önlemeyi göstermektedir.

## Kullanılan Teknolojiler

- PHP
- PDO
- MySQL
- Session
- password_hash()
- JSON Response

## İşleyiş

1. Session başlatılır.
2. Kullanıcının giriş yapıp yapmadığı kontrol edilir.
3. Güncellenecek bilgiler formdan alınır.
4. Yeni parola `password_hash()` ile hashlenir.
5. SQL sorgusu Prepared Statement ile hazırlanır.
6. Parametreler sorguya bağlanır.
7. Güncelleme işlemi gerçekleştirilir.
8. Sonuç JSON formatında kullanıcıya döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon         | Açıklama                          |
| ----------------- | --------------------------------- |
| `session_start()` | Session başlatır.                 |
| `isset()`         | Form ve Session kontrolü yapar.   |
| `password_hash()` | Parolayı güvenli şekilde hashler. |
| `prepare()`       | SQL sorgusunu hazırlar.           |
| `bindParam()`     | SQL parametrelerini bağlar.       |
| `execute()`       | SQL sorgusunu çalıştırır.         |
| `json_encode()`   | JSON formatında cevap oluşturur.  |

## Güvenlik

✅ Prepared Statement

✅ SQL Injection Koruması

✅ Password Hashing

✅ Session Kontrolü

## Senaryo

- Kullanıcı profilini güncellemek ister.
- Sistem yeni bilgileri alır.
- Parola hashlenir.
- Güncelleme sorgusu Prepared Statement ile çalıştırılır.
- Profil güvenli şekilde güncellenir.
