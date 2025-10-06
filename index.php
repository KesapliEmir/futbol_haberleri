<?php
// örnek: veritabanına bağlan
// $conn = mysqli_connect("localhost","root","","veritabani");
?>
<!DOCTYPE html>
<html lang="en">

 

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- CSS dosyaları -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Ana CSS Dosyası -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-end justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Logo görseli -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Futbol Haberleri</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#anasayfa">Anasayfa</a></li>
            <li><a href="#türkiyefutbolrehberi">Türkiye Futbol Rehberi</a></li>
            <li><a href="#gununhaberleri">Günün Manşetleri</a></li>
            <li><a href="#haberler">Haberler</a></li>
            <li><a href="#gununyorumu">Günün Yorumu</a></li>
            <li><a href="#hakkında">Hakkında</a></li>
            </li>
            <li><a href="#forum">Forum</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Kahraman Bölümü --> 
  
    <section id="anasayfa" class="hero section dark-background">


        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

  <div class="carousel-item active">
    <img src="assets/img/galatarayy.jpg" alt="">
    <div class="carousel-container">
      <h2><span>Derbi Heyecanı İstanbul'u sardı</span> Taraftarlar biletleri günler öncesinden tüketti.</h2>
      <p>
        Bu hafta oynanacak dev derbi Galatasaray-Beşiktaş mücadelesi öncesi şehirde büyük bir hareketlilik vardı. Taraftarlar, maç biletlerini günler öncesinden tüketirken, güvenlik önlemleri ve trafik düzenlemeleri de yoğunlaştı. Teknik direktörlerin kadro tercihleri ve stratejileri maç öncesi merak konusu olurken, futbolseverler derbinin keyfini şimdiden yaşamaya başladı. Basın mensupları ve spor yorumcuları da karşılaşmayı yakından takip ediyor.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/sergenn.jpg" alt="">
    <div class="carousel-container">
      <h2><span>Taraftarların Umudu</span> Yeniden Yeşerdi</h2>
      <p>
        Beşiktaş camiası, Sergen Yalçın’ın kulübe dönüşüyle tribünlerde coşkunun arttığını ve futbolcuların motivasyonunun yükseldiğini söylüyor. Göreve kısa süre önce başlamasına rağmen saha içi düzeni ve oyuncuların performansı dikkat çekiyor. Taraftarlar, sosyal medyada Yalçın’a büyük destek verirken, teknik ekip yeni oyun planları ile ligdeki hedefleri güçlendirmeyi planlıyor.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/göztepeee.jpg" alt="">
    <div class="carousel-container">
      <h2><span>İzmir’de Sessizlik,</span> Samsun'da Büyük Sevinç</h2>
      <p>
        Zorlu Göztepe deplasmanında Samsunspor kritik bir galibiyet aldı ve 90 dakika sonunda gülen taraf oldu. Deplasmandaki bu zafer, taraftarlar arasında büyük coşku yarattı. Teknik ekip, takımın performansını övdü ve üst sıralardaki iddialarını güçlendireceklerini açıkladı. Maç boyunca sergilenen disiplinli oyun ve etkili hücumlar, Samsunspor’un başarısında öne çıktı.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/barca.jpg" alt="">
    <div class="carousel-container">
      <h2><span>El Clasico’da,</span> Barcelona Güldü</h2>
      <p>
        Camp Nou’da oynanan dev maçta Barcelona, Real Madrid’i 2-1 mağlup ederek zirve yarışında kritik bir galibiyet aldı. Maç boyunca Barcelona’nın baskılı oyunu, taraftarları coşturdu. Real Madrid’in atakları karşısında savunmasını güçlendiren Katalan ekibi, ikinci yarıda gelen golle maçı kopardı ve büyük bir moral kazandı.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/paris-bayern.jpg" alt="">
    <div class="carousel-container">
      <h2><span>Paris’te,</span> Gol Yağmuru</h2>
      <p>
        PSG ile Bayern Münih arasında oynanan Şampiyonlar Ligi çeyrek finali 4-4’lük skorla nefesleri kesti. Maç boyunca tempo hiç düşmedi, taraftarlar gol düellosunu heyecanla takip etti. Özellikle son dakikalarda yaşanan kritik pozisyonlar ve kalecilerin kurtarışları, karşılaşmayı unutulmaz kıldı. Her iki takım da mücadeleci oyunuyla Avrupa futbolunun gücünü gösterdi.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/juventus-milan.jpg" alt="">
    <div class="carousel-container">
      <h2><span>Torino’da,</span> İtalyan Derbisi</h2>
      <p>
        Juventus, Milan karşısında 1-0’lık skorla Serie A’da zirve yarışına ortak oldu. Maç boyunca Juventus’un disiplinli savunması ve hızlı kontra atakları öne çıktı. Taraftarlar tribünlerde coşku içinde maçı takip ederken, teknik ekip oyuncuların performansından memnun kaldı ve ligde üst sıralarda kalmayı hedefliyor.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/arsenal-manchesterunited.jpg" alt="">
    <div class="carousel-container">
      <h2><span>İngiltere'de </span> Arsenal Fırtınası</h2>
      <p>
        Emirates Stadyumu’nda oynanan zirve mücadelesinde Arsenal, Manchester United’i 3-2 mağlup etti. Maç boyunca sergilenen hızlı ataklar ve etkili pas oyunuyla taraftarları coşturan ev sahibi ekip, bu galibiyetle Premier Lig’de iddiasını sürdürdü. Teknik direktör maç sonrası oyuncularının performansını övdü ve ligdeki hedeflerine odaklanacaklarını belirtti.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
  <img src="assets/img/ts-fbmaçönü.jpg" alt="">
  <div class="carousel-container">
    <h2><span>Trabzon'da </span> Derbi Heyecanı</h2>
    <p>
      Şenol Güneş Spor Kompleksi’nde oynanan dev mücadelede Trabzonspor ile Fenerbahçe 1-1 berabere kaldı. 
      Karadeniz ekibi ilk yarıda tempoyu yüksek tutarak etkili bir oyun sergiledi ve öne geçti. 
      İkinci yarıda oyunun kontrolünü eline alan Fenerbahçe, son dakikalarda bulduğu golle skoru eşitledi. 
      Tribünlerde müthiş bir atmosfer yaşanırken, iki takım da galibiyet için sahada büyük mücadele verdi. 
      Bu sonuçla Fenerbahçe zirve yarışında bir puan kaybederken, Trabzonspor da sahasında üç puanı kaçırdı.
    </p>
  </div>
