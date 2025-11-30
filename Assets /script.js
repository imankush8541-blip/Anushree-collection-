// Website Loaded
console.log("Anushree Collection Website Loaded!");

// Highlight active page
const currentPage = window.location.pathname.split("/").pop();
document.querySelectorAll(".nav a").forEach(link => {
    if (link.getAttribute("href") === currentPage) {
        link.style.color = "#6a5af9";
        link.style.fontWeight = "bold";
    }
});

// Smooth scrolling for internal links
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
