let lastScrollPosition = 0;

window.addEventListener("scroll", function() {
    const currentScrollPosition = window.scrollY;

    navbar = document.getElementById(".navbar")

    if (currentScrollPosition > lastScrollPosition) {
        // Scrolling down
        document.querySelector(".navbar").classList.add("hidden");
    } else {
        // Scrolling up
        document.querySelector(".navbar").classList.remove("hidden");
    }

    lastScrollPosition = currentScrollPosition;
});