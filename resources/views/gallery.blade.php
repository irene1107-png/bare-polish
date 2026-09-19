<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bare & Polish | Press On Nails Handmade</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- INI LETAKNYA -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body >

<div class="container-navbar">

    <!-- LOGO KIRI -->
    <div class="nav-logo">
       <img src="{{ asset('images/nail6.jpeg') }}" alt="Logo">

    </div>

 <div class="search-box">
    <span class="search-icon">🔍</span>
    <input type="text" id="searchInput" placeholder="Search nail art...">
</div>

     <!-- MENU -->
    <ul class="ul-navbar">
        <li class="li-navbar">
           <a href="home" class="a-navbar">HOME</a>
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



         <!-- NAVIGATION SELESAI -->

         <!-- CONTENT 1 -->

         <!-- CONTEN 1 END -->

         <!-- FOOTER -->


         <!-- FOOTER END -->

          </div>

<!-- batas -->



<h2>Galeri Nail Art</h2>

<!-- ---------------------- -->
<div class="main-layout">

    <!-- KIRI: Gallery -->
    <div class="gallery-section">
        <div class="gallery" id="galleryContainer"></div>
    </div>

    <!-- KANAN: Customer Reviews -->
    <div class="review-section">
        <h3>Customer Reviews</h3>
        <div id="disqus_thread"></div>
    </div>

</div>

<div class="gallery">

    @foreach($nails as $nail)
        <div class="card" onclick="openModal(this)">
            <img src="{{ asset('storage/' . $nail->image) }}" alt="">
            <h3>{{ $nail->title }}</h3>
            <p class="desc">Press on nails handmade</p>
            <p class="price">Rp {{ $nail->price }}</p>
        </div>
    @endforeach

</div>



    <!-- <div class="card" onclick="openModal(this)">
        <img src="images/nail1.jpg" alt="Pink Elegant">
        <h3>Black Magic Violet(CatEye)</h3>
        <p class="desc">Hitam & ungu, misterius tapi elegan. 🖤💜</p>
        <span class="price">Rp 50.000</span>
    </div>

    <div class="card" onclick="openModal(this)">
        <img src="images/nail3.JPG" alt="3D Nailart">
        <h3>3D Nailart</h3>
        <p class="desc"> Press on nails handmade, tahan lama</p>
        <span class="price">Rp 70.000</span>
    </div>

    <div class="card" onclick="openModal(this)">
    <img src="https://drive.google.com/uc?export=view&id=1nKhJgOX2CENB1B6ODT-rDHdPFPFZQcke" alt="3D Nailart">
    <h3>3D Nailart</h3>
    <p class="desc">Press on nails handmade, tahan lama</p>
    <span class="price">Rp 50.000</span>
</div>

<div class="card" onclick="openModal(this)">
        <img src="images/nail5.JPG" alt="3D Nailart">
        <h3>Black Color + Glitter </h3>
        <p class="desc"> Press on nails handmade, tahan lama</p>
        <span class="price">Rp 50.000</span>
    </div> -->



<!-- </div> -->

<!-- <script>
let allData = [];

fetch("{{ asset('js/gallery.json') }}")
.then(response => response.json())
.then(data => {
    allData = data;
    displayGallery(data);
}); -->

<!-- function displayGallery(data) {
    const container = document.getElementById("galleryContainer");
    container.innerHTML = "";

    data.forEach(item => {
        container.innerHTML += `
            <div class="card" onclick="openModal(this)">
                <img src="{{ asset('') }}${item.image}">
                <h3>${item.title}</h3>
                <p class="desc">Press on nails handmade</p>
                <p class="price">${item.price}</p>
            </div>
        `;
    });
}

function filterGallery(category) {
    if (category === "all") {
        displayGallery(allData);
    } else {
        const filtered = allData.filter(item => item.category === category);
        displayGallery(filtered);
    }
}
</script> -->

<!-- ---------------------- -->

<div class="category-buttons">
    <button onclick="filterGallery('all')">All</button>
    <button onclick="filterGallery('french')">French</button>
    <button onclick="filterGallery('glitter')">Glitter</button>
    <button onclick="filterGallery('nude')">Nude</button>
    <button onclick="filterGallery('character')">Character</button>
</div>

<!-- ----------------------- -->

<!-- <form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="image">
    <button type="submit">Upload</button>
</form> -->


<div class="gallery">
    @if(isset($files))
        @foreach($files as $file)
            <div class="card">
                <img src="{{ asset('storage/' . str_replace('public/', '', $file)) }}" width="200">
            </div>
        @endforeach
    @endif
