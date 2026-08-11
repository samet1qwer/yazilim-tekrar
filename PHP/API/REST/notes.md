# Notlar

## REST API Nedir?

REST (Representational State Transfer), HTTP protokolü üzerinden kaynaklarla çalışmak için kullanılan bir API mimari yaklaşımıdır.

REST API'lerde kaynaklara HTTP metodları üzerinden erişilir.

---

## HTTP Methodları

### GET

Veri almak için kullanılır.

```http
GET /todo.php
```

Örneğin Todo listesini getirir.

---

### POST

Yeni kaynak oluşturmak için kullanılır.

```http
POST /todo.php
```

Request Body:

```json
{
  "görev": "PHP öğren"
}
```

---

### PUT

Mevcut kaynağı güncellemek için kullanılır.

```http
PUT /todo.php
```

Request Body:

```json
{
  "id": 1,
  "görev": "REST API öğren"
}
```

---

### DELETE

Kaynak silmek için kullanılır.

```http
DELETE /todo.php
```

---

## $\_SERVER["REQUEST_METHOD"]

```php
$method = $_SERVER["REQUEST_METHOD"];
```

İstemcinin kullandığı HTTP metodunu öğrenmek için kullanılır.

Örneğin:

```text
GET
POST
PUT
DELETE
```

---

## php://input

```php
file_get_contents("php://input")
```

HTTP request body içerisindeki ham veriyi okumak için kullanılır.

Özellikle JSON API'lerinde kullanılır.

---

## json_decode()

```php
$data = json_decode(
    file_get_contents("php://input"),
    true
);
```

JSON request body'yi PHP array'ine dönüştürür.

Örneğin:

```json
{
  "görev": "PHP öğren"
}
```

PHP tarafında:

```php
[
    "görev" => "PHP öğren"
]
```

haline gelir.

---

## json_encode()

```php
echo json_encode($data);
```

PHP verisini JSON formatına dönüştürür.

---

## HTTP Status Code

Desteklenmeyen HTTP methodunda:

```php
http_response_code(405);
```

kullanılmıştır.

`405 Method Not Allowed` anlamına gelir.

---

## Content-Type

```php
header("Content-Type: application/json; charset=utf-8");
```

API response'unun JSON formatında olduğunu belirtir.

---

## RESTful Resource

Daha büyük API'lerde endpoint'lerin kaynak odaklı tasarlanması tercih edilir.

Örneğin:

```text
GET    /todos
POST   /todos
GET    /todos/1
PUT    /todos/1
DELETE /todos/1
```

Bu yapı REST API'lerde daha düzenli ve ölçeklenebilir bir tasarım sağlar.

---

## Dikkat Edilecekler

- HTTP metodları doğru amaçlarla kullanılmalıdır.
- Request body doğrulanmalıdır.
- JSON parse hataları kontrol edilmelidir.
- HTTP status code doğru kullanılmalıdır.
- Authentication ve Authorization uygulanmalıdır.
- API yalnızca HTTPS üzerinden sunulmalıdır.

---

## Best Practices

- Endpoint'leri resource-oriented tasarlayın.
- Standart HTTP status code kullanın.
- Tutarlı JSON response formatı kullanın.
- Input Validation uygulayın.
- Authentication ekleyin.
- Authorization kontrolü yapın.
- Rate Limiting uygulayın.
- API versioning kullanın.

Örneğin:

```text
/api/v1/todos
```

---

## Idempotency

REST API tasarımında önemli kavramlardan biridir.

GET ve PUT gibi işlemler genel olarak idempotent kabul edilir.

Örneğin aynı PUT isteğinin birden fazla kez gönderilmesi aynı kaynağı aynı son duruma getirmelidir.

POST ise genellikle idempotent değildir; aynı isteğin tekrar gönderilmesi birden fazla kaynak oluşturabilir.
