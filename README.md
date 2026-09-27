# Anitr Web Service API

Bu proje, popüler animelerin listesini döndüren ve AnimeRank.tv'nin `home-rails` API yapısını taklit eden basit, veritabanı gerektirmeyen bir PHP API servisidir.

## Özellikler

* **JSON Çıktısı:** Sadece bir `index.php` üzerinden 10 adet popüler animenin verisini (MyAnimeList posterleri ve yerel arkaplan resimleri dahil) JSON formatında sunar.
* **CORS Desteği:** Farklı alan adlarından (localhost dahil) sorunsuz veri çekilebilmesi için `Access-Control-Allow-Origin: *` gibi gerekli tüm CORS başlıkları eklidir.
* **Sunucu Dostu:** Herhangi bir veritabanı (MySQL vb.) veya Node.js gerektirmez. InfinityFree gibi ücretsiz paylaşımlı barındırma hizmetlerinde anında çalışır.

## Klasör Yapısı

```
.
├── index.php                # Ana API dosyası, tüm JSON verisini içerir.
├── images/                  
│   └── backdrops/           # Kendi sunucunuzdan yüklenecek olan animelerin arkaplan görselleri.
└── README.md
```

## Kurulum ve Kullanım (InfinityFree veya Standart CPanel)

1. Bu depoyu (repository) indirin veya klonlayın.
2. Hosting panelinize giriş yapın ve **Dosya Yöneticisi (File Manager)** bölümünü açın.
3. Genellikle web dizini olan `htdocs` veya `public_html` klasörüne girin.
4. Bu projedeki `index.php` dosyasını ve `images` klasörünü sunucunuzun kök dizinine kopyalayın.
5. Arkaplan fotoğraflarınızın (`.jpg` formatında) `images/backdrops/` klasörü içerisinde doğru isimlerle olduğundan emin olun (Örn: `aot.jpg`, `death-note.jpg`).
6. Web adresinize istek attığınızda (Örn: `https://siteniz.com/`) API yanıt vermeye başlayacaktır.

## Frontend Tarafından Veri Çekme (JavaScript)

```javascript
fetch('https://siteniz.com/')
  .then(response => response.json())
  .then(data => {
    const animeler = data.data.rails.populer.items;
    console.log(animeler);
  })
  .catch(error => console.error('Hata:', error));
```
