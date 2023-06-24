const mensage = document.getElementById("menssagemSucesso");
const form = document.getElementById("form");

form.addEventListener("submit", (event) => {
  showMensage();
  function showMensage() {
    if (form.addEventListener("submit")) {
      mensage.style.display = "block";
    }
  }
});