</div><!-- Döngü Sonu Öğesi -->


  <div class="carousel-item">
    <img src="assets/img/dortmund.jpg" alt="">
    <div class="carousel-container">
      <h2><span>Almanya’da</span> Ruhr Derbisi Coşkusu</h2>
      <p>
        Signal Iduna Park’ta oynanan maçta Dortmund, Schalke’yi 4-2 mağlup ederek taraftarlarını sevince boğdu. Maç boyunca hız kesmeyen iki takım, izleyenlere büyük bir heyecan sundu. Dortmund’un hücum hattı etkili olurken, savunmadaki disiplinli oyun galibiyetin anahtarı oldu. Taraftarlar maç sonunda zaferi coşkuyla kutladı.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/porto-benficaa.jpg" alt="">
    <div class="carousel-container">
      <h2><span>Porto’da</span> Kritik 3 Puan</h2>
      <p>
        Porto, Benfica karşısında 2-1 kazanarak Portekiz Süper Ligi'nde liderliğini pekiştirdi. Maç boyunca rakibine karşı agresif bir oyun sergileyen Porto, taraftarları önünde zaferi elde etti. Teknik direktör ve oyuncular maç sonrası ligdeki hedefleri için motivasyonlarını yüksek tuttu ve şampiyonluk yarışında iddialarını sürdüreceklerini belirtti.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/sevilla.jpg" alt="">
    <div class="carousel-container">
      <h2><span>İspanya ligi'nde,</span> Zorlu Mücadele</h2>
      <p>
        Atletico Madrid ile Sevilla arasında oynanan maç golsüz eşitlikle sona erdi. Her iki takım da maç boyunca gol için baskı kurmasına rağmen kalecilerin başarılı performansı ve savunma organizasyonu sonucu değiştirmedi. Bu sonuç, ligdeki puan durumunu yakından etkilerken, her iki takım da bir sonraki maçlarına odaklanacak.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <div class="carousel-item">
    <img src="assets/img/ajax.jpg" alt="">
    <div class="carousel-container">
      <h2><span>PSV 1.liği</span> Kaybetti Ezeli Rekabet</h2>
      <p>
        Ajax, PSV karşısında 2-0 kazanarak ligde zirveye oturdu. Maç boyunca sergilenen etkili hücumlar ve disiplinli savunma, taraftarları coşturdu. PSV ise sahada istedikleri oyunu sergileyemedi ve kritik puan kaybı yaşadı. Ajax’ın galibiyeti, ligdeki rekabetin ne kadar çekişmeli olduğunu bir kez daha gözler önüne serdi.
      </p>
    </div>
  </div><!-- Döngü Sonu Öğesi-->

  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

  <ol class="carousel-indicators"></ol>

