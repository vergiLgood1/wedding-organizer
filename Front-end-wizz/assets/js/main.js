// Contoh data pengguna
var userData = {
    username: "JohnDoe" // Ganti dengan nama pengguna yang sesuai
};

// Cek status login
var isLoggedIn = false;  // Ganti dengan status login yang sesuai

// Fungsi untuk menyembunyikan atau menampilkan elemen tergantung pada status login
function toggleLoginStatus() {
    var userSection = document.getElementById('userSection');
    var loginButton = document.getElementById('loginButton');

    if (isLoggedIn) {
        // Jika sudah login, sembunyikan tombol masuk dan tampilkan seisi userSection
        userSection.classList.remove('hidden');
        loginButton.style.display = 'none';  // Menyembunyikan tombol masuk
        setUserData(userData); // Tetapkan data pengguna
    } else {
        // Jika belum login, sembunyikan userSection dan tampilkan tombol masuk
        userSection.classList.add('hidden');
        loginButton.style.display = 'block';  // Menampilkan tombol masuk
    }
}


// Fungsi untuk menetapkan data pengguna
function setUserData(user) {
    document.getElementById('username').innerText = user.username;
}

// Fungsi untuk logout
function logout() {
    // Lakukan logika logout di sini (misalnya, hapus token sesi)
    isLoggedIn = false;
    toggleLoginStatus(); // Perbarui tampilan setelah logout
}

// Panggil fungsi saat halaman dimuat
window.onload = function () {
    toggleLoginStatus();
};

// Fungsi untuk mendapatkan status login dari server (misalnya, melalui AJAX)
function checkLoginStatus() {
    // Simulasi: status login disimpan dalam variabel isLoggedIn pada server
    var isLoggedIn = false;  // Ganti dengan logika sesuai kebutuhan

    return isLoggedIn;
}

// Fungsi untuk mengarahkan pengguna ke home jika sudah login
function redirectToHome() {
    if (checkLoginStatus()) {
        window.location.href = 'home.php';  // Ganti dengan path yang sesuai
    }
}

// Panggil fungsi saat halaman dimuat
window.onload = function () {
    redirectToHome();
};
/*==================== SHOW MENU ====================*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader() {
    
    const header = document.getElementById('header')
    const navLinks = document.querySelectorAll('.nav__link');

    // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 100) {
        header.classList.add('scroll-header');
        header.style.backgroundColor = 'hsl(0, 0%, 13%)';

        // Change the text color of links before the active link
        navLinks.forEach(link => {
            if (!link.classList.contains('active-link')) {
                link.style.color = 'white';
            }
        });
    } else {
        header.classList.remove('scroll-header');
        header.style.backgroundColor = 'transparent';

        // Reset the text color to its original state
        navLinks.forEach(link => {
            link.style.color = '';
        });
    }
}
window.addEventListener('scroll', scrollHeader);

/*==================== SWIPER DISCOVER ====================*/
let swiper = new Swiper(".discover__container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 32,
    coverflowEffect: {
        rotate: 0,
    },
})

/*==================== VIDEO ====================*/
const videoFile = document.getElementById('video-file'),
    videoButton = document.getElementById('video-button'),
    videoIcon = document.getElementById('video-icon')

function playPause() {
    if (videoFile.paused) {
        // Play video
        videoFile.play()
        // We change the icon
        videoIcon.classList.add('ri-pause-line')
        videoIcon.classList.remove('ri-play-line')
    }
    else {
        // Pause video
        videoFile.pause();
        // We change the icon
        videoIcon.classList.remove('ri-pause-line')
        videoIcon.classList.add('ri-play-line')

    }
}
videoButton.addEventListener('click', playPause)

function finalVideo() {
    // Video ends, icon change
    videoIcon.classList.remove('ri-pause-line')
    videoIcon.classList.add('ri-play-line')
}
// ended, when the video ends
videoFile.addEventListener('ended', finalVideo)


/*==================== SHOW SCROLL UP ====================*/
function scrollUp() {
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 200 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if (this.scrollY >= 200) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive() {
    const scrollY = window.pageYOffset

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        } else {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*==================== SCROLL REVEAL ANIMATION ====================*/
const sr = ScrollReveal({
    distance: '60px',
    duration: 2800,
    // reset: true,
})


sr.reveal(`.home__data, .home__social-link, .home__info,
           .discover__container,
           .experience__data, .experience__overlay,
           .place__card,
           .sponsor__content,
           .footer__data, .footer__rights`, {
    origin: 'top',
    interval: 100,
})

sr.reveal(`.about__data, 
           .video__description,
           .subscribe__description`, {
    origin: 'left',
})

sr.reveal(`.about__img-overlay, 
           .video__content,
           .subscribe__form`, {
    origin: 'right',
    interval: 100,
})

/*==================== DARK LIGHT THEME ====================*/
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-sun-line'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

// We validate if the user previously chose a topic
if (selectedTheme) {
    // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

var swiper2 = new Swiper(".mySwiper", {
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    var navLinks = document.querySelectorAll('.nav__link');

    // Tentukan tinggi scroll di mana Anda ingin mengubah warna
    var scrollThreshold = 100;

    if (window.scrollY > scrollThreshold) {
        // Ganti warna latar belakang header
        header.style.backgroundColor = 'darkgray';

        // Ganti warna teks pada nav links
        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].style.color = 'white';
        }
    } else {
        // Kembalikan ke warna aslinya jika tidak melewati threshold
        header.style.backgroundColor = 'transparent';

        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].style.color = 'black';
        }
    }
});


let circle = document.querySelector(".color-option");
circle.addEventListener("click", (e) => {
    let target = e.target;
    if (target.classList.contains("circle")) {
        circle.querySelector(".active").classList.remove("active");
        target.classList.add("active");
        document.querySelector(".main-images .active").classList.remove("active");
        document.querySelector(`.main-images .${target.id}`).classList.add("active");
    }
});


// date picker
const daysTag = document.querySelector(".days"),
    currentDate = document.querySelector(".current-date"),
    prevNextIcon = document.querySelectorAll(".icons span");

let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();

const months = ["January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
        let isToday = i === date.getDate() && currMonth === new Date().getMonth()
            && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
}
renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) {
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        } else {
            date = new Date();
        }
        renderCalendar();
    });
});

const datePicker = flatpickr("#inlineDatePicker", {
    inline: true,
    dateFormat: "Y-m-d",
});


var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    loop: true, // Enable looping

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});




// Action on click 

function detailPaket(idPaket) {
    // Mengasumsikan Anda memiliki halaman detail dengan nama 'detail.html', Anda dapat mengarahkan pengguna ke halaman itu dengan ID paket yang dipilih
    window.location.href = 'detailPackage.php?id=' + idPaket;
}

function detailPemesanan(idPaket){

    window.location.href = 'detailPemesanan.php?id=' + idPaket;
}

function ArahkanKePackage(){
    window.location.href = 'package.php?id=' + idPaket;
}

function detailPemesanan(idPaket) {
        // Menggunakan window.location.href untuk mengarahkan ke halaman detailPemesanan.php
    window.location.href = 'detailPemesanan.php?id=' + idPaket;
    }

function pesananSaya() {
        // Menggunakan window.location.href untuk mengarahkan ke halaman detailPemesanan.php
    window.location.href = 'pesananSaya.php?id=';
    }

function loginPhp() {
        // Menggunakan window.location.href untuk mengarahkan ke halaman detailPemesanan.php
    window.location.href = '../Login/login.php?id=';
    }

function home(){
    window.location.href = 'home.php?id=';
}



