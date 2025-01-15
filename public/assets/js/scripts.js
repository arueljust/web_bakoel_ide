const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

document.getElementById("userIcon").addEventListener("click", function () {
    const dropdown = document.querySelector(".dropdown-menu");
    dropdown.classList.toggle("active"); // Tampilkan/sembunyikan menu
});

// Menutup dropdown jika klik di luar menu
document.addEventListener("click", function (event) {
    const dropdown = document.querySelector(".dropdown-menu");
    const userIcon = document.getElementById("userIcon");

    if (!dropdown.contains(event.target) && !userIcon.contains(event.target)) {
        dropdown.classList.remove("active"); // Sembunyikan menu
    }
});
