<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bare & Polish | Press On Nails Handmade</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- INI LETAKNYA -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
        <a href="{{ url('/home') }}" class="a-navbar">HOME</a>
    </li>
    <li class="li-navbar">
        <a href="{{ url('/gallery') }}" class="a-navbar">GALERY</a>
    </li>
    <li class="li-navbar">
        <a href="{{ url('/price') }}" class="a-navbar">PRICE LIST</a>
    </li>
    <li class="li-navbar">
        <a href="{{ url('/about') }}" class="a-navbar">ABOUT</a>
    </li>
    <li class="li-navbar">
        <a href="{{ url('/contact') }}" class="a-navbar">CONTACT & RESERVATION</a>
    </li>
</ul>

</div>



<!-- <div class="home-container">


    <h1>Bare & Polish</h1>
    <p class="tagline">
        Premium Handmade Press On Nails<br>
        Elegant • Custom • Affordable
    </p>

    <a href="gallery.html" class="btn-gallery">
        Lihat Koleksi
    </a>

</div> -->

<section class="hero">
    <div class="overlay"></div>

    <div class="hero-content">
         <h4 class="fade-up">Welcome To</h4>

    <h1 class="fade-up delay1">
        Bare & Polish Studio
    </h1>

    <p class="fade-up delay2">
       Bare & Polish Nail Art Studio berdiri sejak tahun 2023 dan menghadirkan berbagai pilihan desain nail art yang cantik dan modern. 
       Melayani gel polish, press on, dan custom nail art dengan kualitas terbaik serta harga terjangkau.
    </p>
    </div>
</section>

   <!-- FLOATING WHATSAPP -->
<a href="https://wa.me/6282241169682"
   class="wa-float"
   target="_blank">
   💬 Order via WhatsApp
</a>



<script>
let music = document.getElementById("bg-music");
let button = document.getElementById("musicButton");

function toggleMusic() {
    if (music.paused) {
        music.play();
        button.innerHTML = "🔊 Music ON";
    } else {
        music.pause();
        button.innerHTML = "🔇 Music OFF";
    }
}
</script>



<!-- BACKGROUND MUSIC AUTOPLAY -->
<audio id="bg-music" autoplay loop>
   <source src="{{ asset('music/bg-music.mp3') }}" type="audio/mpeg">


    <!-- <button class="music-btn" onclick="toggleMusic()">🎵 Music</button> -->

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
