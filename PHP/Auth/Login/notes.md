# Notlar

## session_start()

Session kullanmadan önce mutlaka çağrılmalıdır.

```php
session_start();
```

---

## trim()

Kullanıcının yanlışlıkla girdiği boşlukları temizler.

```php
$email = trim($_POST["email"]);
```

---

## PDO Prepared Statement

SQL Injection saldırılarını önlemek için kullanılır.

```php
$stmt = $get->prepare("
SELECT *
FROM users
WHERE email = :email
");
```

Veriyi bağlama

```php
$stmt->execute([
    "email" => $email
]);
```

---

## fetch()

İlk bulunan kaydı dizi olarak döndürür.

```php
$user = $stmt->fetch(PDO::FETCH_ASSOC);
```

---

## password_verify()

Girilen parola ile veritabanındaki hash'i karşılaştırır.

```php
password_verify($password, $user["password"]);
```

Hash oluşturma

```php
password_hash($password, PASSWORD_DEFAULT);
```

---

## Session

Başarılı girişten sonra kullanıcı bilgisi Session'a kaydedilir.

```php
$_SESSION["user_id"] = $user["id"];
$_SESSION["user_name"] = $user["name"];
```

---

## Sayfa Yönlendirme

```php
header("Location: ../../Dashboard/Dashboard.php");
exit;
```

`header()` çağrısından sonra `exit` kullanılması önerilir.

---

## Dikkat Edilecekler

- Session Hijacking
- Brute Force saldırıları
- SQL Injection
- XSS
- CSRF
- Güçlü parola politikası
- Rate Limiting
