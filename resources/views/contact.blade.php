<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bare & Polish | Press On Nails Handmade</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- INI LETAKNYA -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

   <!-- <div class="social-feminin">
    <a href="https://www.instagram.com/bareandpolish/" target="_blank" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>
    
</div> -->

</head>

<body>
<div class="container-navbar">

    <!-- LOGO KIRI -->
    <div class="nav-logo">
        <img src="{{ asset('images/nail6.jpeg') }}" alt="Logo">

    </div>

     <!-- MENU -->
    <ul class="ul-navbar">
        <li class="li-navbar">
           <a href="#" class="a-navbar">HOME</a>
        </li>
        <li class="li-navbar">
            <a href="gallery" class="a-navbar">GALERY</a>
        </li>
         <li class="li-navbar">
            <a href="price" class="a-navbar">PRICE LIST </a>
        </li>
        <li class="li-navbar">
            <a href="about" class="a-navbar">ABOUT </a>
        </li>
        <li class="li-navbar">
            <a href="contact" class="a-navbar">CONTACT & RESERVATION </a>
        </li>
    </ul>

</div>


</div>

<section class="reservation-section">
    <h2>Reservasi Sekarang Juga !</h2>

    <div class="reservation-grid">

        <!-- jambu -->
        <div class="reservation-card">
            <div class="window">
                <div class="dots">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <h3>Bare&Polish</h3>
            </div>
            <a href="https://wa.me/6282241169682" class="btn">RESERVASI DI SINI</a>
        </div>
<!-- 
        KLATEN
        <div class="reservation-card">
            <div class="window">
                <div class="dots">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <h3>KLATEN</h3>
            </div>
            <a href="https://wa.me/628XXXXXXXXXX" class="btn">RESERVASI DI SINI</a>
        </div>

         SEMARANG
        <div class="reservation-card">
            <div class="window">
                <div class="dots">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <h3>SEMARANG</h3>
            </div>
            <button class="btn disabled">*SOON</button>
        </div> -->

        <!-- BALI
        <div class="reservation-card">
            <div class="window">
                <div class="dots">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <h3>BALI</h3>
            </div>
            <button class="btn disabled">*SOON</button>
        </div>

    </div>  -->


</section>


<script>
let music = document.getElementById("bg-music");

function toggleMusic() {
    if (music.paused) {
        music.play();
    } else {
        music.pause();
    }
}
</script>

<!-- BACKGROUND MUSIC AUTOPLAY -->
<audio id="bg-music" autoplay loop>
    <source src="{{ asset('music/bg-music.mp3') }}" type="audio/mpeg">

</audio>

<script>
window.addEventListener("load", function () {
    const music = document.getElementById("bg-music");

    // Volume pelan (biar elegan)
    music.volume = 0.3;

    // Coba autoplay
    const playPromise = music.play();

    if (playPromise !== undefined) {
        playPromise.catch(() => {
            // Jika browser blok autoplay,
            // musik akan play saat user klik pertama
            document.body.addEventListener("click", function () {
                music.play();
            }, { once: true });
        });
    }
});
</script>

<footer class="footer-feminin">
  <div class="footer-wrap">

    <div class="footer-col">
      <h2>It’s Bare & Polish Studio</h2>
      <p class="desc">
        Bare & Polish nail art kami banyak pilihan desain cantik,
        dari daily nail, wedding nail, hingga custom sesuai request
        dan budget kamu ✨
      </p>
    </div>

    <div class="footer-col">
      <h3>Artikel Terbaru</h3>
      <ul>
      
        <li><a href="#">Main ke It’s bareandpolish </a></li>
      </ul>
<div class="follow-center">
       <h3 class="follow-title">Follow Us</h3>

    <div class="social-icons center">
        <a href="https://www.instagram.com/bareandpolish/"
           class="ig-icon"
           target="_blank"
           aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>


    </div>
<div class="footer-col">
    <h3>Call Us</h3>
    <p>Phone: +62 822-4116-9682</p>

    <p class="address">
        Desa Rejosari<br>
        Kec. Jambu,<br>
        Kabupaten Semarang - 50663<br>
        
    </p>
</div>

<script>
function createSakura() {
    const sakura = document.createElement("div");
    sakura.classList.add("sakura");

    // Isi dengan emoji sakura
    sakura.innerHTML = "🌸";

    sakura.style.left = Math.random() * window.innerWidth + "px";
    sakura.style.animationDuration = (4 + Math.random() * 4) + "s";

    document.body.appendChild(sakura);

    setTimeout(() => {
        sakura.remove();
    }, 8000);
}

// Muncul tiap 500ms
setInterval(createSakura, 500);
</script>


</body>
</html>