</div>


    </section><!-- /Kahraman Bölümü-->


    </section>
    <!-- / Türkiye Futbol Rehber Bölümü -->
    <section id="türkiyefutbolrehberi" class="menu section">

      <!-- Bölüm Başlığı -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Türkiye Futbol Rehberi</h2>
        <div><span>Haftanın Karşılaşmaları</span>
      </div><!-- Son Bölüm Başlığı-->

      <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul class="menu-filters isotope-filters">
              <li data-filter="*" class="filter-active"></li>
            </ul>
          </div>
        </div><!--Menü Filtreleri -->

        <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6 menu-item isotope-item filter-starters">
            <img src="assets/img/samsungöztepe.jpg" class="menu-img" alt="">
            <div class="">
              <a>Samsun – Göztepe</a>
            </div>
            <div class="menu-ingredients">
             Süper Lig'de 4.lük mücadelesi Saat 16:00 | BeIN Max 2
            </div>
          </div><!-- Menü Öğesi -->

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="assets/img/beşiktaştrabzon.jpg" class="menu-img" alt="">
            <div class="">
              <a>Beşiktaş – Trabzonspor</a>
            </div>
            <div class="menu-ingredients">
              Süper Lig’de dev mücadele Saat 19:00 | BeIN Sports 2
            </div>
          </div><!-- Menü Öğesi -->

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="assets/img/galatasarayfenerbahçe.jpg" class="menu-img" alt="">
            <div class="">
              <a>Galatasaray – Fenerbahçe</a>
            </div>
            <div class="menu-ingredients">
              Süper Lig’de dev derbi! Kritik 3 puan mücadelesi Saat 20:00 | BeIN Sports 1
            </div>
            </div><!-- Menü Öğesi -->

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="assets/img/istanbul-gaziantep.jpg" class="menu-img" alt="">
            <div class="">
              <a>Başakşehir FK - Gaziantep FK</a>
            </div>
            <div class="menu-ingredients">
              Süper Lig’de zirve mücadelesi Saat 19:00 | BeIN Sports 3
            </div>
          </div><!-- Menü Öğesi-->

          <div class="col-lg-6 menu-item isotope-item filter-starters">
           <img src="assets/img/alanyaantalya.jpg" class="menu-img" alt="">
           <div class="">
            <a>Alanyaspor – Antalyaspor</a>
          </div>
          <div class="menu-ingredients">
            Süper Lig’de kritik 3 puan mücadelesi Saat 17:00 | BeIN Sports 1
          </div>
          </div><!-- Menü Öğesi -->

         <div class="col-lg-6 menu-item isotope-item filter-salads">
          <img src="assets/img/kocaeligençlerbirliği.jpg" class="menu-img" alt="">
          <div class="">
           <a>Kocaelispor – Gençlerbirliği</a>
          </div>
         <div class="menu-ingredients">
           Süper Lig’de zorlu mücadele Saat 16:00 | BeIN Sports 2
         </div>
         </div><!-- Menü Öğesi -->

        <div class="col-lg-6 menu-item isotope-item filter-specialty">
         <img src="assets/img/kasımpaşa.jpg" class="menu-img" alt="">
         <div class="">
           <a>Kasımpaşa – Kayserispor</a>
         </div>
         <div class="menu-ingredients">
           Süper Lig’de orta sıra mücadelesi Saat 18:00 | BeIN Sports 3
        </div>
        </div><!-- Menü Öğesi -->

        <div class="col-lg-6 menu-item isotope-item filter-specialty">
         <img src="assets/img/konyaeyüp.jpg" class="menu-img" alt="">
        <div class="">
          <a>Konyaspor - Eyüp FK</a>
        </div>
        <div class="menu-ingredients">
         Süper Lig’de heyecan dolu mücadele Saat 19:00 | BeIN Sports 4
        </div>
        </div><!-- Menü Öğesi -->
      </div>

    </section><!-- /Menü Bölümü -->

    <!-- Günün Haberleri Bölümü -->
    <section id="gununhaberleri" class="events section">

      <img class="slider-bg" src="assets/img/saha.png" alt="" data-aos="fade-in">

      <div class="container">

        <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide"> 
             <div class="row gy-4 event-item">
               <div class="col-lg-6">
                <img src="assets/img/gs-bjkmaç.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Galatasaray - Beşiktaş Derbisinde Nefesler Tutuldu!</h3>
                <div class="price"></div>
                <p class="fst-italic">
                  Süper Lig’in dev maçında heyecan doruktaydı, iki ezeli rakip sahada her şeyini ortaya koydu.
                </p>
                <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>İlk yarıda Beşiktaş oyuna hakim olurken birçok pozisyon buldu.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Galatasaray ikinci yarıda baskıyı artırarak dengeyi sağladı.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Maçın son anlarında iki taraf da galibiyet golü için yüklendi, ancak skor 1-1’de kaldı.</span></li>
                </ul>
                 <p>
                  Derbi sonrası sosyal medya adeta karıştı. Taraftarlar hem performansları hem de hakem kararlarını tartıştı. 
                  Yorgun olmasına rağmen Galatasaray pes etmezken, Beşiktaş’ın ilk yarıdaki üstün oyunu alkış topladı. 
                  Bu sonuçla iki takım da zirve yarışında kritik bir puanı paylaştı.
                </p>
               </div>
              </div>
             </div><!-- Kaydırıcıyı Sonlandır öğesi -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/sevillaatletico.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Atletico Madrid Evinde Direndi</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Atletico Madrid, güçlü rakibi Sevilla karşısında zor anlar yaşasa da pes etmedi ve sahadan 1-1 beraberlikle ayrıldı.
                  </p>
                  <ul>
                     <li><i class="bi bi-check2-circle"></i> <span>Sörloth attığı golle takımına nefes aldırdı.</span></li>
                     <li><i class="bi bi-check2-circle"></i> <span>Atletico savunması özellikle ikinci yarıda baskıyı iyi karşıladı.</span></li>
                     <li><i class="bi bi-check2-circle"></i> <span>Taraftarlar takımlarını son ana kadar ayakta alkışladı.</span></li>
                 </ul>
                  <p>
                    Diego Simeone’nin öğrencileri, maçın son dakikalarına kadar mücadeleden kopmadı. Atletico, bu sonuçla ligde üst sıralardan uzaklaşmak istemediğini gösterdi.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->

            <div class="swiper-slide"> 
              <div class="row gy-4 event-item">
               <div class="col-lg-6">
                <img src="assets/img/fb-tsmaç.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-lg-6 pt-4 pt-lg-0 content">
                 <h3>Fenerbahçe - Trabzonspor Mücadelesinde Kazanan Yok!</h3>
                 <div class="price"></div>
                 <p class="fst-italic">
                  Kadıköy’deki mücadele yüksek tempoda geçti, iki takım da galibiyet için sahaya çıktı.
                 </p>
                 <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>Fenerbahçe ilk yarıda pozisyon üstünlüğünü elinde tuttu.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Trabzonspor ikinci yarıda hızlı ataklarla etkili oldu ve öne geçti.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Maçın son dakikalarında Fenerbahçe penaltıdan beraberliği yakaladı, skor 1-1.</span></li>
                 </ul>
                 <p>
                   Tribünler doluydu, atmosfer büyüleyiciydi. Her iki takımın da mücadelesi alkış toplarken, 
                   taraftarlar son düdüğe kadar nefeslerini tuttu. Beraberlik iki taraf için de hayal kırıklığı yaratmasa da, 
                   zirve yarışında kaybedilen iki puan olarak değerlendirildi.
                 </p>
               </div>
             </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/başakşehirr.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Başakşehir’de Zirve Hesapları</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Başakşehir, evinde oynadığı maçta rakibini zor anlara sürükledi.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Taraftarların desteğiyle güçlü bir oyun sergilendi.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Orta saha mücadelesi maçın kaderini belirledi.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Son dakikalarda kaçan fırsatlar gündem oldu.</span></li>
                  </ul>
                  <p>
                    Başakşehir, her sezon olduğu gibi bu yıl da Avrupa kupaları hedefiyle yola çıktı. Kadro derinliği ve oyun disipliniyle dikkat çeken İstanbul ekibi, Süper Lig’de söz sahibi olmaya devam ediyor.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/samsunn.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Gol Sevinciyle Gelen Zafer!</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Samsunspor ile Göztepe arasındaki mücadelede sahada inanılmaz bir tempo vardı.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Maçın kritik anlarında Samsunspor taraftarları takımlarını ateşledi.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Göztepe futbolcuları son dakikaya kadar mücadeleyi bırakmadı.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Samsunspor attıkları gol sonrası yaşanan sevinç, tribünlerde büyük coşkuya dönüştü.</span></li>
                  </ul>
                  <p>
                    Samsunspor – Göztepe karşılaşması, yalnızca 3 puan için değil, ligdeki prestij için de büyük önem taşıyordu. Gol sonrası yaşanan sevinç, futbolun neden bir tutku olduğunu bir kez daha kanıtladı.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/portovsbenfica.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Benfica, Dragão Deplasmanında Dağıldı!!</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Benfica, ezeli rakibi Porto karşısında sahada tutunamadı. 2-0’lık mağlubiyet, liderlik umutlarına darbe vurdu.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>İlk yarıda savunmada yapılan hatalar Porto’ya avantaj sağladı.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>90 dakika boyunca susmayan tribünler maça ayrı bir heyecan kattı.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Benfica taraftarı sonuçtan hayal kırıklığı yaşadı.<</span></li>
                  <p>
                    Roger Schmidt’in ekibi, önemli bir deplasman sınavından istediği sonucu çıkaramadı. Benfica, önümüzdeki haftalarda toparlanarak zirve yarışına tutunmayı hedefliyor.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/psv-ajaxx.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>PSV 1.liği Kaybetti Ezeli Yarışması</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Ajax, PSV karşısında 2-0 kazanarak ligde zirveye yerleşti.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Ajax derbi zaferiyle şampiyonluk yolunda büyük avantaj yakaladı.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>PSV’nin mağlubiyetiyle zirve yarışı yeniden şekillendi.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Taraftarlar maç sonunda büyük coşku yaşadı.</span></li>
                 </ul>
                  <p>
                    Hollanda futbolunun iki devi Ajax ve PSV arasındaki mücadele her zamanki gibi nefes kesti. Ajax’ın galibiyetiyle ligin kaderi yeniden değişti.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>

    <!-- Haberler Bölümü -->
    <section id="haberler" class="specials section">

      <!-- Bölüm Başlığı -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Haberler</h2>
        <div><span>Son Dakika Haberleri</span> <span class="description-title"></span></div>
      </div><!-- Bölüm Başlık Sonu -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row">
    <div class="col-lg-3">
      <ul class="nav nav-tabs flex-column">
        <li class="nav-item"><a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">Transfer Haberleri</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">Maç Sonuçları</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">Günün Manşeti</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">Süper Lig</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">1. Lig</a></li>
      </ul>
    </div>

    <div class="col-lg-9 mt-4 mt-lg-0">
      <div class="tab-content">

          <!-- Transfer Haberleri -->
