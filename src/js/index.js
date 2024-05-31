const navBtns = document.querySelectorAll(".navlink");
const pathname = window.location.pathname;

navBtns.forEach(navBtn => {
    if (navBtn.href.includes(`${pathname}`)) {
        navBtn.classList.add("active");
    }
});
