export default function ativarLogin() {
  const modalConteiner = document.querySelector(".modal-Login");
  const fecharModal = document.querySelector(".closeX-login");
  const btnLogin = document.querySelector(".li-login");
  console.log(modalConteiner);
  console.log(fecharModal);
  console.log(btnLogin);

  btnLogin.addEventListener("click", () => {
    modalConteiner.classList.add("ativo");
  });

  fecharModal.addEventListener("click", () => {
    modalConteiner.classList.remove("ativo");
  });
}