<div class="tab-pane active show" id="specials-tab-1">
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Galatasaray, Osimhen’i rekorla kadrosuna kattı</h5>
      <p class="small text-muted">
        Süper Lig tarihinin en pahalı transferi resmen açıklandı. Galatasaray, Napoli’den transfer edilen Osimhen ile hücum hattını güçlendirdi. Taraftarlar, yıldız oyuncunun gelişini büyük heyecanla karşıladı ve sosyal medyada transfer gündem oldu. Teknik ekip, Osimhen’in lige adaptasyonu için özel program hazırladı ve ilk maçta sahaya çıkması bekleniyor. Avrupa basını da transferi detaylı şekilde yorumladı ve genç forvetin Süper Lig’e katkısını mercek altına aldı.
      </p>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Uğurcan Çakır, Galatasaray’da</h5>
      <p class="small text-muted">
        Milli kaleciyle 2029’a kadar sözleşme imzalandı. Uğurcan Çakır, sarı-kırmızılı formayı giyecek olmanın heyecanını yaşarken, teknik direktör de kalede güveni artıracak önemli bir transfer olarak değerlendirdi. Taraftarlar sosyal medyada Uğurcan’ın gelişini coşkuyla karşıladı. Takımın şampiyonluk hedeflerine ciddi katkı yapması beklenen kaleci, sezon boyunca kritik maçlarda performansıyla öne çıkacak.
      </p>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Sergen Yalçın Beşiktaş’a geri döndü</h5>
      <p class="small text-muted">
        Siyah-beyazlılarda yeni dönem resmen başladı. Eski teknik direktör Sergen Yalçın’ın dönüşü, oyuncular ve taraftarlar arasında büyük motivasyon yarattı. Takımın saha içi düzeninde ve oyun planında önemli değişiklikler bekleniyor. Yalçın, basın toplantısında hedeflerini net şekilde ifade ederek Beşiktaş’ı yeniden şampiyonluğa taşımayı planladığını açıkladı. Taraftarlar, sosyal medyada coşkulu paylaşımlarda bulundu ve takımın yeni dönemdeki performansına büyük umut bağladı.
      </p>
    </div>
  </div>
</div>

<!-- Maç Sonuçları -->
<div class="tab-pane" id="specials-tab-2">
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Galatasaray 1-1 Beşiktaş</h5>
      <p class="small text-muted">
        Derbi nefesleri kesti! İlk yarıda Beşiktaş oyunu kontrol eden taraftı ve rakip kalede etkili ataklar geliştirdi. Galatasaray ise ikinci yarıda tempo artırarak oyuna ortak oldu. Yorgun görünmesine rağmen Cimbom pes etmedi ve son dakikalarda bulduğu golle beraberliği yakaladı. İki takım da galibiyet için bastırsa da maç 1-1 sonuçlandı. Taraftarlar maç sonrası sosyal medyada hem mücadeleyi hem de hakem kararlarını uzun süre tartıştı.
      </p>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Fenerbahçe 1-1 Trabzonspor</h5>
      <p class="small text-muted">
        Kadıköy’de zorlu bir mücadele yaşandı. Fenerbahçe ilk yarıda baskılı oynasa da Trabzonspor savunmada dirençli kaldı. İkinci yarıda Trabzonspor kontra ataklarla tehlikeler yarattı ve öne geçti. Ancak Fenerbahçe son bölümlerde penaltıdan bulduğu golle skoru eşitledi. Maç genelinde tempolu bir oyun sergilendi, iki takım da pozisyon üretmekte zorlanmadı. Beraberlik iki taraf için de kayıp sayılmasa da, taraftarlar galibiyetin kaçtığı görüşünde birleşti.
      </p>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Alanya 0-3 Antalyaspor</h5>
      <p class="small text-muted">
        Kırmızı Beyazlılar deplasmanda rahat bir galibiyet aldı. Antalyaspor, ilk dakikadan itibaren oyunun kontrolünü eline aldı ve rakibine pozisyon vermedi. Maç boyunca sergilenen hızlı hücumlar ve etkili savunma, deplasmanda alınan bu farklı galibiyetin temelini oluşturdu. Teknik direktör maç sonrası oyuncularını övdü, takımın moralinin yüksek olduğunu ve ligde üst sıraları zorlayacaklarını belirtti. Taraftarlar sosyal medyada zaferi kutladı.
      </p>
    </div>
  </div>
