# PHP API - JSON Response

## Amaç

Bu örnek, PHP ile POST üzerinden alınan verilerin veritabanına kaydedilmesini ve işlem sonucunun JSON formatında API response olarak döndürülmesini göstermektedir.

## Kullanılan Teknolojiler

- PHP
- JSON
- PDO
- MySQL
- HTTP POST

## İşleyiş

1. İstek JSON response döndürecek şekilde yapılandırılır.
2. POST üzerinden `görev` ve `tarih` verileri alınır.
3. Görev ve tarih bilgileri kontrol edilir.
4. Veriler PDO Prepared Statement ile veritabanına eklenir.
5. Kaydedilen veriler bir PHP array içerisinde hazırlanır.
6. `json_encode()` ile JSON formatına dönüştürülür.
7. JSON response istemciye gönderilir.

## Kullanılan Fonksiyonlar

| Fonksiyon       | Açıklama                                                   |
| --------------- | ---------------------------------------------------------- |
| `header()`      | Response Content-Type bilgisini belirler.                  |
| `isset()`       | POST verilerinin gönderilip gönderilmediğini kontrol eder. |
| `prepare()`     | SQL sorgusunu hazırlar.                                    |
| `bindParam()`   | SQL parametrelerini bağlar.                                |
| `execute()`     | SQL sorgusunu çalıştırır.                                  |
| `array()`       | Response verilerini PHP dizisi olarak oluşturur.           |
| `json_encode()` | PHP verisini JSON formatına dönüştürür.                    |

## JSON Response

Örneğin:

```json
{
  "görev": "PHP çalış",
  "tarih": "2026-08-11"
}
```

## Güvenlik

✅ Prepared Statement

✅ SQL Injection Koruması

✅ JSON Response

⚠️ Input Validation eklenmelidir.

## Senaryo

İstemci:

```text
POST
   ↓
PHP API
   ↓
Input Validation
   ↓
PDO Prepared Statement
   ↓
MySQL
   ↓
JSON Response
```

## Dikkat Edilecekler

- Kullanıcı girdileri doğrulanmalıdır.
- SQL sorgularında Prepared Statement kullanılmalıdır.
- API response'larında hassas bilgiler döndürülmemelidir.
- JSON response için doğru Content-Type kullanılmalıdır.
- Hatalar kontrollü şekilde döndürülmelidir.
