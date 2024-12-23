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

// Daftar Penumpang
document.addEventListener("DOMContentLoaded", function () {
    // Data dummy penumpang
    const passengers = [
        { id: 1, name: "Ahmad Fadli", npm: "51422568", destination: "Kampus F8", time: "11.50", tariff: "Rp 7000" },
        { id: 2, name: "Tyera Octila", npm: "51422558", destination: "Kampus F8", time: "11.50", tariff: "Rp 7000" },
        { id: 3, name: "Indah Permata", npm: "51422345", destination: "Kampus F8", time: "11.50", tariff: "Rp 7000" }
    ];

    const passengerListContainer = document.getElementById("passenger-list-container");
    const orderDetailsContainer = document.getElementById("order-details-container");
    const orderName = document.getElementById("order-name");
    const orderDestination = document.getElementById("order-destination");
    const orderTime = document.getElementById("order-time");
    const orderTariff = document.getElementById("order-tariff");

    passengers.forEach((passenger) => {
        const passengerCard = document.createElement("div");
        passengerCard.classList.add("passenger-card");
        passengerCard.innerHTML = `
            <div class="passenger-info">
                <img src="../static/image/user_male.png" alt="Avatar Penumpang" class="avatar">
                <div>
                    <p><strong>${passenger.name}</strong></p>
                    <p>${passenger.npm}</p>
                </div>
            </div>
            <div class="passenger-actions">
                <button class="accept-btn" data-id="${passenger.id}">Terima</button>
                <button class="reject-btn" data-id="${passenger.id}">Tolak</button>
            </div>
        `;
        passengerListContainer.appendChild(passengerCard);

        const acceptBtn = passengerCard.querySelector(".accept-btn");
        acceptBtn.addEventListener("click", () => {
            // Tampilkan detail order
            orderName.textContent = passenger.name;
            orderDestination.textContent = passenger.destination;
            orderTime.textContent = passenger.time;
            orderTariff.textContent = passenger.tariff;

            // Tampilkan container order
            orderDetailsContainer.style.display = "block";
        });
    });

    // Tambahkan event listener untuk tombol "Selesai"
    const completeOrderBtn = document.getElementById("complete-order-btn");
    completeOrderBtn.addEventListener("click", () => {
        orderDetailsContainer.style.display = "none";
        alert("Order selesai!");
    });
});
