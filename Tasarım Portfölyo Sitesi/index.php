<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <section id="menu">
        <div id="logo" class=""> Portfolyom | Teknoloji - Yazılım - Tasarım </div>

        <nav>
            <a href="#anasayfa"><i class="fas fa-igloo icon"></i></i>Anasayfa</a>
            <a href="#hakkimda"><i class="fa-solid fa-circle-info icon"></i></i>Hakkımda</a>
            <a href="#calismalar"><i class="fas fa-code icon"></i></i>Çalışmalarım</a>

        </nav>

    </section>

    <section id="banner">
        <div id="black">
        </div>
        <div id="icerik">
            <h2>Tasarıma ait çalışmalarım</h2>
            <br>
            <p>
                2014'ten beri tasarıma olan düşkünlüğümün vücut bulmuş hallerinin bir kısmı
            </p>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div id="icerik2">
        <h2>Site Amacı Nedir?</h2>
        <br>
        <p id="p3">
            Bu siteyi hem kendimi geliştirmek hem de yaptığım çalışmalardan derleyebildiğim kadar olanları yayımlamak için yazdım.
            Çalışmalarım kısmında Yazılım ve Tasarım adlı başlıkların altında yaptığım çalışmaların sadece çok küçük bir kısmını görebilirsiniz.
        </p>

    </div>



    <script>
        $(document).ready(function() {
            // Anasayfa linkine tıklanınca
            $("a[href='#anasayfa']").on("click", function() {
                // Sayfanın en üstüne yavaşça kaydır
                $("html, body").animate({
                    scrollTop: 0
                }, 800);
            });
            // Hakkımda linkine tıklanınca
            $("a[href='#hakkimda']").on("click", function() {
                // Hakkımda bölümüne yavaşça kaydır
                $("html, body").animate({
                    scrollTop: $("#hakkimda").offset().top
                }, 800);
            });

            // Çalışmalarım linkine tıklanınca
            $("a[href='#calismalar']").on("click", function() {
                // İletişim bölümüne yavaşça kaydır
                $("html, body").animate({
                    scrollTop: $("#calismalar").offset().top
                }, 800);
            });
        });
    </script>



    <section id="hakkimda">
        <h3>Hakkımda</h3>

        <div id="container">

            <div id="p">
                <p>
                    Tasarım alanına çok küçük yaşlarda yönlenmiş, yazılım ve tasarım yapmayı seven ve daha
                    birçok alanda ne yapılması gerektiğini bilen deneyim sahibi biriyim.
                </p>
            </div>
            <img id="hfoto" src="img/9.jpg" alt="" width="300" height="399"><img id="hfoto" src="img/11.jpg" alt="" width="300"><img id="hfoto" src="img/3.jpg" alt="" width="300" height="400"><img id="hfoto" src="img/Foto1.jpg" alt="" width="300" height="400">
        </div>
        <div id="p3" class="mt-5">
                <p>
                    Karakter sahibi bakış açısını tasarımlarıma yansıtarak video ve afiş yapıyorum.
                </p>
            </div>
    </section>

    <section id="calismalar">

        <div>

        </div>
    </section>

    <section id="calismalar">
        <h3>Çalışmalarım</h3>

        <div id="container">

            <div>
                <p id="p2">
                    Bu zamana kadar tasarladığım tasarımların küçük bir kısmı.
                </p>
            </div>

        </div>
    </section>

    <section id="calismalar">


        <div id="image-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="img/coc.jpeg" width="580" height="580">
                    </li>
                    <li class="splide__slide">
                        <img src="img/sws.jpeg" width="580" height="580">
                    </li>
                    <li class="splide__slide">
                    <img src="img/rdb.jpeg" width="580" height="580">
                    </li>
                    <li class="splide__slide">
                    <img src="img/sil.jpeg" width="580" height="580">
                    </li>
                    <li class="splide__slide">
                    <img src="img/afis.jpg" width="580" height="580">
                    </li>
                </ul>
            </div>
        </div>

        <a href="#menu"><i class="fa-solid fa-caret-up" id="up"></i></a>
    </section>






    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Yukarı okunu yakala ve tıklama olayını dinle
            $("#up").on("click", function() {
                // Sayfanın en üstüne yavaşça kaydır
                $("html, body").animate({
                    scrollTop: 0
                }, 700); // Kaydırma süresi: 800 milisaniye (0.8 saniye)
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#image-slider').mount();
        });
    </script>

    

</body>

</html>