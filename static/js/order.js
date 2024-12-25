document.addEventListener("DOMContentLoaded", () => {
    const orderTab = document.getElementById("order-tab");
    const historyTab = document.getElementById("history-tab");
    const orderForm = document.getElementById("order-form");
    const historySection = document.querySelector(".history");

    // Default visibility
    orderForm.style.display = "block";
    historySection.style.display = "none";

    orderTab.addEventListener("click", () => {
        orderForm.style.display = "block";
        historySection.style.display = "none";
        orderTab.classList.add("active");
        historyTab.classList.remove("active");
    });

    historyTab.addEventListener("click", () => {
        orderForm.style.display = "none";
        historySection.style.display = "block";
        historyTab.classList.add("active");
        orderTab.classList.remove("active");
    });
});

// pesanan yang sedang aktif
document.querySelectorAll('.pesan-btn button').forEach(button => {
    button.addEventListener('click', function() {
        const listAktif = this.closest('.list-aktif1');
        const driverName = listAktif.querySelector('.list-driver p strong').innerText;
        const from = listAktif.querySelector('.list-driver p:nth-child(2)').innerText;
        const to = listAktif.querySelector('.list-driver p:nth-child(4)').innerText;
        const tarif = listAktif.querySelector('.list-driver p:nth-child(5)').innerText;

        document.getElementById('active-driver-name').innerText = driverName;
        document.getElementById('active-from').innerText = from;
        document.getElementById('active-to').innerText = to;
        document.getElementById('active-tarif').innerText = tarif;

        document.querySelector('.list-aktif-container').style.display = 'none';
        document.querySelector('.active-order').style.display = 'block';
    });
});

document.getElementById('cancel-order').addEventListener('click', function() {
    document.querySelector('.list-aktif-container').style.display = 'block';
    document.querySelector('.active-order').style.display = 'none';
});

// Ini untuk uji coba agar pesanan aktif tampil
document.querySelectorAll('.pesan-btn button').forEach(button => {
    button.addEventListener('click', function() {
        document.querySelector('.active-order').style.display = 'block';
        document.getElementById('active-driver-name').textContent = 'Driver Name';
        document.getElementById('active-from').textContent = 'Kampus E';
        document.getElementById('active-to').textContent = 'Kampus F8';
        document.getElementById('nomor-kendaraan').textContent = 'Plat Nomor';
        document.getElementById('travel-time').textContent = 'HH:MM';
        document.getElementById('active-tarif').textContent = 'Rp 7000';
    });
});
// Code ini untuk menutup daftar pesanan aktif, dengan pesanan yang sedang berjalan
document.addEventListener('DOMContentLoaded', function() {
    const pesanButtons = document.querySelectorAll('.pesan-btn button');
    const listAktifContainer = document.querySelector('.list-aktif-container');
    const activeOrder = document.querySelector('.active-order');

    pesanButtons.forEach(button => {
        button.addEventListener('click', function() {
            listAktifContainer.style.display = 'none';
            activeOrder.style.display = 'block';
        });
    });

    const cancelOrderButton = document.getElementById('cancel-order');
    cancelOrderButton.addEventListener('click', function() {
        activeOrder.style.display = 'none';
        listAktifContainer.style.display = 'block';
    });
});

// Code ini untuk menampilkan pesanan yang sedang menunggu dan pesanan yang sudah diterima
document.addEventListener('DOMContentLoaded', function() {
    const orderAwaiting = document.querySelector('.order-awaiting');
    const orderAccepted = document.querySelector('.order-accepted');
    const cancelBtn = document.getElementById('cancel-order');

    function updateCancelBtnDisplay() {
        if (orderAwaiting.style.display !== 'none') {
            cancelBtn.style.display = 'block';
            orderAccepted.style.display = 'none';
        } else if (orderAccepted.style.display !== 'none') {
            cancelBtn.style.display = 'none';
            orderAwaiting.style.display = 'none';
        }
    }

    updateCancelBtnDisplay();

    orderAwaiting.addEventListener('change', updateCancelBtnDisplay);
    orderAccepted.addEventListener('change', updateCancelBtnDisplay);
});


