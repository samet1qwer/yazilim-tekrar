# PHP CRUD - Delete

## Amaç

Bu örnek, kullanıcı ID'sine göre veritabanındaki bir kaydın güvenli şekilde silinmesini göstermektedir.

## Kullanılan Teknolojiler

- PHP
- MySQL
- PDO

## İşleyiş

1. URL üzerinden kullanıcı ID'si alınır.
2. Kullanıcının var olup olmadığı kontrol edilir.
3. Kullanıcı bulunamazsa hata mesajı döndürülür.
4. Kullanıcı bulunursa kayıt silinir.
5. İşlem sonucu JSON formatında döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon       | Açıklama                          |
| --------------- | --------------------------------- |
| `$_GET`         | URL parametresini alır.           |
| `(int)`         | Değeri tam sayıya dönüştürür.     |
| `prepare()`     | SQL sorgusunu hazırlar.           |
| `bindParam()`   | Parametre bağlar.                 |
| `execute()`     | Sorguyu çalıştırır.               |
| `fetch()`       | İlk bulunan kaydı getirir.        |
| `json_encode()` | Sonucu JSON formatına dönüştürür. |

## Güvenlik

✅ Prepared Statement

✅ Kullanıcı kontrolü

✅ JSON Response

❌ SQL sorgusunu string birleştirme

❌ Kontrol etmeden kayıt silme
