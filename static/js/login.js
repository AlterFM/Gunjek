
document.querySelector("#show-login").addEventListener("click", function() {
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click", function() {
    document.querySelector(".popup").classList.remove("active");
});

function showForm(formToShow) {
    const forms = {
        login: document.getElementById('login-form'),
        driverLogin: document.getElementById('driver-login-form'),
        register: document.getElementById('register-form'),
        driverRegister: document.getElementById('driver-register-form')
    };

    // Hide all forms
    Object.values(forms).forEach(form => form.style.display = "none");

    // Show the selected form
    if (forms[formToShow]) {
        forms[formToShow].style.display = "block";
    }
}

// Initialize forms on page load
window.onload = function() {
    showForm('login'); // Show login form by default
};

// Toggle form based on login switch
document.getElementById('mode-toggle-login').addEventListener('change', function() {
    showForm(this.checked ? 'driverLogin' : 'login');
});

// Toggle form based on register switch
document.getElementById('mode-toggle-register').addEventListener('change', function() {
    showForm(this.checked ? 'driverRegister' : 'register');
});

