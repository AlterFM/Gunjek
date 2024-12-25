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