</div>


   <!-- FLOATING WHATSAPP -->
<a href="https://wa.me/6282241169682"
   class="wa-float"
   target="_blank">
   💬 Order via WhatsApp
</a>

<!-- <script>
let currentSlide = 0;
let totalSlides = 0;

// fetch("{{ asset('js/gallery.json') }}")
// .then(response => response.json())
// .then(data => {
//     const container = document.getElementById("galleryContainer");

//     // buat track slider
//     const track = document.createElement("div");
//     track.className = "slider-track";
//     container.appendChild(track);

//     const perSlide = 6; // jumlah foto per slide

//     for (let i = 0; i < data.length; i += perSlide) {
//         const group = document.createElement("div");
//         group.className = "slide-group";

//         const items = data.slice(i, i + perSlide);

//         items.forEach(item => {
//             const card = document.createElement("div");
//             card.className = "card";
//             card.setAttribute("onclick", "openModal(this)");

//             card.innerHTML = `
//                 <img src="${item.image}" alt="${item.title}">
//                 <h3>${item.title}</h3>
//                 <p class="desc">Press on nails handmade</p>
//                 <span class="price">${item.price}</span>
//             `;

//             group.appendChild(card);
//         });

//         track.appendChild(group);
//     }

//     totalSlides = Math.ceil(data.length / perSlide);

//     // AUTO SLIDE tiap 3 detik
//     setInterval(() => {
//         currentSlide++;
//         if (currentSlide >= totalSlides) currentSlide = 0;

//         track.style.transform = `translateX(-${currentSlide * 100}%)`;
//     }, 3000);
// });
</script>

<script>
let allData = [];

fetch("{{ asset('js/gallery.json') }}")
.then(response => response.json())
.then(data => {
    allData = data;
    showGallery(data);
});

function showGallery(data){
    let container = document.getElementById("gallerycontainer");
    container.innerHTML = "";

    data.forEach(item => {
        container.innerHTML += `
            <img src="{{ asset('') }}${item.image}" class="gallery-img">
        `;
    });
}

function filterGallery(category){
    if(category === "all"){
        showGallery(allData);
    } else {
        let filtered = allData.filter(item => item.category === category);
        showGallery(filtered);
    }
}
</script>


<!-- <script>
fetch('data/gallery.json')
.then(response => response.json())
.then(data => {
    const container = document.getElementById("galleryContainer");

    data.forEach(item => {
        const card = document.createElement("div");
        card.className = "card";
        card.setAttribute("onclick", "openModal(this)");

        card.innerHTML = `
            <img src="${item.image}" alt="${item.title}">
            <h3>${item.title}</h3>
            <p class="desc">Press on nails handmade</p>
            <span class="price">${item.price}</span>
        `;

        container.appendChild(card);
    });
});
</script>  -->

<!-- <script>
fetch('data/gallery.json')
.then(response => response.json())
.then(data => {
    const container = document.getElementById("galleryContainer");

    data.forEach(item => {
        const card = document.createElement("div");
        card.className = "card";

        let mediaHTML = "";

        if(item.type === "image"){
            mediaHTML = `<img src="${item.image}" alt="${item.title}">`;
        }

        if(item.type === "video"){
            mediaHTML = `
                <video width="100%" height="180" controls>
                    <source src="${item.video}" type="video/mp4">
                </video>
            `;
        }

        card.innerHTML = `
            ${mediaHTML}
            <h3>${item.title}</h3>
            <p class="desc">Press on nails handmade</p>
            <span class="price">${item.price}</span>
        `;

        container.appendChild(card);
    });
});
</script> --> -->




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
<!-- POPUP DETAIL -->
<div id="modal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>

    <div class="modal-box">
        <img class="modal-content" id="modalImg">
        <h3 id="modalTitle"></h3>
        <p id="modalDesc"></p>
        <p id="modalPrice"></p>
    </div>
</div>


<script>
function openModal(card) {
    document.getElementById("modal").style.display = "flex";

    document.getElementById("modalImg").src =
        card.querySelector("img").src;

    document.getElementById("modalTitle").textContent =
        card.querySelector("h3").textContent;

    document.getElementById("modalDesc").textContent =
        card.querySelector(".desc").textContent;

    document.getElementById("modalPrice").textContent =
        card.querySelector(".price").textContent;
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}
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
<div id="disqus_thread"></div>

<script>
var disqus_config = function () {
this.page.url = window.location.href;
this.page.identifier = window.location.pathname;
};

(function() {
var d = document, s = d.createElement('script');
s.src = 'https://barepolish.disqus.com/embed.js'; 
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>



</body>
</html>