</div>

<!-- Günün Manşeti -->
<div class="tab-pane" id="specials-tab-3">
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Osimhen transferi Avrupa basınında geniş yankı buldu</h5>
      <p class="small text-muted">
        Galatasaray, Şampiyonlar Ligi hedefi için güçlendi. Avrupa basını, Osimhen’in maliyeti ve ligde yaratacağı etkiyi gündemine taşıdı. Taraftarlar sosyal medyada yıldız oyuncuya büyük ilgi gösterdi. Teknik ekip, Osimhen’in adaptasyon süreci ve maçlarda sahaya katacağı enerji için özel antrenman programları hazırladı. Transfer, kulüp tarihinin en dikkat çeken hamlelerinden biri olarak değerlendiriliyor.
      </p>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Vodafone Park’ta Sergen coşkusu</h5>
      <p class="small text-muted">
        Taraftar, efsane hocayı büyük sevgiyle karşıladı. Maç öncesi tribünlerde coşku doruktaydı ve futbolcular sahada motive bir şekilde ısındı. Sergen Yalçın’ın takıma dönüşü, oyuncuların performansında ve saha içi iletişimde hemen etkisini gösterdi. Taraftarlar sosyal medyada büyük heyecanla maç öncesi paylaşımlarda bulundu. Teknik ekip, takımın yeni dönem planlarını açıklayarak hedeflerini netleştirdi.
      </p>
    </div>
  </div>
</div>

<!-- Süper Lig -->
<div class="tab-pane" id="specials-tab-4">
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Süper Lig’de zirve yarışı kızışıyor</h5>
      <p class="small text-muted">
        Galatasaray, Beşiktaş ve Trabzonspor şampiyonluk için kapışıyor. Her hafta alınan kritik puanlar ligde dengeleri değiştiriyor. Taraftarlar büyük bir heyecanla takımlarını destekliyor ve her maç sosyal medyada geniş yankı buluyor. Zirvede yaşanan bu rekabet, lig tarihinin en heyecanlı dönemlerinden biri olarak değerlendiriliyor. Analistler, önümüzdeki haftaların şampiyonluk için belirleyici olacağını ifade ediyor.
      </p>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Rizespor, Antalyaspor’u 5-2 mağlup etti</h5>
      <p class="small text-muted">
        Karadeniz ekibi deplasmanda şov yaptı. Maç boyunca etkili hücumlar ve organize savunma ile rakibine şans tanımayan Rizespor, taraftarlarını mutlu etti. Maç sonrası teknik direktör takımın performansından övgüyle bahsetti ve önümüzdeki maçlar için hedeflerini açıkladı. Bu galibiyet, Rizespor’un ligdeki iddiasını güçlendirdi ve moralleri yükseltti.
      </p>
    </div>
  </div>
</div>

<!-- 1. Lig -->
<div class="tab-pane" id="specials-tab-5">
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Sivasspor 5-0 Adana Demirspor</h5>
      <p class="small text-muted">
        Yiğidolar evinde farka koştu. Maç boyunca sergilenen baskı ve hızlı hücumlarla Adana Demirspor’a geçit vermeyen Sivasspor, taraftarlarını tribünlerde coşturdu. Teknik direktör maç sonrası oyuncularını tebrik etti ve ligdeki hedeflerini sürdürdüklerini belirtti. Ayrıca, maç istatistikleri oyuncuların etkili performansını gözler önüne serdi.
      </p>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-8 col-md-9">
      <h5>Bodrum FK 0-4 Manisa FK</h5>
      <p class="small text-muted">
        Ege ekibi deplasmandan 3 puanla döndü. Manisa FK, etkili hücumları ve disiplinli savunmasıyla farklı galibiyet elde etti. Maç boyunca oyuncuların performansı teknik ekip tarafından övgüyle değerlendirildi. Bu galibiyet, Manisa FK’nın ligde üst sıralara tırmanma hedefini güçlendirdi ve taraftarlar büyük sevinç yaşadı.
      </p>

      </div>
    </div>
  </div>
