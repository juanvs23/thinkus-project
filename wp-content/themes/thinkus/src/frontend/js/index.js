const headers = document.querySelectorAll(".thinkus-site-header");
const navigations = document.querySelectorAll(".navigation-section");
document.addEventListener("scroll", () => {
  headers.forEach((header) => {
    if (window.scrollY > 150 && header.classList.contains("top-header")) {
      header.style.top = "0";
    } else {
      header.style.top = "-100px";
    }
  });
});

navigations.forEach((navigation) => {
  const trigger = navigation.querySelector(".button-menu-trigger");
  const menu = navigation.querySelector(".site-navigation");
  trigger.addEventListener("click", function () {
    this.classList.toggle("actived");
    if (!menu.classList.contains("opened")) {
      menu.classList.add("opened");
    } else {
      menu.classList.remove("opened");
    }
  });
});
