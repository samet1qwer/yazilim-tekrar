# Notlar

## File Upload

PHP'de dosya yükleme işlemleri `$_FILES` dizisi kullanılarak yapılır.

---

## $\_FILES

```php
$_FILES['image']
```

Yüklenen dosyanın bilgilerini içerir.

---

## pathinfo()

```php
pathinfo($fileName, PATHINFO_EXTENSION)
```

Dosyanın uzantısını döndürür.

---

## MIME Type

```php
$file['type']
```

Dosyanın içerik tipini belirtir.

---

## in_array()

```php
in_array($fileExtension, $allowed)
```

Dosya uzantısının izin verilenler arasında olup olmadığını kontrol eder.

---

## Dosya Boyutu

```php
$file['size']
```

Dosyanın byte cinsinden boyutunu döndürür.

---

## uniqid()

```php
$newFileName = uniqid() . ".jpg";
```

Her yüklenen dosya için benzersiz isim oluşturur.

---

## move_uploaded_file()

```php
move_uploaded_file($tmpName, $uploadPath);
```

Geçici dizindeki dosyayı hedef klasöre taşır.

---

## PDO

```php
$stmt = $db->prepare(...);
```

Veritabanına güvenli kayıt işlemi yapar.

---

## JSON Response

```php
echo json_encode(...);
```

İstemciye JSON formatında cevap gönderir.

---

## Dikkat Edilecekler

- Dosya uzantısına tek başına güvenilmemelidir.
- MIME Type doğrulanmalıdır.
- Dosya boyutu sınırlandırılmalıdır.
- Benzersiz dosya adı kullanılmalıdır.
- uploads klasörü yazılabilir olmalıdır.
- SQL sorgularında Prepared Statement kullanılmalıdır.

---

## Best Practices

- `finfo_file()` ile gerçek MIME Type doğrulanmalıdır.
- Maksimum dosya boyutu belirlenmelidir.
- Rastgele dosya adı kullanılmalıdır.
- Eski dosyalar temizlenmelidir.
- Dosya adı kullanıcıdan alınmamalıdır.
- Upload klasörü yetkilendirilmelidir.

---

## Güvenlik

Dosya yükleme sistemleri en fazla saldırıya uğrayan alanlardan biridir.

Korunulması gereken saldırılar:

- Web Shell Upload
- Remote Code Execution (RCE)
- Double Extension
- MIME Type Spoofing
- Path Traversal

Gerçek projelerde yalnızca uzantı kontrolü yeterli değildir. Dosyanın gerçek içeriği de doğrulanmalıdır.
