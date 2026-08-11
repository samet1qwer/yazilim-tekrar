# PHP API - REST API

## Amaç

Bu örnek, PHP kullanarak temel bir REST API yapısının nasıl oluşturulacağını göstermektedir.

API içerisinde HTTP metodlarına göre farklı işlemler gerçekleştirilir:

- GET → Veri listeleme
- POST → Yeni veri oluşturma
- PUT → Mevcut veriyi güncelleme
- DELETE → Veri silme

## Kullanılan Teknolojiler

- PHP
- REST API
- HTTP
- JSON
- GET
- POST
- PUT
- DELETE

## İşleyiş

### GET

Todo listesini döndürür.

```http
GET /todo.php
```

Response:

```json
{
  "success": true,
  "message": "Todo listesi",
  "data": [
    {
      "id": 1,
      "görev": "PHP öğren"
    },
    {
      "id": 2,
      "görev": "REST API öğren"
    }
  ]
}
```

---

### POST

Yeni Todo oluşturmak için kullanılır.

```http
POST /todo.php
Content-Type: application/json
```

Request Body:

```json
{
  "görev": "PHP REST API öğren"
}
```

---

### PUT

Mevcut Todo kaydını güncellemek için kullanılır.

```http
PUT /todo.php
Content-Type: application/json
```

Request Body:

```json
{
  "id": 1,
  "görev": "PHP REST API tekrar et"
}
```

---

### DELETE

Todo kaydını silmek için kullanılır.

```http
DELETE /todo.php
```

---

## Kullanılan Fonksiyonlar

| Fonksiyon              | Açıklama                                            |
| ---------------------- | --------------------------------------------------- |
| `header()`             | Response Content-Type bilgisini belirler.           |
| `$_SERVER`             | HTTP Request Method bilgisini alır.                 |
| `json_encode()`        | PHP verisini JSON formatına dönüştürür.             |
| `json_decode()`        | JSON verisini PHP array/object yapısına dönüştürür. |
| `file_get_contents()`  | Request body içerisindeki veriyi okur.              |
| `http_response_code()` | HTTP response status code belirler.                 |

## HTTP Methodları

| Method   | Amaç                      |
| -------- | ------------------------- |
| `GET`    | Veri almak                |
| `POST`   | Yeni veri oluşturmak      |
| `PUT`    | Mevcut veriyi güncellemek |
| `DELETE` | Veri silmek               |

## HTTP Status Code

API'de uygun HTTP status code kullanılması önemlidir.

```text
200 → Başarılı
201 → Kaynak oluşturuldu
400 → Hatalı istek
401 → Yetkisiz
403 → Yasak
404 → Bulunamadı
405 → Method desteklenmiyor
500 → Sunucu hatası
```

## Senaryo

```text
Client
   |
   | GET /todo.php
   ↓
PHP REST API
   |
   ↓
JSON Response
```

POST, PUT ve DELETE isteklerinde ise istemci tarafından gönderilen verilere göre işlem gerçekleştirilir.

## Güvenlik

Bu örnek temel REST API mantığını göstermektedir.

Gerçek projelerde ayrıca:

- Authentication
- Authorization
- Input Validation
- Rate Limiting
- HTTPS
- CORS kontrolü
- Prepared Statement
- Hata yönetimi

uygulanmalıdır.
