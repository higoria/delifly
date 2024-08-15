export default function ativarMsg() {
  const msg = document.getElementsByClassName("h1-mgs-db")[0];
  if (msg && msg.innerText.trim() !== "") {
    setTimeout(() => {
      msg.style.display = "none";
      console.log("teste");
    }, 5000);
  }
}
