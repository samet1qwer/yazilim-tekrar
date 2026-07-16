# PHP CRUD - Read

## Amaç

Bu örnek, veritabanındaki bir kullanıcının ID bilgisine göre okunmasını göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO

## İşleyiş

1. URL üzerinden kullanıcı ID'si alınır.
2. Veritabanında kullanıcı aranır.
3. Kullanıcı bulunursa bilgileri ekrana döndürülür.
4. Kullanıcı bulunamazsa hata mesajı gösterilir.

## Kullanılan Fonksiyonlar

| Fonksiyon     | Açıklama                   |
| ------------- | -------------------------- |
| `$_GET`       | URL parametresini alır.    |
| `prepare()`   | SQL sorgusunu hazırlar.    |
| `bindParam()` | Parametre bağlar.          |
| `execute()`   | Sorguyu çalıştırır.        |
| `fetch()`     | İlk bulunan kaydı getirir. |

## Güvenlik

✅ Prepared Statement

✅ Parametre Bağlama

❌ SQL sorgusunu string birleştirme
