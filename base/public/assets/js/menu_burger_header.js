"use strict";
const sidenavM = document.getElementById("sideNav");
const openBtnM = document.getElementById("openBtn");
const closeBtnM = document.getElementById("closeBtn");
function openNav() {
    if (sidenavM) {
        sidenavM.classList.add("active");
    }
}
function closeNav() {
    if (sidenavM) {
        sidenavM.classList.remove("active");
    }
}
if (openBtnM) {
    openBtnM.onclick = openNav;
}
if (closeBtnM) {
    closeBtnM.onclick = closeNav;
}