</div>


    </section><!-- /Günün Yorum Bölümü -->
    <!-- Görüşler Bölümü -->
    <section id="gununyorumu" class="testimonials section dark-background">
           <div class="container section-title" data-aos="fade-up">
        <h2>Günün Yorumu</h2>
        <div><span>Maç öncesi ve sonrası tüm demeçler tek adreste.</span>
      </div><!-- Görüşler Bölüm Sonu -->
      </div>
      <img src="assets/img/yeşilsaha.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

               <div class="swiper-slide">
                <div class="testimonial-item"> 
                 <img src="assets/img/gslogo.png" class="testimonial-img" alt="">
                 <h3>Galatasaray</h3>
                 <h4>Beşiktaş Maçı Yorumu</h4>
                 <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Dün oynanan Galatasaray - Beşiktaş derbisi 1-1 sona erdi. İlk yarıda Beşiktaş oyunu domine etti ve öne geçmeyi başardı. Galatasaray ise yorgun olmasına rağmen ikinci yarıda baskıyı artırdı ve skoru dengeledi. Son yarım saatte Beşiktaş savunmada zor anlar yaşarken, Galatasaray pes etmeden mücadele etti. Taraftarlar maçın temposundan memnun kalırken, iki takımın da mücadele gücü alkış aldı.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                 </p>
                </div>
                </div><!--Son referans öğesi-->

              <div class="swiper-slide">
                <div class="testimonial-item">
                 <img src="assets/img/fenerbahçelogo.jpg" class="testimonial-img" alt="">
                 <h3>Fenerbahçe</h3>
                 <h4>Trabzonspor Maçı Yorumu</h4>
                 <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fenerbahçe - Trabzonspor karşılaşması büyük çekişmeye sahne oldu. İlk yarıda Trabzonspor daha etkili oynasa da Fenerbahçe ikinci yarıda dengeyi sağladı. Maç boyunca iki takım da pozisyonlar buldu ancak kalecilerin başarılı performansı skoru belirledi. Karşılaşma 1-1 sona ererken, Fenerbahçe liderliğini sürdürdü, Trabzonspor ise deplasmandan önemli bir puanla ayrıldı.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
               </div><!--Son referans öğesi-->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/antalyalogo.jpg" class="testimonial-img" alt="">
                <h3>Antalyaspor</h3>
                <h4>Alanya 0-3 Maçı Yorumu</h4>
                <p>
                 <i class="bi bi-quote quote-icon-left"></i>
                 <span>Alanya deplasmanında Antalyaspor, ilk dakikadan itibaren oyunun kontrolünü eline aldı ve rakibine pozisyon vermedi. Maç boyunca sergilenen hızlı hücumlar ve etkili savunma, deplasmanda alınan 3-0’lık galibiyetin temelini oluşturdu. Teknik direktör maç sonrası oyuncularını övdü, takımın moralinin yüksek olduğunu ve ligde üst sıraları zorlayacaklarını belirtti. Taraftarlar sosyal medyada zaferi kutladı ve maçın öne çıkan anlarını paylaştı.</span>
                 <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
             </div><!--Son referans öğesi-->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/sadettinsaran.jpg" class="testimonial-img" alt="">
                <h3>Sadettin Saran</h3>
                <h4>Fenerbahçe</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fenerbahçe, Gökhan Gönül’ü gönderiyor! Sadettin Saran’dan Tedesco öncesi ilk hamle ve Aykut Kocaman planı. Saran'ın planı Volkan Demirel ve Aykut Kocaman Kulislerde konuşulanlara göre Sadettin Saran, teknik direktörlük için Aykut Kocaman’ı, futbol yönetimi için ise Volkan Demirel’i düşünüyor.  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!--Son referans öğesi -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/fatihtekke.jpg" class="testimonial-img" alt="">
                <h3>Fatih Tekke</h3>
                <h4>Trabzonspor</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fatih Tekke'den oyuncularına uyarı! 'Artık ayağa kalkmalıyız Trabzonspor Teknik Direktörü Fatih Tekke, Beşiktaş maçı öncesinde oyuncularına son uyarılarını yaptı, “Sezona 3’te 3 ile başladık, fakat daha sonraki üç maçımızdan galibiyet alamadık. Bu kez kazanarak rüzgârı tersine çevirmeliyiz dedi.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!--Son referans öğesi -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/recepdurulr.jpg" class="testimonial-img" alt="">
                <h3>Recep Durul</h3>
                <h4>Kocaelispor</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Beşiktaş maçını dört gözle bekliyoruz ve hepimiz hazırız. Buyrun gelin bizde dört gözle bekliyoruz. </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!--Son referans öğesi -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/barcelonaa.png" class="testimonial-img" alt="">
                <h3>Barcelona</h3>
                <h4>El Clasico</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Camp Nou’da oynanan dev maçta Barcelona, Real Madrid’i 2-1 mağlup ederek zirve yarışında kritik bir galibiyet aldı. Maç boyunca Barcelona’nın baskılı oyunu, taraftarları coşturdu. Real Madrid’in atakları karşısında savunmasını güçlendiren Katalan ekibi, ikinci yarıda gelen golle maçı kopardı ve büyük bir moral kazandı.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
             </div>
           </div><!--Son referans öğesi-->

           <div class="swiper-slide">
             <div class="testimonial-item">
               <img src="assets/img/parislogo.jpg" class="testimonial-img" alt="">
               <h3>PSG</h3>
               <h4>Bayern Münih Maçı</h4>
               <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>PSG ile Bayern Münih arasında oynanan Şampiyonlar Ligi çeyrek finali 4-4’lük skorla nefesleri kesti. Maç boyunca tempo hiç düşmedi, taraftarlar gol düellosunu heyecanla takip etti. Özellikle son dakikalarda yaşanan kritik pozisyonlar ve kalecilerin kurtarışları, karşılaşmayı unutulmaz kıldı. Her iki takım da mücadeleci oyunuyla Avrupa futbolunun gücünü gösterdi.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
           </div><!--Son referans öğesi-->

          <div class="swiper-slide">
           <div class="testimonial-item">
            <img src="assets/img/juventuslogo.png" class="testimonial-img" alt="">
            <h3>Juventus</h3>
            <h4>İtalyan Derbisi</h4>
            <p>
             <i class="bi bi-quote quote-icon-left"></i>
             <span>Juventus, Milan karşısında 1-0’lık skorla Serie A’da zirve yarışına ortak oldu. Maç boyunca Juventus’un disiplinli savunması ve hızlı kontra atakları öne çıktı. Taraftarlar tribünlerde coşku içinde maçı takip ederken, teknik ekip oyuncuların performansından memnun kaldı ve ligde üst sıralarda kalmayı hedefliyor.</span>
             <i class="bi bi-quote quote-icon-right"></i>
           </p>
         </div>
        </div><!--Son referans öğesi-->

          <div class="swiper-slide">
           <div class="testimonial-item">
            <img src="assets/img/arsenallogo.jpg" class="testimonial-img" alt="">
            <h3>Arsenal</h3>
            <h4>Manchester United Maçı</h4>
            <p>
             <i class="bi bi-quote quote-icon-left"></i>
             <span>Emirates Stadyumu’nda oynanan zirve mücadelesinde Arsenal, Manchester United’i 3-2 mağlup etti. Maç boyunca sergilenen hızlı ataklar ve etkili pas oyunuyla taraftarları coşturan ev sahibi ekip, bu galibiyetle Premier Lig’de iddiasını sürdürdü. Teknik direktör maç sonrası oyuncularının performansını övdü ve ligdeki hedeflerine odaklanacaklarını belirtti.</span>
             <i class="bi bi-quote quote-icon-right"></i>
           </p>
          </div>
         </div><!--Son referans öğesi-->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Görüşler Bölüm Sonu-->


    <style>
  .standings-wrap {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    padding: 0.5rem 0.25rem;
  }
  .standings {
    display: flex;
    gap: 1rem;
    align-items: flex-end;
    flex-wrap: nowrap;
    white-space: nowrap;
  }
  .team {
    flex: 0 0 80px;
    text-align: center;
    font-family: Arial, sans-serif;
  }
  .team img {
    width: 48px;
    height: 48px;
    object-fit: cover;
    border-radius: 4px;
  }
  .points {
    margin-top: 6px;
    font-weight: 700;
    font-size: 14px;
  }
  .bar {
    height: 6px;
    width: calc(var(--points, 5) * 3px);
    background: var(--bar-color, #6c757d);
    border-radius: 4px;
    margin: 6px auto 0;
    transition: width 400ms ease;
  }
  .standings-wrap::-webkit-scrollbar {
    height: 8px;
  }
  .standings-wrap::-webkit-scrollbar-thumb {
    background: rgba(0,0,0,0.15);
    border-radius: 6px;
  }
</style>

<!-- ✅ SÜPER LİG PUAN TABLOSU -->
<div class="container mt-4" data-aos="fade-up">
  <h5 class="text-center mb-3">2025-26 Süper Lig Puan Tablosu</h5>

  <div class="standings-wrap">
    <div class="standings">

      <div class="team" style="--points:21; --bar-color:#f1c40f" title="Galatasaray — 21">
        <img src="assets/img/gslogo.png" alt="Galatasaray">
        <div class="points">22</div>
        <div class="bar"></div>
      </div>

            <div class="team" style="--points:14; --bar-color:#2ecc71" title="Trabzonspor — 14">
        <img src="assets/img/trabzonlogo.jpg" alt="Trabzonspor">
        <div class="points">17</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:15; --bar-color:#3498db" title="Fenerbahçe — 15">
        <img src="assets/img/fenerbahçelogo.jpg" alt="Fenerbahçe">
        <div class="points">15</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:13; --bar-color:#16a085" title="Göztepe — 13">
        <img src="assets/img/göztepelogo.jpg" alt="Göztepe">
        <div class="points">13</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:12; --bar-color:#e67e22" title="Beşiktaş — 12">
        <img src="assets/img/bjklogoo.jpg" alt="Beşiktaş">
        <div class="points">13</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:12; --bar-color:#95a5a6" title="Samsunspor — 12">
        <img src="assets/img/samsunlogo.jpg" alt="Samsunspor">
        <div class="points">12</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:11; --bar-color:#9b59b6" title="Gaziantep FK — 11">
        <img src="assets/img/gazianteplogo.jpg" alt="Gaziantep FK">
        <div class="points">11</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:10; --bar-color:#e74c3c" title="Konyaspor — 10">
        <img src="assets/img/konya.jpg" alt="Konyaspor">
        <div class="points">10</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:10; --bar-color:#f1c40f" title="Antalyaspor — 10">
        <img src="assets/img/antalyalogo.jpg" alt="Antalyaspor">
        <div class="points">10</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:9; --bar-color:#3498db" title="Alanyaspor — 9">
        <img src="assets/img/alanyalogo.jpg" alt="Alanyaspor">
        <div class="points">10</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:8; --bar-color:#3498db" title="Kasımpaşa — 8">
        <img src="assets/img/kasımpaşalogo.jpg" alt="Kasımpaşa">
        <div class="points">8</div>
        <div class="bar"></div>
      </div>

        <div class="team" style="--points:5; --bar-color:#c0392b" title="Rizespor — 5">
        <img src="assets/img/rizelogo.jpg" alt="Çaykur Rizespor">
        <div class="points">8</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:6; --bar-color:#e74c3c" title="Başakşehir — 6">
        <img src="assets/img/başakşehirlogo.jpg" alt="Başakşehir">
        <div class="points">6</div>
        <div class="bar"></div>
      </div>

            <div class="team" style="--points:4; --bar-color:#e74c3c" title="Gençlerbirliği — 4">
        <img src="assets/img/gençlerbirliğilogo.jpg" alt="Gençlerbirliği">
        <div class="points">5</div>
        <div class="bar"></div>
      </div>

            <div class="team" style="--points:2; --bar-color:#c0392b" title="Kocaelispor — 2">
        <img src="assets/img/kocaelisporlogo.jpg" alt="Kocaelispor">
        <div class="points">5</div>
        <div class="bar"></div>
      </div>


      <div class="team" style="--points:5; --bar-color:#c0392b" title="Eyüpspor — 5">
        <img src="assets/img/eyüplogo.jpg" alt="Eyüpspor">
        <div class="points">5</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:5; --bar-color:#e67e22" title="Kayserispor — 5">
        <img src="assets/img/kayserilogo.jpg" alt="Kayserispor">
        <div class="points">5</div>
        <div class="bar"></div>
      </div>

      <div class="team" style="--points:3; --bar-color:#c0392b" title="Fatih Karagümrük — 3">
        <img src="assets/img/karagümrük.jpg" alt="FKG">
        <div class="points">3</div>
        <div class="bar"></div>
      </div>

    </div>
  </div>
</div>



    
        <!-- Hakkında Bölümü -->
    <section id="hakkında" class="about section light-background">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/futboltopu.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Biz Kimiz?</h3>
            <p class="fst-italic">Futbol Haberleri sitemiz, Türkiye futbolunun en güncel haberlerini taraftarlarla buluşturmak için kuruldu. Amacımız, sadece skorları değil; maç analizlerini, transfer gelişmelerini ve futbolun heyecanını sizlere aktarmak.</p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Bizler futbolu sadece bir oyun değil, bir tutku olarak görüyoruz. Bu siteyi de aynı tutkuyla hazırladık. Her gün güncellenen içeriklerimizle, futbolu seven herkese doğru ve hızlı haber sunmayı hedefliyoruz.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Sitemizde sadece haberleri değil; köşe yazıları, taraftar yorumları ve forum bölümü ile futbolun nabzını birlikte tutuyoruz. Çünkü bizce futbol, yalnızca sahada oynanan bir oyun değil; aynı zamanda birleştirici bir tutkudur.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Futbol Haberleri sitesi, hiçbir kulüp ya da kurumun etkisi altında olmadan, tamamen bağımsız bir şekilde Türk futbolunu takip eden bir platformdur. Amacımız, tarafsız ve doğru haber anlayışını sürdürmektir.</span></li>
            </ul>
            <p>Futbol Haberleri ekibi olarak genç ve dinamik bir yaklaşımla Türk futbolunu takip ediyoruz. Sitemizde yalnızca skorlar değil, aynı zamanda röportajlar, analizler ve taraftarın nabzını tutan içerikler de bulacaksınız.</p>
          </div>
        </div>

      </div>

    <!-- İletişim Bölümü -->
    <section id="forum" class="contact section">

      <!-- Bölüm Başlığı -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Forum</h2>
        <div><span>Futbol Gündeminde Kal</span>
      </div><!-- Bölüm Başlık Sonu-->

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Sahadan Haber Al</h3>
              <p>En güncel futbol haberlerini, maç sonuçlarını ve transfer gelişmelerini kaçırma.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasyon:</h4>
                  <p>Giresun</p>
                </div>
              </div><!-- Bitiş Bilgisi Öğesi-->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>o244602033@gmail.com</p>
                </div>
              </div><!-- Bitiş Bilgisi Öğesi -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Tel:</h4>
                  <p>+90 546 450 44 66</p>
                </div>
              </div><!-- Bitiş Bilgisi Öğesi -->

            </div>

          </div>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $isim = $_POST["name"];
    $mail = $_POST["email"];
    echo "<p>Merhaba $isim, mesajınız alındı!</p>";
}
?>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Yükleniyor</div>
                <div class="error-message"></div>
                <div class="sent-message">Mesajınız Gönderildi Teşekkür Ederiz.</div>
              </div>
              <div class="text-center"><button type="submit">Gönder</button></div>
            </form>
          </div><!-- İletişim Formunu Sonlandır Bölümü-->

        </div>

      </div>

    </section><!-- /İletişim Bölümü -->

  </main>
  

  <footer id="footer" class="footer">
  <div class="container text-center">
    <p>&copy; 2025 Futbol Haberleri. Tüm hakları saklıdır.</p>
  </div>
