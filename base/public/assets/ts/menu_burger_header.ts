const sidenavM = document.getElementById("sideNav") as HTMLElement;
const openBtnM = document.getElementById("openBtn") as HTMLElement;
const closeBtnM = document.getElementById("closeBtn") as HTMLElement;

function openNavM() {
  if (sidenavM) {
    sidenavM.classList.add("active");
  }
}

function closeNavM() {
  if (sidenavM) {
    sidenavM.classList.remove("active");
  }
}
if (openBtnM) {
  openBtnM.onclick = openNavM;
}
if (closeBtnM) {
  closeBtnM.onclick = closeNavM;
}
