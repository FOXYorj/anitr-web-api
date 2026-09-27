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
            "malId": 999999,
            "watchable": true,
            "has4k": true,
            "slug": "999999-slayervoxy-kurucu",
            "title": "SlayerVoxy",
            "titleOriginal": "SlayerVoxy - Genç Girişimci",
            "score": 10.0,
            "year": 2026,
            "status": "airing",
            "episodes": 1,
            "genres": [
              "Efsane",
              "Girişimci",
              "Kurucu"
            ],
            "poster": "https://anitrwebservice.rf.gd/images/backdrops/slayervoxy.jpg",
            "coverW": null,
            "backdrop": "/images/backdrops/slayervoxy.jpg",
            "logo": null,
            "synopsis": "Anitr web sisteminin kurucusu, genç girişimci ve vizyoner lider.",
            "synopsisTr": "Anitr web sisteminin kurucusu, genç girişimci ve vizyoner lider SlayerVoxy'nin efsanevi hikayesi."
          },
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
            "synopsis": "Centuries ago, mankind was slaughtered to near extinction...",
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/blue-lock.jpg",
            "logo": null,
            "synopsis": "After reflecting on the current state of Japanese soccer...",
            "synopsisTr": "Japon futbolunun mevcut durumu üzerine düşündükten sonra..."
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/frieren.jpg",
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/rezero.jpg",
            "logo": null,
            "synopsis": "When Subaru Natsuki leaves the convenience store...",
            "synopsisTr": "Subaru Natsuki marketten çıktığında..."
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/steel-ball-run.jpg",
            "logo": null,
            "synopsis": "Set in 1890, the Steel Ball Run is a cross-country horse race...",
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/bleach.jpg",
            "logo": null,
            "synopsis": "Ichigo Kurosaki is an ordinary high schooler...",
            "synopsisTr": "Ichigo Kurosaki, ailesi yozlaşmış bir ruh olan Hollow tarafından saldırıya uğrayana kadar..."
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/one-piece.jpg",
            "logo": null,
            "synopsis": "Gol D. Roger was known as the 'Pirate King'...",
            "synopsisTr": "Gol D. Roger, Grand Line'da yelken açmış en güçlü korsan..."
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/naruto.jpg",
            "logo": null,
            "synopsis": "Moments prior to Naruto Uzumaki's birth...",
            "synopsisTr": "Naruto Uzumaki'nin doğumundan dakikalar önce..."
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
            "backdrop": "https://raw.githubusercontent.com/FOXYorj/anitr-web-api/images/backdrops/jujutsu-kaisen.jpg",
            "logo": null,
            "synopsis": "Idly indulging in baseless paranormal activities...",
            "synopsisTr": "Lise öğrencisi Yuuji Itadori, Gizem Kulübü ile..."
          }
        ]
      },
      "filmler": {
        "title": "En İyi Anime Filmleri",
        "desc": "Tüm zamanların en iyi anime filmleri",
        "items": [
          {
            "malId": 999999,
            "watchable": true,
            "has4k": true,
            "slug": "999999-slayervoxy-kurucu",
            "title": "SlayerVoxy",
            "titleOriginal": "SlayerVoxy - Genç Girişimci",
            "score": 10.0,
            "year": 2026,
            "status": "airing",
            "episodes": 1,
            "genres": [
              "Efsane",
              "Girişimci",
              "Kurucu"
            ],
            "poster": "https://anitrwebservice.rf.gd/images/backdrops/slayervoxy.jpg",
            "coverW": null,
            "backdrop": "/images/backdrops/slayervoxy.jpg",
            "logo": null,
            "synopsis": "Anitr web sisteminin kurucusu, genç girişimci ve vizyoner lider.",
            "synopsisTr": "Anitr web sisteminin kurucusu, genç girişimci ve vizyoner lider SlayerVoxy'nin efsanevi hikayesi."
          },
          {
            "malId": 57555,
            "watchable": true,
            "has4k": false,
            "slug": "57555-chainsaw-man-movie-reze-hen",
            "title": "Chainsaw Man Movie: Reze-hen",
            "titleOriginal": "Chainsaw Man Movie: Reze-hen",
            "score": 9.05,
            "year": 2025,
            "status": "upcoming",
            "episodes": 1,
            "genres": [
              "Action",
              "Fantasy"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1349/140416l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/csm-reze.jpg",
            "logo": null,
            "synopsis": "Chainsaw Man Reze arc movie.",
            "synopsisTr": "Chainsaw Man Reze arc filmi."
          },
          {
            "malId": 39486,
            "watchable": true,
            "has4k": false,
            "slug": "39486-gintama-the-final",
            "title": "Gintama: The Final",
            "titleOriginal": "Gintama: The Final",
            "score": 9.05,
            "year": 2021,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Action",
              "Comedy",
              "Sci-Fi"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1245/116760l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/gintama-final.jpg",
            "logo": null,
            "synopsis": "New Gintama movie.",
            "synopsisTr": "Gintama serisinin final filmi."
          },
          {
            "malId": 28851,
            "watchable": true,
            "has4k": false,
            "slug": "28851-koe-no-katachi",
            "title": "A Silent Voice",
            "titleOriginal": "Koe no Katachi",
            "score": 8.93,
            "year": 2016,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Drama"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1122/96435l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/koe-no-katachi.jpg",
            "logo": null,
            "synopsis": "As a wild youth, elementary school student Shouya Ishida...",
            "synopsisTr": "İlkokul öğrencisi Shouya Ishida sağır bir kıza zorbalık yapar..."
          },
          {
            "malId": 15335,
            "watchable": true,
            "has4k": false,
            "slug": "15335-gintama-movie-2",
            "title": "Gintama Movie 2: Kanketsu-hen",
            "titleOriginal": "Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien Nare",
            "score": 8.89,
            "year": 2013,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Action",
              "Comedy",
              "Sci-Fi"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/10/53343l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/gintama-2.jpg",
            "logo": null,
            "synopsis": "When Gintoki apprehends a movie pirate...",
            "synopsisTr": "Gintoki geleceğe gider ve Edo'nun yıkıldığını görür."
          },
          {
            "malId": 59571,
            "watchable": true,
            "has4k": false,
            "slug": "59571-shingeki-no-kyojin-movie-the-last-attack",
            "title": "Attack on Titan Movie: The Last Attack",
            "titleOriginal": "Shingeki no Kyojin Movie: Kanketsu-hen - The Last Attack",
            "score": 8.84,
            "year": 2024,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Action",
              "Drama",
              "Suspense"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1760/145100l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/aot-last-attack.jpg",
            "logo": null,
            "synopsis": "Theatrical compilation of the final chapters.",
            "synopsisTr": "Attack on Titan final bölümlerinin sinema versiyonu."
          },
          {
            "malId": 37987,
            "watchable": true,
            "has4k": false,
            "slug": "37987-violet-evergarden-movie",
            "title": "Violet Evergarden Movie",
            "titleOriginal": "Violet Evergarden Movie",
            "score": 8.83,
            "year": 2020,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Drama",
              "Fantasy"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1824/110196l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/violet-evergarden.jpg",
            "logo": null,
            "synopsis": "Several years have passed since the end of the Great War...",
            "synopsisTr": "Büyük Savaş'ın bitiminden yıllar sonra Violet hala Binbaşı Gilbert'i beklemektedir."
          },
          {
            "malId": 32281,
            "watchable": true,
            "has4k": false,
            "slug": "32281-kimi-no-na-wa",
            "title": "Your Name.",
            "titleOriginal": "Kimi no Na wa.",
            "score": 8.82,
            "year": 2016,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Drama",
              "Supernatural"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/5/87048l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/your-name.jpg",
            "logo": null,
            "synopsis": "Mitsuha Miyamizu, a high school girl...",
            "synopsisTr": "Tokyo'daki bir liseli genç ile kırsalda yaşayan bir kızın bedenleri yer değiştirir."
          },
          {
            "malId": 62277,
            "watchable": true,
            "has4k": false,
            "slug": "62277-gintama-movie-3-yoshiwara-daienjou",
            "title": "Gintama Movie 3: Yoshiwara Daienjou",
            "titleOriginal": "Gintama Movie 3: Yoshiwara Daienjou",
            "score": 8.79,
            "year": 2026,
            "status": "upcoming",
            "episodes": 1,
            "genres": [
              "Action",
              "Comedy"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/1567/146011l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/gintama-3.jpg",
            "logo": null,
            "synopsis": "Yoshiwara arc movie compilation.",
            "synopsisTr": "Gintama Yoshiwara arc'ının film versiyonu."
          },
          {
            "malId": 31758,
            "watchable": true,
            "has4k": false,
            "slug": "31758-kizumonogatari-iii-reiketsu-hen",
            "title": "Kizumonogatari III: Reiketsu-hen",
            "titleOriginal": "Kizumonogatari III: Reiketsu-hen",
            "score": 8.78,
            "year": 2017,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Action",
              "Mystery",
              "Supernatural"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/6/84249l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/kizumonogatari.jpg",
            "logo": null,
            "synopsis": "After helping revive the legendary vampire...",
            "synopsisTr": "Koyomi Araragi efsanevi vampiri canlandırdıktan sonra olanlar."
          },
          {
            "malId": 199,
            "watchable": true,
            "has4k": false,
            "slug": "199-sen-to-chihiro-no-kamikakushi",
            "title": "Spirited Away",
            "titleOriginal": "Sen to Chihiro no Kamikakushi",
            "score": 8.77,
            "year": 2001,
            "status": "finished",
            "episodes": 1,
            "genres": [
              "Adventure",
              "Award Winning",
              "Supernatural"
            ],
            "poster": "https://cdn.myanimelist.net/images/anime/6/79597l.webp",
            "coverW": null,
            "backdrop": "/images/backdrops/spirited-away.jpg",
            "logo": null,
            "synopsis": "Stubborn, spoiled, and naive, 10-year-old Chihiro Ogino...",
            "synopsisTr": "10 yaşındaki Chihiro, ailesiyle taşınırken ruhlar alemine hapsolur."
          }
        ]
      }
    }
  }
}
JSON;
?>
