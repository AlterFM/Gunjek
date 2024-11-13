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

// Jika Anda ingin menambahkan tombol kembali ke form login dari form daftar, tambahkan ini di form daftar
const backToLoginLink = document.createElement('a');
backToLoginLink.href = '#';
backToLoginLink.textContent = 'Kembali ke Masuk';
backToLoginLink.id = 'show-login';
document.querySelector('.daftar-form').appendChild(backToLoginLink);

document.getElementById('show-login').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah link dari melakukan navigasi
    document.getElementById('register-form').style.display = 'none'; // Sembunyikan form daftar
    document.getElementById('login-form').style.display = 'block'; // Tampilkan form login
});
// // Toggle masuk sebagai user/driver
// function toggleMode() {
//     const modeText = document.getElementById("mode-text");
//     const isChecked = document.getElementById("mode-toggle").checked;
//     modeText.textContent = isChecked ? "Masuk sebagai Driver" : "Masuk sebagai User";
// }

// Toggle login form
function toggleModelogin() {
    const modeText = document.getElementById("mode-text-login");
    const isChecked = document.getElementById("mode-toggle-login").checked;
    modeText.textContent = isChecked ? "Masuk sebagai Driver" : "Masuk sebagai User";
}

// Toggle daftar form
function toggleModedaftar() {
    const modeText = document.getElementById("mode-text-register");
    const isChecked = document.getElementById("mode-toggle-register").checked;
    modeText.textContent = isChecked ? "Daftar sebagai Driver" : "Daftar sebagai User";
}