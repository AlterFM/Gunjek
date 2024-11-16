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
// // Toggle masuk sebagai user/driver

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

// Unggah KTM
