"use strict";
const sidenav = document.getElementById("sideNav");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");
function openNav() {
    if (sidenav) {
        sidenav.classList.add("active");
    }
}
function closeNav() {
    if (sidenav) {
        sidenav.classList.remove("active");
    }
}
if (openBtn) {
    openBtn.onclick = openNav;
}
if (closeBtn) {
    closeBtn.onclick = closeNav;
}
////////////////////////////////////////////:
const invoiceButton = document.querySelector(".page__list__btn__invoices");
const companyButton = document.querySelector(".page__list__btn__companies");
const contactButton = document.querySelector(".page__list__btn__contact");
const recapButton = document.querySelector(".page__list__btn__dashboar");
function newInvoice(event) {
    event.preventDefault();
    if (invoiceButton) {
        invoiceButton.style.fontWeight = "bold";
    }
    if (companyButton) {
        companyButton.style.fontWeight = "normal";
    }
    if (contactButton) {
        contactButton.style.fontWeight = "normal";
    }
    if (recapButton) {
        recapButton.style.fontWeight = "normal";
    }
    let mainElement = document.querySelector(".container__main");
    let dynamicElement = document.querySelector(".container__dynamic");
    let formInvoice = `
    <div class="container__dynamic__dashboard">
      <h4>New invoice</h4>
      <hr>
      <form class="container__dynamic__dashboard__form" method="POST" >
        <input type="text" placeholder="Reference..." name="reference">
        <input type="text" placeholder="Due date..." name="due_date">
        <select name="choices">
          <option value="" disabled selected>Select a company...</option>
          <option value="1">Raviga</option>
          <option value="2">Dunder Mifflin</option>
          <option value="3">Pierre Cailloux</option>
          <option value="4">Belgalol</option>
          <option value="5">Jouet Jean-Michel</option>
        </select>
        <input type="submit" value="save">
      </form>
    </div>
  `;
    if (mainElement) {
        mainElement.style.display = "none";
        if (dynamicElement) {
            dynamicElement.innerHTML = "";
            dynamicElement.innerHTML = formInvoice;
        }
    }
}
function newCompany(event) {
    event.preventDefault();
    if (companyButton) {
        companyButton.style.fontWeight = "bold";
    }
    if (invoiceButton) {
        invoiceButton.style.fontWeight = "normal";
    }
    if (contactButton) {
        contactButton.style.fontWeight = "normal";
    }
    if (recapButton) {
        recapButton.style.fontWeight = "normal";
    }
    let mainElement = document.querySelector(".container__main");
    let dynamicElement = document.querySelector(".container__dynamic");
    let formCompany = `
    <div class="container__dynamic__dashboard">
      <h4>New Company</h4>
      <hr>
      <form class="container__new__invoice__form" method="POST">
        <select name="choices">
          <option value="" disabled selected>Select a company...</option>
          <option value="1">Raviga</option>
          <option value="2">Dunder Mifflin</option>
          <option value="3">Pierre Cailloux</option>
          <option value="4">Belgalol</option>
          <option value="5">Jouet Jean-Michel</option>
        </select>
        <input type="text" placeholder="Country..." name="country">
        <input type="text" placeholder="TVA..." name="tva">
        <input type="submit" value="save">
      </form>
    </div>
  `;
    if (mainElement) {
        mainElement.style.display = "none";
        if (dynamicElement) {
            dynamicElement.innerHTML = "";
            dynamicElement.innerHTML = formCompany;
        }
    }
}
function newContact(event) {
    event.preventDefault();
    if (contactButton) {
        contactButton.style.fontWeight = "bold";
    }
    if (companyButton) {
        companyButton.style.fontWeight = "normal";
    }
    if (invoiceButton) {
        invoiceButton.style.fontWeight = "normal";
    }
    if (recapButton) {
        recapButton.style.fontWeight = "normal";
    }
    let mainElement = document.querySelector(".container__main");
    let dynamicElement = document.querySelector(".container__dynamic");
    let formContact = `
    <div class="container__dynamic__dashboard">
      <h4>New Contact</h4>
      <hr>
      <form class="container__new__invoice__form" method="POST">
        <input type="text" placeholder="Company name..." name="name">
        <input type="text" placeholder="Country..." name="country">
        <input type="text" placeholder="TVA..." name="tva">
        <input type="submit" value="save">
      </form>
    </div>
  `;
    if (mainElement) {
        mainElement.style.display = "none";
        if (dynamicElement) {
            dynamicElement.innerHTML = "";
            dynamicElement.innerHTML = formContact;
        }
    }
}
function showRecap(event) {
    event.preventDefault();
    if (recapButton) {
        recapButton.style.fontWeight = "bold";
    }
    if (contactButton) {
        contactButton.style.fontWeight = "normal";
    }
    if (companyButton) {
        companyButton.style.fontWeight = "normal";
    }
    if (invoiceButton) {
        invoiceButton.style.fontWeight = "normal";
    }
    let mainElement = document.querySelector(".container__main");
    let dynamicElement = document.querySelector(".container__dynamic");
    if (dynamicElement) {
        dynamicElement.innerHTML = "";
        if (mainElement) {
            mainElement.style.display = "block";
        }
    }
}
document.addEventListener("DOMContentLoaded", function () {
    const invoiceLink = document.querySelector(".page__list__btn__invoices");
    const companyLink = document.querySelector(".page__list__btn__companies");
    const contactLink = document.querySelector(".page__list__btn__contact");
    const linkRecap = document.querySelector(".page__list__btn__dashboard");
    if (invoiceLink) {
        invoiceLink.addEventListener("click", newInvoice);
    }
    if (companyLink) {
        companyLink.addEventListener("click", newCompany);
    }
    if (contactLink) {
        contactLink.addEventListener("click", newContact);
    }
    if (linkRecap) {
        linkRecap.addEventListener("click", showRecap);
    }
});
