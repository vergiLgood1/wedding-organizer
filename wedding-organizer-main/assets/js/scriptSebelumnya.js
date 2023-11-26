document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('myCarousel');
    const prevArrow = carousel.querySelector('.carousel-control-prev');
    const nextArrow = carousel.querySelector('.carousel-control-next');

    // Saat tombol panah kiri diklik
    prevArrow.addEventListener('click', function () {
        prevArrow.style.opacity = '1'; // Selalu tetap terlihat saat diklik
    });

    // Saat tombol panah kanan diklik
    nextArrow.addEventListener('click', function () {
        nextArrow.style.opacity = '1'; // Selalu tetap terlihat saat diklik
    });

    // Saat kursor masuk ke carousal
    carousel.addEventListener('mouseover', function () {
        prevArrow.style.opacity = '1'; // Selalu terlihat saat kursor berada di carousel
        nextArrow.style.opacity = '1';
    });

    // Saat kursor keluar dari carousal
    carousel.addEventListener('mouseleave', function () {
        prevArrow.style.opacity = '0'; // Menghilang saat kursor keluar
        nextArrow.style.opacity = '0';
    });
});

// Procut category
    
// 

// Awal API image Lorem picsum

// Array gambar Unsplash
const unsplashImages = [
    'https://source.unsplash.com/200x200/?wedding',
    'https://source.unsplash.com/200x200/?flowers',
    'https://source.unsplash.com/200x200/?rings',
    'https://source.unsplash.com/200x200/?catering',
    'https://source.unsplash.com/200x200/?decorations',
    'https://source.unsplash.com/200x200/?gifts',
    'https://source.unsplash.com/200x200/?cake',
    'https://source.unsplash.com/200x200/?groom',
    'https://source.unsplash.com/200x200/?bride',
    'https://source.unsplash.com/200x200/?venue',
    'https://source.unsplash.com/200x200/?wedding',
    'https://source.unsplash.com/200x200/?gifts'
];

// Mengambil semua elemen dengan class "product-card"
const productCards = document.querySelectorAll('.product-card');

// Loop melalui setiap elemen "product card" dan menggantikan gambar dengan gambar dari Unsplash
productCards.forEach((card, index) => {
    const img = card.querySelector('img');
    img.src = unsplashImages[index];
    img.alt = 'Produk ' + (index + 1); // Mengganti teks alternatif gambar
});


const productContainer = document.querySelector('.product-container');
const unsplashAccessKey = '3cAYH5vSHbFX-qzuCseqZt5ZvEAYCxoWm4p7p9fHyvE'; // Ganti dengan kunci akses Unsplash Anda

productDescriptions.forEach((description) => {
    const apiUrl = `https://api.unsplash.com/photos/random/?client_id=${unsplashAccessKey}`;

    fetch(apiUrl)
        .then((response) => response.json())
        .then((data) => {
            const imageUrl = data.urls.regular;

            const productCard = document.createElement('div');
            productCard.className = 'col-md-2 product-card';

            const productImage = document.createElement('img');
            productImage.src = imageUrl;
            productImage.alt = 'Product Image';

            const productDescription = document.createElement('h3');
            productDescription.textContent = description;

            productCard.appendChild(productImage);
            productCard.appendChild(productDescription);

            productContainer.appendChild(productCard);
        })
        .catch((error) => {
            console.error('An error occurred:', error);
        });
});

// ...