</footer>
   

  <!-- Yukarıya Kaydır -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Ön yükleyici -->
  <div id="preloader"></div>

  <!-- JS Dosyaları-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Ana JS Dosyası -->
  <script src="assets/js/main.js"></script>


  <head>
  <style>
    .testimonial-item .testimonial-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
    }
  </style>
</head>
  <title>Slider</title>
  <link rel="stylesheet" href="assets/css/main.css"> <!-- varsa -->
  <style>
    .swiper-slide img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 10px;
    }
    #footer {
  text-align: center;       /* Yazıyı ortala */
  padding: 5px 0;           /* Daha küçük boşluk */
  background-color: #000000ff; 
  color: #ffffffff;
  font-size: 12px;          /* Yazıyı biraz küçült */
}
.info-container {
  display: flex;               /* Yan yana dizmek için */
  justify-content: space-between; /* Aralarında boşluk */
  flex-wrap: wrap;             /* Ekran daralınca alt satıra geçer */
  gap: 20px;                   /* Öğeler arası boşluk */
  align-items: flex-start;      /* Üst hizalama */
}

.info-item {
  display: flex;               /* İkon ve metni yatay dizmek için */
  align-items: center;         /* İkon ile metin üstleri aynı hizaya gelsin */
  gap: 10px;                   /* İkon ve metin arası boşluk */
  min-width: 150px;            /* Küçük ekranlarda taşmayı önler */
}

.info-item h4 {
  margin: 0;
  font-size: 14px;
}

.info-item p {
  margin: 0;
  font-size: 13px;
}
.row-form {
  display: flex;
  gap: 10px;
}

.row-form .form-group {
  flex: 1;
}
 

.standings-wrap {
  overflow-x: auto;
  padding: 10px 0;
}

.standings {
  display: flex;
  gap: 1rem;
  align-items: flex-end;
  flex-wrap: nowrap;
}

.team {
  flex: 0 0 85px;
  text-align: center;
  font-family: "Poppins", Arial, sans-serif;
}

<!-- ✅ CSS - TÜM LOGOLAR EŞİT VE HİZALI -->
<style>
  .standings-wrap {
    overflow-x: auto;
    padding: 12px 0;
  }

  .standings {
    display: flex;
    gap: 1.5rem;
    align-items: flex-end;
    flex-wrap: nowrap;
  }

  .team {
    flex: 0 0 90px;
    text-align: center;
    font-family: "Poppins", Arial, sans-serif;
  }



</body>

</html>
