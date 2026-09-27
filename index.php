<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=utf-8");

echo <<<JSON
{
  "success": true,
  "data": {
    "rails": {
      "populer": {
        "title": "Popüler Animeler",
        "desc": "En sevilen ve popüler 10 anime",
        "items": [
          {
            "malId": 16498,
            "watchable": true,
            "has4k": false,
            "slug": "16498-attack-on-titan",
            "title": "Attack on Titan",
            "titleOriginal": "Shingeki no Kyojin",
            "score": 8.57,
            "year": 2013,
            "status": "finished",
            "episodes": 25,
            "genres": [
              "Action",
              "Drama",
              "Suspense"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/10/47347l.webp",
            "coverW": null,
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/aot.jpg",
            "logo": null,
            "synopsis": "Centuries ago, mankind was slaughtered to near extinction by monstrous humanoid creatures called Titans...",
            "synopsisTr": "Yüzyıllar önce insanlık, Titan adı verilen devasa insansı yaratıklar tarafından yok edilmenin eşiğine getirilmişti..."
          },
          {
            "malId": 1535,
            "watchable": true,
            "has4k": false,
            "slug": "1535-death-note",
            "title": "Death Note",
            "titleOriginal": "Death Note",
            "score": 8.62,
            "year": 2006,
            "status": "finished",
            "episodes": 37,
            "genres": [
              "Supernatural",
              "Suspense"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1079/138100l.webp",
            "coverW": null,
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/death-note.jpg",
            "logo": null,
            "synopsis": "A shinigami, as a god of death, can kill any person...",
            "synopsisTr": "Bir şinigami (ölüm tanrısı), yüzünü gördüğü kurbanının adını bir deftere yazarak herhangi bir insanı öldürebilir..."
          },
          {
            "malId": 49596,
            "watchable": true,
            "has4k": false,
            "slug": "49596-blue-lock",
            "title": "Blue Lock",
            "titleOriginal": "Blue Lock",
            "score": 8.24,
            "year": 2022,
            "status": "finished",
            "episodes": 24,
            "genres": [
              "Sports"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1258/126929l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/blue-lock.jpg",
            "logo": null,
            "synopsis": "After reflecting on the current state of Japanese soccer...",
            "synopsisTr": "Japon futbolunun mevcut durumu üzerine düşündükten sonra, Japon Futbol Federasyonu Dünya Kupası'nı kazanmak için yeni bir plan yapar..."
          },
          {
            "malId": 52991,
            "watchable": true,
            "has4k": false,
            "slug": "52991-frieren",
            "title": "Frieren: Beyond Journey's End",
            "titleOriginal": "Sousou no Frieren",
            "score": 9.14,
            "year": 2023,
            "status": "finished",
            "episodes": 28,
            "genres": [
              "Adventure",
              "Drama",
              "Fantasy"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1015/138006l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/frieren.jpg",
            "logo": null,
            "synopsis": "During their decade-long quest to defeat the Demon King...",
            "synopsisTr": "İblis Kral'ı yenmek için on yıl süren görevleri sırasında kahraman grubu barışı yeniden sağlar..."
          },
          {
            "malId": 31240,
            "watchable": true,
            "has4k": false,
            "slug": "31240-re-zero",
            "title": "Re:ZERO -Starting Life in Another World-",
            "titleOriginal": "Re:Zero kara Hajimeru Isekai Seikatsu",
            "score": 8.23,
            "year": 2016,
            "status": "finished",
            "episodes": 25,
            "genres": [
              "Drama",
              "Fantasy",
              "Suspense"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/11/79410l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/rezero.jpg",
            "logo": null,
            "synopsis": "When Subaru Natsuki leaves the convenience store, the last thing he expects is to be wrenched from his everyday life...",
            "synopsisTr": "Subaru Natsuki marketten çıktığında, beklediği en son şey günlük hayatından koparılıp fantastik bir dünyaya sürüklenmektir..."
          },
          {
            "malId": 99999,
            "watchable": true,
            "has4k": false,
            "slug": "99999-jojo-steel-ball-run",
            "title": "JoJo's Bizarre Adventure: Steel Ball Run",
            "titleOriginal": "JoJo no Kimyou na Bouken Part 7: Steel Ball Run",
            "score": 9.3,
            "year": 2026,
            "status": "upcoming",
            "episodes": 24,
            "genres": [
              "Action",
              "Adventure",
              "Supernatural"
            ],
            "poster": "https://cdn.myanimelist.net/images/manga/3/179882l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/steel-ball-run.jpg",
            "logo": null,
            "synopsis": "Set in 1890, the Steel Ball Run is a cross-country horse race spanning the United States...",
            "synopsisTr": "1890'da geçen Steel Ball Run, Amerika Birleşik Devletleri'ni kapsayan bir kros at yarışıdır..."
          },
          {
            "malId": 269,
            "watchable": true,
            "has4k": false,
            "slug": "269-bleach",
            "title": "Bleach",
            "titleOriginal": "Bleach",
            "score": 7.93,
            "year": 2004,
            "status": "finished",
            "episodes": 366,
            "genres": [
              "Action",
              "Adventure",
              "Supernatural"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/3/40451l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/bleach.jpg",
            "logo": null,
            "synopsis": "Ichigo Kurosaki is an ordinary high schooler—until his family is attacked by a Hollow...",
            "synopsisTr": "Ichigo Kurosaki, ailesi yozlaşmış bir ruh olan Hollow tarafından saldırıya uğrayana kadar sıradan bir lise öğrencisidir..."
          },
          {
            "malId": 21,
            "watchable": true,
            "has4k": false,
            "slug": "21-one-piece",
            "title": "One Piece",
            "titleOriginal": "One Piece",
            "score": 8.71,
            "year": 1999,
            "status": "airing",
            "episodes": 1100,
            "genres": [
              "Action",
              "Adventure",
              "Fantasy"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1244/138851l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/one-piece.jpg",
            "logo": null,
            "synopsis": "Gol D. Roger was known as the 'Pirate King,' the strongest and most infamous being to have sailed the Grand Line...",
            "synopsisTr": "Gol D. Roger, Grand Line'da yelken açmış en güçlü ve en kötü şöhretli varlık olan 'Korsan Kral' olarak biliniyordu..."
          },
          {
            "malId": 20,
            "watchable": true,
            "has4k": false,
            "slug": "20-naruto",
            "title": "Naruto",
            "titleOriginal": "Naruto",
            "score": 7.99,
            "year": 2002,
            "status": "finished",
            "episodes": 220,
            "genres": [
              "Action",
              "Adventure",
              "Fantasy"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/13/17405l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/naruto.jpg",
            "logo": null,
            "synopsis": "Moments prior to Naruto Uzumaki's birth, a huge demon known as the Kyuubi, the Nine-Tailed Fox, attacked Konohagakure...",
            "synopsisTr": "Naruto Uzumaki'nin doğumundan dakikalar önce, Dokuz Kuyruklu Tilki Kyuubi olarak bilinen devasa bir iblis Konohagakure'ye saldırdı..."
          },
          {
            "malId": 40748,
            "watchable": true,
            "has4k": false,
            "slug": "40748-jujutsu-kaisen",
            "title": "Jujutsu Kaisen",
            "titleOriginal": "Jujutsu Kaisen",
            "score": 8.61,
            "year": 2020,
            "status": "finished",
            "episodes": 24,
            "genres": [
              "Action",
              "Award Winning",
              "Fantasy"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1171/109222l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/jujutsu-kaisen.jpg",
            "logo": null,
            "synopsis": "Idly indulging in baseless paranormal activities with the Occult Club, high schooler Yuuji Itadori spends his days...",
            "synopsisTr": "Lise öğrencisi Yuuji Itadori, Gizem Kulübü ile temelsiz doğaüstü etkinliklere katılarak günlerini sıradan bir şekilde geçirmektedir..."
          }
        ]
      }
    }
  }
}
JSON;
?>
