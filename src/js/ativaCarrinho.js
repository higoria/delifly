export default function ativaCarrinho() {
  const navCarrinho = document.querySelector(".ulNav .cart");
  const modalCarrinho = document.querySelector(".modal-carrinho");
  const fechaModal = document.querySelector(".closeX-cart");

  navCarrinho.addEventListener("click", (event) => {
    modalCarrinho.classList.add("ativo");
  });

  fechaModal.addEventListener("click", () => {
    modalCarrinho.classList.remove("ativo");
  });
}
