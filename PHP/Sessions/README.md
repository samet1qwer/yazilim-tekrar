# PHP Session - Shopping Cart

## Amaç

Bu örnek, PHP Session kullanılarak kullanıcıya ait bir alışveriş sepeti oluşturmayı ve seçilen ürünü Session içerisinde saklamayı göstermektedir.

## Kullanılan Teknolojiler

- PHP
- Session
- MySQL
- PDO
- JSON Response

## İşleyiş

1. Session başlatılır.
2. Ürün ekleme isteği alınır.
3. Gönderilen ürün ID'si alınır.
4. Ürün veritabanında sorgulanır.
5. Ürün bulunamazsa hata döndürülür.
6. Ürün bilgileri alınır.
7. Ürün Session içerisindeki sepete eklenir.
8. Başarılı işlem sonrası JSON cevap döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon         | Açıklama                          |
| ----------------- | --------------------------------- |
| `session_start()` | Session başlatır.                 |
| `isset()`         | Form verisini kontrol eder.       |
| `prepare()`       | SQL sorgusunu hazırlar.           |
| `bindParam()`     | SQL parametresi bağlar.           |
| `execute()`       | SQL sorgusunu çalıştırır.         |
| `fetch()`         | Veritabanından tek kayıt getirir. |
| `json_encode()`   | JSON formatında cevap oluşturur.  |

## Session Yapısı

```php
$_SESSION['sepet'][$urun_id] = [
    'urun_adi' => $urun_adi,
    'urun_id' => $urun_id,
    'urun_fiyat' => $urun_fiyat
];
```

Her ürün, ürün ID'si anahtar olacak şekilde Session içerisinde saklanır.

## Güvenlik

✅ Session Kullanımı

✅ Prepared Statement

✅ SQL Injection Koruması

✅ Sunucu Tarafında Veri Saklama

## Senaryo

- Kullanıcı bir ürünü sepete ekler.
- Ürün bilgileri veritabanından alınır.
- Ürün Session içerisine kaydedilir.
- Kullanıcı oturumu boyunca sepette tutulur.
