<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Gallery</title>
   
</head>
<body>
<section class="gallery-home" id="gallery-home">
    <img src="assets/img/Homepage1.png" alt="" class="gallery-home__img">

    <div class="gallery-home__container">
        <div class="gallery-home__data">
            <span class="gallery-home__data-subtitle">Discover your style</span>
            <h1 class="gallery-home__data-title">Create <br> Your <b class="pink-text">Perfect <br> Space</b></h1>
            <a href="#" class="gallery-home__button">Explore</a>
        </div>

        
    </div>
</section>



<div class="gallery__section">
    <h2 class="gallery__tittle">Buat moment bersama pasangan</h2>
    <span class="gallery__desc">Simpan Kenangan mu bersama kami </span>

<div class="gallery-container" id="gallery-container">
    <!-- Placeholder images -->
    <div class="gallery-item"><img src="assets/img/about1.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/about2.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/BNP1.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/gallery4.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/blog-3.jpg" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/gallery2.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/blog-2.jpg" alt="Image 2"></div>
    <div class="gallery-item"><img src="assets/img/blog-4.jpg" alt="Image 3"></div>
    <div class="gallery-item"><img src="assets/img/about1.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/banner-6.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/about2.png" alt="Image 2"></div>
    <div class="gallery-item"><img src="assets/img/gallery5.png" alt="Image 3"></div>
    <div class="gallery-item"><img src="assets/img/about1.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/pengantin5.png" alt="Image 1"></div>
    <div class="gallery-item"><img src="assets/img/blog-4.jpg" alt="Image 2"></div>
    <div class="gallery-item"><img src="assets/img/gallery2.png" alt="Image 3"></div>
    <!-- Add more items as needed -->
</div>

</div>

<script src="masonry.pkgd.min.js"></script>
<script src="main.js"></script>

</body>
</html>

<script>
    // Inisialisasi Masonry setelah halaman dimuat
document.addEventListener('DOMContentLoaded', function () {
    var galleryContainer = document.getElementById('gallery-container');
    var masonry = new Masonry(galleryContainer, {
        itemSelector: '.gallery-item',
        columnWidth: '.gallery-item',
        percentPosition: true
    });
});
</script>