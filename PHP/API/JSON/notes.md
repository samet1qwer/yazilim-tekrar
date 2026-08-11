# Notlar

## JSON Nedir?

JSON (JavaScript Object Notation), uygulamalar arasında veri alışverişi yapmak için kullanılan hafif bir veri formatıdır.

Örneğin:

```json
{
  "görev": "PHP öğren",
  "tarih": "2026-08-11"
}
```

---

## Content-Type

```php
header('Content-Type: application/json; charset=utf-8');
```

Sunucu response'unun JSON formatında olduğunu belirtir.

---

## POST Verisi

```php
$_POST['görev']
$_POST['tarih']
```

HTTP POST isteğiyle gönderilen verilere erişilir.

---

## isset()

```php
isset($_POST['görev'])
```

Belirtilen POST değişkeninin mevcut olup olmadığını kontrol eder.

---

## PDO Prepared Statement

```php
$stmt = $db->prepare(
    "INSERT INTO todo (görev, tarih)
     VALUES (:görev, :tarih)"
);
```

Kullanıcı verisinin SQL sorgusundan ayrılmasını sağlar ve SQL Injection riskini azaltır.

---

## bindParam()

```php
$stmt->bindParam(':görev', $görev);
$stmt->bindParam(':tarih', $tarih);
```

PHP değişkenlerini SQL parametrelerine bağlar.

---

## execute()

```php
$stmt->execute();
```

Hazırlanan SQL sorgusunu çalıştırır.

---

## json_encode()

```php
$json = array(
    'görev' => $görev,
    'tarih' => $tarih
);

echo json_encode($json);
```

PHP array'ini JSON formatına dönüştürür.

---

## MD5 Hakkında

Kodda:

```php
$tarih = md5($_POST['tarih']);
```

kullanılmıştır.

MD5 günümüzde güvenli bir kriptografik hash algoritması olarak kabul edilmez.

Parola, token veya güvenlik amacıyla kullanılmamalıdır.

Eğer amaç tarihi normal şekilde veritabanına kaydetmekse:

```php
$tarih = $_POST['tarih'];
```

kullanmak daha doğrudur.

---

## Input Validation

Sadece `isset()` kullanmak yeterli değildir.

Örneğin:

```php
if (
    isset($_POST['görev'], $_POST['tarih']) &&
    trim($_POST['görev']) !== '' &&
    trim($_POST['tarih']) !== ''
) {
    // işlem
}
```

ile boş değerler de kontrol edilebilir.

---

## API Response

Gerçek API'lerde HTTP status code kullanmak önemlidir.

Örneğin:

```php
http_response_code(201);
```

başarılı bir kaynak oluşturma işlemini belirtmek için kullanılabilir.

---

## Best Practices

- Prepared Statement kullanın.
- Input Validation uygulayın.
- JSON response kullanın.
- Doğru HTTP status code döndürün.
- Hata mesajlarını standartlaştırın.
- Hassas bilgileri response içerisinde göndermeyin.
- Tarihleri mümkünse standart bir formatta saklayın.
