document.querySelector("#show-login").addEventListener("click", function(){
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click", function(){
    document.querySelector(".popup").classList.remove("active");
});

document.getElementById('show-register').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah link dari melakukan navigasi
    document.getElementById('login-form').style.display = 'none'; // Sembunyikan form login
    document.getElementById('register-form').style.display = 'block'; // Tampilkan form daftar
});

document.getElementById('show-login').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah link dari melakukan navigasi
    document.getElementById('register-form').style.display = 'none'; // Sembunyikan form daftar
    document.getElementById('login-form').style.display = 'block'; // Tampilkan form login
});
// // // Toggle masuk sebagai user/driver

function showForm(formToShow) {
    const loginForm = document.getElementById('login-form');
    const driverLoginForm = document.getElementById('driver-login-form');
    const registerForm = document.getElementById('register-form');
    const driverRegisterForm = document.getElementById('driver-register-form');
    
    // Sembunyikan semua form
    loginForm.style.display = "none";
    driverLoginForm.style.display = "none";
    registerForm.style.display = "none";
    driverRegisterForm.style.display = "none";

    // Tampilkan form yang dipilih
    switch (formToShow) {
        case 'login':
            loginForm.style.display = "block";
            break;
        case 'driverLogin':
            driverLoginForm.style.display = "block";
            break;
        case 'register':
            registerForm.style.display = "block";
            break;
        case 'driverRegister':
            driverRegisterForm.style.display = "block";
            break;
    }
}

// Fungsi untuk mengatur form yang ditampilkan saat halaman dimuat
function initializeForms() {
    showForm('login'); // Menampilkan form login secara default
}

// Menginisialisasi saat halaman dimuat
window.onload = initializeForms;

// Fungsi untuk mengatur form berdasarkan toggle switch di login
function toggleLoginForm(isDriver) {
    if (isDriver) {
        showForm('driverLogin'); // Tampilkan form driver login
    } else {
        showForm('login'); // Tampilkan form user login
    }
}

// Fungsi untuk mengatur form berdasarkan toggle switch di registrasi
function toggleRegisterForm(isDriver) {
    if (isDriver) {
        showForm('driverRegister'); // Tampilkan form driver register
    } else {
        showForm('register'); // Tampilkan form user register
    }
}

// Tambahkan event listener untuk toggle switch di login
document.getElementById('mode-toggle-login').addEventListener('change', function() {
    toggleLoginForm(this.checked);
});

// Tambahkan event listener untuk toggle switch di registrasi
document.getElementById('mode-toggle-register').addEventListener('change', function() {
    toggleRegisterForm(this.checked);
});

// Tambahkan event listener untuk toggle switch di driver registration
document.getElementById('mode-toggle-driver-register').addEventListener('change', function() {
    toggleRegisterForm(!this.checked); // Menggunakan negasi untuk mengalihkan
});