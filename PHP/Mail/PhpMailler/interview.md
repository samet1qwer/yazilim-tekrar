# PHPMailer | Mülakat Soruları

## PHPMailer nedir?

PHP için gelişmiş e-posta gönderme kütüphanesidir.

---

## Neden mail() yerine PHPMailer kullanılır?

- SMTP desteği
- Güvenlik
- HTML Mail
- Attachment
- Exception
- Daha yüksek teslim oranı

---

## Composer ile nasıl kurulur?

```bash
composer require phpmailer/phpmailer
```

---

## SMTP nedir?

Mail gönderimi sağlayan protokoldür.

---

## TLS ile SSL arasındaki fark nedir?

Her ikisi de bağlantıyı şifreler.

Modern uygulamalarda TLS tercih edilir.

---

## Gmail SMTP bilgileri nelerdir?

Host

```
smtp.gmail.com
```

TLS

```
587
```

SSL

```
465
```

---

## App Password nedir?

Google hesabında oluşturulan uygulama özel şifresidir.

---

## SMTP şifresi neden GitHub'a yüklenmemelidir?

Güvenlik nedeniyle.

Bunun yerine

- .env
- Environment Variable

kullanılmalıdır.

---

## PHPMailer hangi özellikleri destekler?

- SMTP
- SSL/TLS
- HTML Mail
- Attachment
- CC
- BCC
- Reply-To
- Exception Handling

---

## Gerçek projelerde PHPMailer yerine başka neler kullanılabilir?

- Symfony Mailer
- Laravel Mail
- Mailgun
- SendGrid
- Amazon SES
