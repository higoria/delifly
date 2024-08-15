export default function ativarLogin() {
  document.addEventListener("DOMContentLoaded", () => {
    const modalConteiner = document.querySelector(".modal-Login");
    const fecharModal = document.querySelector(".closeX-login");
    const btnLogin = document.querySelector(".li-login");

    if (btnLogin && modalConteiner && fecharModal) {
      btnLogin.addEventListener("click", () => {
        modalConteiner.classList.add("ativo");
      });

      fecharModal.addEventListener("click", () => {
        modalConteiner.classList.remove("ativo");
      });
    } else {
      console.error("Um ou mais elementos não foram encontrados.");
    }
  });
}
