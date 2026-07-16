# PHP CRUD - Read | Mülakat Soruları

## 1. CRUD nedir?

Create, Read, Update ve Delete işlemlerinin genel adıdır.

---

## 2. Read işlemi ne yapar?

Veritabanındaki kayıtları okur.

---

## 3. `fetch()` ne döndürür?

İlk bulunan kaydı dizi olarak döndürür.

---

## 4. `fetchAll()` ile `fetch()` arasındaki fark nedir?

`fetch()`

Tek kayıt döndürür.

`fetchAll()`

Tüm kayıtları döndürür.

---

## 5. Neden Prepared Statement kullanılır?

SQL Injection saldırılarını önlemek için.

---

## 6. URL parametreleri nasıl alınır?

```php
$_GET["id"];
```

---

## 7. `bindParam()` ile `bindValue()` arasındaki fark nedir?

`bindParam()` değişkeni referans olarak bağlar.

`bindValue()` mevcut değeri bağlar.

---

## 8. Read işleminde hangi güvenlik kontrolleri yapılmalıdır?

- ID doğrulaması
- SQL Injection koruması
- Yetkilendirme kontrolü
- Hassas verilerin gizlenmesi

---

## 9. Kullanıcı bulunamazsa ne yapılmalıdır?

Uygun bir hata mesajı veya yönlendirme yapılmalıdır.

---

## 10. Gerçek projelerde Read işlemi nasıl geliştirilebilir?

- Sayfalama (Pagination)
- Arama (Search)
- Filtreleme
- Sıralama (Order By)
- Yetkilendirme
