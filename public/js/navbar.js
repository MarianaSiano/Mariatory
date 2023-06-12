function menuShow() {
    let menuMobile = document.querySelector(".mobile-menu");
    if (menuMobile.classList.contains("open")) {
        menuMobile.classList.remove("open");
        document.querySelector(".icon").src = "/public/assets/menu_purple_36dp.svg";
    } else {
        menuMobile.classList.add("open");
        document.querySelector(".icon").src = "/public/assets/close_purple_36dp.svg";
    }
}