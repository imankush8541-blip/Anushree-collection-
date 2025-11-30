// -------------------------------
// Simple JS for Anushree Collection Website
// -------------------------------

// WhatsApp Button Alert (optional)
console.log("Anushree Collection website loaded successfully!");

// Smooth scroll for internal links (optional feature)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 60,
                behavior: "smooth"
            });
        }
    });
});

// Highlight active navigation (simple)
const currentPage = window.location.pathname.split("/").pop();
document.querySelectorAll(".nav a").forEach(link => {
    if (link.getAttribute("href") === currentPage) {
        link.style.color = "#6a5af9";
        link.style.fontWeight = "bold";
    }
});
