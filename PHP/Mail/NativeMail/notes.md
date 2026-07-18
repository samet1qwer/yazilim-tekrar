# Notlar

## mail()

PHP'nin yerleşik mail fonksiyonudur.

```php
mail($to, $subject, $message, $headers);
```

---

## Header

Mail'in kimden gönderildiğini belirtir.

```php
$headers = "From: mail@example.com";
```

---

## Reply-To

Cevapların hangi adrese gönderileceğini belirler.

```php
Reply-To:
```

---

## HTML Mail

```php
Content-type:text/html;charset=UTF-8
```

HTML içerikli mail göndermeyi sağlar.

---

## JSON

İşlem sonucu istemciye JSON olarak döndürülür.

---

# Dikkat Edilecekler

- Sunucuda mail servisi yapılandırılmış olmalıdır.
- Başarısız gönderimler kontrol edilmelidir.
- Spam filtrelerine takılabilir.
- Büyük projelerde tercih edilmez.
