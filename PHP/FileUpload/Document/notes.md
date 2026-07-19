# Notlar

## Document Upload

PHP'de belge yükleme işlemleri `$_FILES` dizisi ile gerçekleştirilir.

---

## $\_FILES

```php
$_FILES['Document']
```

Yüklenen dosyanın tüm bilgilerini içerir.

---

## pathinfo()

```php
$extension = pathinfo($fileName, PATHINFO_EXTENSION);
```

Dosyanın uzantısını elde eder.

---

## MIME Type

```php
$fileType
```

Dosyanın içerik türünü belirtir.

---

## in_array()

```php
in_array($extension, $allowed)
```

Dosya uzantısının izin verilen uzantılar arasında olup olmadığını kontrol eder.

---

## Dosya Boyutu

```php
$fileSize <= 1000000
```

Belirlenen maksimum dosya boyutunu kontrol eder.

---

## uniqid()

```php
$newFileName = uniqid() . "." . $extension;
```

Dosya adı çakışmalarını önlemek için benzersiz isim oluşturur.

---

## move_uploaded_file()

```php
move_uploaded_file($fileTmpName, $uploadPath);
```

Geçici dizindeki dosyayı hedef klasöre taşır.

---

## PDO

```php
$stmt = $db->prepare($sql);
```

Veritabanına güvenli kayıt yapılmasını sağlar.

---

## JSON Response

```php
echo json_encode(...);
```

İşlem sonucunu JSON formatında döndürür.

---

## Dikkat Edilecekler

- Dosya uzantısı doğrulanmalıdır.
- MIME Type kontrol edilmelidir.
- Dosya boyutu sınırlandırılmalıdır.
- Benzersiz dosya adı kullanılmalıdır.
- uploads klasörü yazılabilir olmalıdır.
- SQL sorgularında Prepared Statement kullanılmalıdır.

---

## Best Practices

- `finfo_file()` ile gerçek MIME Type doğrulanmalıdır.
- Dosya adı kullanıcıdan alınmamalıdır.
- Rastgele dosya adı kullanılmalıdır.
- Upload klasöründe PHP dosyalarının çalıştırılması engellenmelidir.
- Maksimum dosya boyutu belirlenmelidir.
- Gereksiz eski dosyalar temizlenmelidir.

---

## Güvenlik

Belge yükleme sistemleri aşağıdaki saldırılara karşı korunmalıdır:

- MIME Type Spoofing
- Double Extension
- Path Traversal
- Web Shell Upload
- Remote Code Execution (RCE)

Gerçek projelerde yalnızca uzantı kontrolü yeterli değildir. Dosyanın gerçek içeriği de doğrulanmalıdır.
