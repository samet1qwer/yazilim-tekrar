# Notlar

## CRUD Nedir?

CRUD;

- Create
- Read
- Update
- Delete

işlemlerinin genel adıdır.

---

## Read

Veritabanındaki kayıtları okumak için kullanılır.

---

## URL Parametresi

```php
$id = $_GET["id"];
```

Örnek

```
Read.php?id=5
```

---

## Prepared Statement

SQL Injection saldırılarını önlemek için kullanılır.

```php
$stmt = $db->prepare(...);
```

---

## bindParam()

Değişkeni SQL sorgusuna bağlar.

```php
$stmt->bindParam(":id", $id);
```

---

## fetch()

İlk bulunan kaydı döndürür.

```php
$user = $stmt->fetch(PDO::FETCH_ASSOC);
```

---

## Dikkat Edilecekler

- id sayısal olmalıdır.
- Kullanıcı bulunamazsa uygun hata mesajı gösterilmelidir.
- Hassas bilgiler (şifre vb.) kullanıcıya gösterilmemelidir.
