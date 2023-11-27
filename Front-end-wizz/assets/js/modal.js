// Script.js
function openAddressModal() {
    var modal = document.getElementById('addressModal');
    modal.style.display = 'block';
}

function closeAddressModal() {
    var modal = document.getElementById('addressModal');
    modal.style.display = 'none';
}

// Close the modal if the user clicks outside of it
window.onclick = function (event) {
    var modal = document.getElementById('addressModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};


function openAddressModal() {
    var modal = document.getElementById('addressModal');
    modal.style.display = 'block';
}

function closeAddressModal() {
    var modal = document.getElementById('addressModal');
    modal.style.display = 'none';
}

function copyToShippingAddress() {
    var fullName = document.getElementById('fullName').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    var province = document.getElementById('province').value;
    var streetAddress = document.getElementById('streetAddress').value;
    var otherDetails = document.getElementById('otherDetails').value;

    // Pilih alamat berdasarkan radio button yang dipilih
    var selectedType = document.querySelector('.radio-option[aria-checked="true"] span').innerText;

    // Setel nilai pada formulir alamat pengiriman
    document.querySelector('.receiver-name').innerText = fullName;
    document.querySelector('.phone-number').innerText = phoneNumber;
    document.querySelector('.address-city').innerText = province;
    document.querySelector('.address-desc').innerText = streetAddress;
    document.querySelector('.address-title').innerText = '(' + selectedType + ')';

    // Tambahan logika atau manipulasi sesuai kebutuhan
    // ...

    // Tutup formulir modal
    closeAddressModal();
}


// Selected Date

// Simpan tanggal yang telah dipilih
let selectedDate = null;

function disableSelectedDate() {
    const datePicker = document.getElementById('usageDate');
    const selectedValue = datePicker.value;

    // Jika pengguna belum memilih tanggal, set tanggal default ke hari ini
    if (!selectedValue) {
        const today = new Date();
        datePicker.value = today.toISOString().split('T')[0];
        selectedDate = today;

    }
}

// Panggil fungsi untuk mengatur tanggal default saat halaman dimuat
disableSelectedDate();
