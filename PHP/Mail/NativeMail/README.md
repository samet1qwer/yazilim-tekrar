# PHP Mail - Native mail()

## Amaç

Bu örnek, PHP'nin yerleşik `mail()` fonksiyonu kullanılarak e-posta gönderimini göstermektedir.

## Kullanılan Teknolojiler

- PHP
- mail()
- JSON

## İşleyiş

1. Kullanıcının e-posta adresi alınır.
2. Konu ve mesaj hazırlanır.
3. Mail başlıkları oluşturulur.
4. `mail()` fonksiyonu çağrılır.
5. İşlem sonucu JSON olarak döndürülür.

## Kullanılan Fonksiyonlar

| Fonksiyon     | Açıklama             |
| ------------- | -------------------- |
| trim()        | Boşlukları temizler. |
| mail()        | E-posta gönderir.    |
| json_encode() | JSON çıktısı üretir. |

## Güvenlik

✅ Header kullanımı

✅ JSON Response

❌ SMTP doğrulaması yok

❌ Teslim garantisi yok

❌ Hata yönetimi sınırlıdır
