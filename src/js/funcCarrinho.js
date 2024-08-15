export default function ativarFuncCarrinho() {
  if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
  } else {
    ready();
  }

  let totalAmount = "0.00";
  var spanAvisos = document.querySelector(".span-aviso-cart");
  const btnPgamentNotDrop = document.querySelectorAll(".btn-no-drop");

  function ready() {
    const removeProductButtons =
      document.getElementsByClassName("remover-cart");
    for (var i = 0; i < removeProductButtons.length; i++) {
      removeProductButtons[i].addEventListener("click", removeProduct);
    }

    const quantityInputs = document.getElementsByClassName("add-input");
    for (var i = 0; i < quantityInputs.length; i++) {
      quantityInputs[i].addEventListener("change", checkIfInputNull);
    }

    const btnAddAoCart = document.querySelectorAll(".pedir-btn-js");
    btnAddAoCart.forEach((botoes) => {
      botoes.addEventListener("click", addProductCart);
    });

    const btnPagament = document.getElementsByClassName("button-pagamento")[0];
    btnPagament.addEventListener("click", makePurchase);
  }

  function makePurchase() {
    const spanTotal =
      document.getElementsByClassName("total-cart")[0].innerText;
    const spanTotalFormated = spanTotal.replace("Total: R$ ", "");
    if (totalAmount == "0.00" || spanTotalFormated == "0.00") {
      spanAvisos.innerText = "Seu carrinho de compra esta vazio.";
      btnPgamentNotDrop.forEach((btn) => {
        btn.style.cursor = "not-allowed";
      });
    }
  }

  function removeProduct(event) {
    event.target.parentElement.parentElement.parentElement.remove();
    updateTotal();
  }

  function checkIfInputNull(event) {
    if (event.target.value === "0") {
      event.target.parentElement.parentElement.parentElement.remove();
    }
    updateTotal();
  }

  function addProductCart(event) {
    const btn = event.target; // contem exatamente em qual botao de "pedir" foi clicado.
    const prodcutInfos = btn.parentElement.parentElement;
    const productImg =
      prodcutInfos.getElementsByClassName("img-product-js")[0].src;
    const productName =
      prodcutInfos.getElementsByClassName("nome-geral-js")[0].innerText;
    const productPrice = prodcutInfos
      .getElementsByClassName("valor-js")[0]
      .innerText.replace("R$ ", "");

    const productNameVerif = document.getElementsByClassName("nome-product-js");
    for (var i = 0; i < productNameVerif.length; i++) {
      if (productNameVerif[i].innerText === productName) {
        productNameVerif[
          i
        ].parentElement.parentElement.parentElement.getElementsByClassName(
          "add-input"
        )[0].value++;
        updateTotal();
        return;
      }
    }

    let newCartProduct = document.createElement("tr");
    newCartProduct.classList.add("item-do-usuario");
    newCartProduct.innerHTML = `
    <td class="info-produto-cart">
              <div class="img-produto-cart">
                <img src="${productImg}" alt="">
              </div>
              <div class="nome-produto-cart">
                <p>${productName}</p>
              </div>
            </td>
            <td class="valor-cart">${productPrice}</td>
            <td>
              <div class="remove-total-conteiner">
                <input class="add-input" type="number" value="1">
                <p class="remover-cart">Remover</p>
              </div>
            </td>
    `;

    const table = document.querySelector(".table");
    table.append(newCartProduct);
    updateTotal();
    newCartProduct
      .getElementsByClassName("add-input")[0]
      .addEventListener("change", checkIfInputNull);
    newCartProduct
      .getElementsByClassName("remover-cart")[0]
      .addEventListener("click", removeProduct);
    spanAvisos.innerText = "";
    btnPgamentNotDrop.forEach((btn) => {
      btn.style.cursor = "pointer";
    });
  }

  function updateTotal() {
    totalAmount = 0;
    const cartProducts = document.getElementsByClassName("item-do-usuario");
    for (var i = 0; i < cartProducts.length; i++) {
      const productPrice = cartProducts[i]
        .getElementsByClassName("valor-cart")[0]
        .innerText.replace("R$", "")
        .replace(",", ".");
      const productQuantidade =
        cartProducts[i].getElementsByClassName("add-input")[0].value;

      totalAmount += productPrice * productQuantidade;
    }
    document.querySelector(".spanTotal").innerText = totalAmount.toFixed(2);
  }
  updateTotal();
}
