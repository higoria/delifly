export default function ativarBtnMenu() {
  const btnMenu = document.querySelector(".btn-menu");
  const itensNav = document.querySelector(".ulNav");
  const headerConteiner = document.querySelector(".headerconteiner");

  btnMenu.addEventListener("click", (event) => {
    event.preventDefault();
    itensNav.classList.toggle("ativo");
    headerConteiner.classList.toggle("ativo");
  });
}
