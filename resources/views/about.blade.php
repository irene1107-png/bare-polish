<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bare & Polish | Press On Nails Handmade</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- INI LETAKNYA -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400&display=swap" rel="stylesheet">

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

        <div class="about-container">

    <h2>About Bare & Polish</h2>

    <p>
    Bare & Polish adalah brand press on nails handmade yang menghadirkan desain cantik, elegan, dan berkualitas dengan harga terjangkau.
    Setiap produk dibuat dengan detail dan ketelitian untuk memberikan tampilan kuku yang rapi, stylish, dan tahan lama.
    </p>

    <p>
    Kami percaya bahwa setiap wanita berhak tampil percaya diri tanpa harus ke salon. Dengan Bare & Polish, kamu bisa mendapatkan kuku cantik dengan mudah, praktis, dan nyaman digunakan kapan saja.
    </p>

    <h3>Kenapa pilih Bare & Polish?</h3>
    <ul>
        <li>Handmade & dibuat dengan detail</li>
        <li>Desain elegan dan trendy</li>
        <li>Bahan berkualitas & tahan lama</li>
        <li>Bisa custom sesuai keinginan</li>
        <li>Harga terjangkau</li>
    </ul>

    <p>
    Terima kasih sudah mendukung Bare & Polish.  
    Untuk pemesanan dan custom design, silakan hubungi kami melalui WhatsApp.
    </p>

</div>


<!-- Sakura Effect -->
<div class="sakura-container"></div>

<script>
function createSakura() {
    const sakura = document.createElement("div");
    sakura.classList.add("sakura");

    sakura.style.left = Math.random() * window.innerWidth + "px";
    sakura.style.animationDuration = (Math.random() * 3 + 5) + "s";
    sakura.style.opacity = Math.random();

    document.querySelector(".sakura-container").appendChild(sakura);

    setTimeout(() => {
        sakura.remove();
    }, 8000);
}

setInterval(createSakura, 400);
</script>

   <!-- FLOATING WHATSAPP -->
<a href="https://wa.me/6282241169682"
   class="wa-float"
   target="_blank">
   💬 Order via WhatsApp
</a>

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


<script>
document.getElementById("searchInput").addEventListener("keyup", function() {
    let input = this.value.toLowerCase();
    let cards = document.querySelectorAll(".card");

    cards.forEach(function(card) {
        let title = card.querySelector("h3").textContent.toLowerCase();

        if (title.includes(input)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>

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


</body>
</html>
