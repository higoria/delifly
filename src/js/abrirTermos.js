export default function ativarTermo() {
  const arrow01 = document.querySelector(".arrow1");
  const arrow02 = document.querySelector(".arrow2");
  const ul01 = document.querySelector(".ul-footer1");
  const ul02 = document.querySelector(".ul-footer2");

  arrow01.addEventListener("click", () => {
    ul01.classList.toggle("ativo");
  });

  arrow02.addEventListener("click", () => {
    ul02.classList.toggle("ativo");
  });
}
