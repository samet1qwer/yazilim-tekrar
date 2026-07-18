# Notlar

## Composer

PHPMailer Composer ile kurulur.

```bash
composer require phpmailer/phpmailer
```

---

## Autoload

```php
require "vendor/autoload.php";
```

---

## SMTP

Mail doğrudan SMTP sunucusu üzerinden gönderilir.

```php
$mail->isSMTP();
```

---

## Host

SMTP sunucusu.

```php
smtp.gmail.com
```

---

## SMTPAuth

SMTP kimlik doğrulamasını açar.

```php
$mail->SMTPAuth = true;
```

---

## Username

SMTP kullanıcı adı.

---

## Password

SMTP şifresi veya uygulama şifresi.

---

## SMTPSecure

Bağlantıyı TLS veya SSL ile şifreler.

```php
$mail->SMTPSecure = "tls";
```

---

## Port

TLS

```
587
```

SSL

```
465
```

---

## HTML Mail

```php
$mail->isHTML(true);
```

---

## Exception

Gönderim sırasında oluşan hatalar yakalanabilir.

```php
try {

} catch (Exception $e) {

}
```

---

# Dikkat Edilecekler

- Şifre kod içine yazılmamalıdır.
- .env kullanılmalıdır.
- Gmail için App Password kullanılmalıdır.
- SMTP bilgileri GitHub'a yüklenmemelidir.
