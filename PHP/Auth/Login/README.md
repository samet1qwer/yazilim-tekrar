# PHP Login

## Amaç

Bu örnek, PHP ve PDO kullanılarak güvenli kullanıcı girişi yapılmasını göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO
- Session
- password_hash()
- password_verify()

## İşleyiş

1. Kullanıcı e-posta ve parola bilgilerini gönderir.
2. Girilen e-posta veritabanında aranır.
3. Kullanıcı bulunduysa parola `password_verify()` ile doğrulanır.
4. Doğrulama başarılı olursa Session oluşturulur.
5. Kullanıcı Dashboard sayfasına yönlendirilir.

## Dosya Yapısı

```
Login/
│
├── login.php
├── README.md
├── notes.md
└── users.sql
```

## Önemli Noktalar

- PDO Prepared Statement kullanılmıştır.
- SQL Injection'a karşı koruma sağlanmıştır.
- Parolalar hash'lenerek saklanmalıdır.
- Kullanıcı giriş yaptıktan sonra Session oluşturulur.

## Kullanılan Fonksiyonlar

| Fonksiyon         | Açıklama                                 |
| ----------------- | ---------------------------------------- |
| session_start()   | Session başlatır.                        |
| trim()            | Baştaki ve sondaki boşlukları temizler.  |
| prepare()         | SQL sorgusunu hazırlar.                  |
| execute()         | Hazırlanan sorguyu çalıştırır.           |
| fetch()           | Kullanıcı bilgisini getirir.             |
| password_verify() | Girilen parola ile hash'i karşılaştırır. |
| header()          | Başka sayfaya yönlendirir.               |
| exit              | Scripti sonlandırır.                     |

## Güvenlik

✅ Prepared Statement

✅ password_verify()

✅ Session

❌ Düz metin parola

❌ SQL sorgusunu string birleştirerek oluşturmak
