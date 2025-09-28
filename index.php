<?php
// örnek: veritabanına bağlan
// $conn = mysqli_connect("localhost","root","","veritabani");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Futbol Haberleri</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

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
            <li><a href="#gününhaberleri">Günün Manşetleri</a></li>
            <li><a href="#türkiyefutbolrehberi">Türkiye Futbol Rehberi</a></li>
            <li><a href="#haberler">Haberler</a></li>
            <li><a href="#gününyorumu">Günün Yorumu</a></li>
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
          <img src="assets/img/futbol-topu.png" alt="">
          <div class="carousel-container">
            <h2><span>Derbi Heyecanı İstanbul'u sardı</span> Taraftarlar biletleri günler öncesinden tüketti.</h2>
            <p>Bu hafta oynanacak dev derbi Galatasaray-Fenerbahçe mücadelesi öncesi iki takım da hazırlıklarını sürdürüyor. Teknik direktörlerin açıklamaları ve kadro tercihleri merak konusu olurken, şehirde güvenlik önlemleri artırıldı.</p>
            <div>
              <a href="" class=""></a>
              <a href="" class=""></a>
            </div>
          </div>
        </div><!-- Döngü Sonu Öğesi-->

        <div class="carousel-item">
          <img src="assets/img/sergen.jpg" alt="">
          <div class="carousel-container">
            <h2>Taraftarların Umudu Yeniden Yeşerdi</h2>
            <p>Beşiktaş camiası, Yalçın’ın gelişiyle birlikte tribünlerde coşkunun arttığını ve futbolcuların yeniden forma girdiğini söylüyor.Kısa Sürede Büyük Değişim Göreve geleli sadece 3 hafta olmasına rağmen, takımda saha içi düzeni ve oyuncuların performansı dikkat çekiyor.</p>
            <div>
              <a href="" class=""></a>
              <a href="" class=""></a>
            </div>
          </div>
        </div><!-- Döngü Sonu Öğesi -->

        <div class="carousel-item">
          <img src="assets/img/göztepe-samsunspor-maç.png" alt="">
          <div class="carousel-container">
            <h2>Samsun’da Sessizlik, Göztepe’de Büyük Sevinç</h2>
            <p>90 dakika sonunda gülen taraf Göztepe oldu. Deplasmanda alınan galibiyet, tribünlerde büyük coşku yarattı.”Zorlu Samsunspor deplasmanında kritik bir galibiyet alan Göztepe, ligde üst sıralardaki iddiasını güçlendirdi.</p>
            <div>
              <a href="" class=""></a>
              <a href="" class=""></a>
            </div>
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
    <!-- Günün Haberleri Bölümü -->
    <section id="gününhaberleri" class="events section">

      <img class="slider-bg" src="assets/img/events-slider/images.jpg" alt="" data-aos="fade-in">

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
                  <img src="assets/img/fenerbahçe-galatasaray.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Süper Lig’de Derbi Coşkusu</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Haftanın en büyük mücadelesi nefesleri kesti, tribünler doldu taştı.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Galatasaray ile Fenerbahçe arasındaki derbi büyük heyecana sahne oldu.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Taraftarlar 90 dakika boyunca takımlarına destek verdi..</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Maçın son dakikasında gelen gol, sezonun en çok konuşulan anı oldu..</span></li>
                  </ul>
                  <p>
                    Süper Lig’de bu sezon rekabet her zamankinden daha yüksek. Zirve yarışı kızışırken, futbolseverler her hafta unutulmaz anlara tanıklık ediyor. Derbiler ise hem saha içinde hem de saha dışında gündemi belirliyor.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi-->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/beşiktaş-trabzon-tribün.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Derbide Tribünler Alev Aldı!</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Beşiktaş ile Trabzonspor arasındaki büyük mücadelede sahada kıyasıya rekabet yaşanırken, tribünlerde görsel şölen vardı.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Taraftarlar meşalelerle takımlarına destek verdi.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>90 dakika boyunca susmayan tribünler maça ayrı bir heyecan kattı.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Derbi tansiyonu, sahada olduğu kadar tribünlerde de hissedildi.</span></li>
                  </ul>
                  <p>
                    Beşiktaş ve Trabzonspor’un karşılaşmaları her zaman unutulmaz olur. Bu derbi de hem futbolcuların hırsı hem de taraftarların coşkusuyla Süper Lig tarihine geçti.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/başakşehir.png" class="img-fluid" alt="">
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
                  <img src="assets/img/göztepe-samsun-tribün.png" class="img-fluid" alt="">
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
                    <li><i class="bi bi-check2-circle"></i> <span>Attıkları gol sonrası yaşanan sevinç, tribünlerde büyük coşkuya dönüştü.</span></li>
                  </ul>
                  <p>
                    Samsunspor – Göztepe karşılaşması, yalnızca 3 puan için değil, ligdeki prestij için de büyük önem taşıyordu. Gol sonrası yaşanan sevinç, futbolun neden bir tutku olduğunu bir kez daha kanıtladı.
                  </p>
                </div>
              </div>
            </div><!-- Kaydırıcıyı Sonlandır öğesi -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- / Türkiye Futbol Rehber Bölümü -->
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
            <img src="assets/img/samsun-göztepe.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Samsun – Göztepe</a>
            </div>
            <div class="menu-ingredients">
             Süper Lig'de 4.lük mücadelesi Saat 16:00 | BeIN Max 2
            </div>
          </div><!-- Menü Öğesi -->

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="assets/img/beşiktaş-trabzon.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Beşiktaş – Trabzonspor</a>
            </div>
            <div class="menu-ingredients">
              Süper Lig’de dev mücadele Saat 19:00 | BeIN Sports 2
            </div>
          </div><!-- Menü Öğesi -->

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="assets/img/galatasaray-fenerbahçe.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Galatasaray – Fenerbahçe</a>
            </div>
            <div class="menu-ingredients">
              Süper Lig 5. Hafta Derbisi Saat 20:00 | BeIN Sports 1
            </div>
          </div><!-- Menü Öğesi -->

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="assets/img/istanbul-gaziantep.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>İstanbul Başakşehir FK - Gaziantep FK</a>
            </div>
            <div class="menu-ingredients">
              Süper Lig’de zirve mücadelesi Saat 19:00 | BeIN Sports 3
            </div>
          </div><!-- Menü Öğesi-->

        </div><!-- Menü Konteyneri -->

      </div>

    </section><!-- /Menü Bölümü -->

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
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">Transfer Haberleri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">Maç Sonuçları</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">Günün Manşeti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">Süper Lig</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">1. Lig</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="specials-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Süper Lig’de transfer dönemi hareketli geçti</h3>
                    <p class="fst-italic">Avrupa’dan gelen yıldızlar lige heyecan kattı.</p>
                    <p>Takımlar kadrolarını güçlendirmek için büyük yatırımlar yaptı. Özellikle Galatasaray ve Fenerbahçe’nin yıldız transferleri taraftarlarda büyük beklenti oluşturdu. Teknik direktörler, yeni oyuncuların kısa sürede takıma uyum sağlayacağını düşünüyor.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Haftanın sonuçları belli oldu</h3>
                    <p class="fst-italic">Zirve mücadelesinde nefes kesen karşılaşmalar yaşandı.</p>
                    <p>Süper Lig’in 5. haftasında oynanan maçlarda Galatasaray deplasmanda galip gelirken, Fenerbahçe sahasında puan kaybetti.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Derbi heyecanı İstanbul’u sardı</h3>
                    <p class="fst-italic">Taraftarlar biletleri günler öncesinden tüketti.</p>
                    <p>Bu hafta oynanacak Beşiktaş-Trabzonspor mücadele öncesi iki takım da hazırlıklarını sürdürüyor. Teknik direktörlerin açıklamaları ve kadro tercihleri merak konusu olurken, şehirde güvenlik önlemleri artırıldı.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Süper Lig’de zirve yarışı kızışıyor</h3>
                    <p class="fst-italic">Takımlar Süper Lig’e çıkma hedefiyle sahada</p>
                    <p>Ligin üst sıralarında mücadele eden takımlar arasında büyük bir rekabet var. Liderlik koltuğu sürekli el değiştirirken, alt sıralardaki takımlar da kümede kalma savaşı veriyor. Futbolseverler için heyecan dolu bir sezon yaşanıyor.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>1. Lig’de şampiyonluk mücadelesi</h3>
                    <p class="fst-italic">Takımlar Süper Lig’e çıkma hedefiyle sahada.</p>
                    <p>PTT 1. Lig’de bu sezon büyük bir çekişme yaşanıyor. Özellikle üç takım, Süper Lig’e yükselme mücadelesinde öne çıkıyor. Taraftarların desteğiyle birlikte statlarda coşkulu atmosfer oluşuyor.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Günün Yorum Bölümü -->
    <!-- Görüşler Bölümü -->
    <section id="gününyorumu" class="testimonials section dark-background">
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
                <img src="assets/img/sergenyalçın.jpg" class="testimonial-img" alt="">
                <h3>Sergen Yalçın</h3>
                <h4>Beşiktaş</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Sergen Yalçın'dan galibiyet sözleri: Kabul edilebilir bir oyun ve skor." Beşiktaş teknik Direktörü Sergen Yalçın, 2-1'lık Trabzonspor maçının ardından yaptığı açıklamada, Beşiktaş adına bugün itibarıyla kabul edilebilir bir oyun ve skor vardı. O yüzden oyuncularıma teşekkür ediyorum dedi.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!--Son referans öğesi -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/okanburuk.jpg" class="testimonial-img" alt="">
                <h3>Okan Buruk</h3>
                <h4>Galatasaray</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Okan Buruk'tan Fenerbahçe maçı sözleri: Mutluluğunu yaşayamadım" Galatasaray Teknik Direktörü Okan Buruk, 1-0 kazandıkları Alanyaspor maçı sonrası yaptığı açıklamada,7'de 7 yaparak ve 21 puanla başladık ama açıkçası bunun mutluluğunu yaşayamadım dedi.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Son referans öğesi -->

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
                <img src="assets/img/testimonials/recepsurul.jpg" class="testimonial-img" alt="">
                <h3>Recep Durul</h3>
                <h4>Kocaelispor</h4>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Beşiktaş maçını dört gözle bekliyoruz ve hepimiz hazırız. Buyrun gelin bizde dört gözle bekliyoruz. </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!--Son referans öğesi -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Görüşler Bölüm Sonu-->
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

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Addres</h4>
            <p>Giresun</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>İletişim</h4>
            <p>
              <strong>Tel no:</strong> <span>+90 546 450 44 66</span><br>
              <strong>Email:</strong> <span>o244602033.com</span><br>
            </p>
          </div>
        </div>
        </div>
     </div>
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

</body>

</html>