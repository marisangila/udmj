function menuShow() {
  let menuMobile = document.querySelector(".mobile-menu");
  let container = document.querySelector("#container");

  if (menuMobile.classList.contains("open")) {
    menuMobile.classList.remove("open");
    document.querySelector(".icon").src = "assets/img/menu_white_36dp.svg";
    container.style.marginTop = "0";
  } else {
    menuMobile.classList.add("open");
    document.querySelector(".icon").src =
      "../../assets/img/close_white_36dp.svg";
    container.style.marginTop = "290px";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var servicosLink = document.querySelector(".nav-item:nth-child(2) a");

  servicosLink.addEventListener("click", function (event) {
    event.preventDefault(); // Impede o comportamento padrão de seguir o link

    var servicoSection = document.querySelector(".servico");
    servicoSection.scrollIntoView({ behavior: "smooth" });
  });
});
