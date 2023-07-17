"use strict";
$(document).ready(function () {
    $("#myTableContacts").dataTable({
        initComplete: function (settings, json) {
            $("input", this.api().table().container()).attr("placeholder", "Search contact...");
            $("input", this.api().table().container()).attr("class", "input_search");
            $("label", this.api().table().container()).attr("class", "label_search");
        },
    });
    $("#myTableInvoices").dataTable({
        initComplete: function (settings, json) {
            $("input", this.api().table().container()).attr("placeholder", "Search invoice...");
            $("input", this.api().table().container()).attr("class", "input_search");
            $("label", this.api().table().container()).attr("class", "label_search");
        },
    });
    $("#myTableCompanies").dataTable({
        initComplete: function (settings, json) {
            $("input", this.api().table().container()).attr("placeholder", "Search company...");
            $("input", this.api().table().container()).attr("class", "input_search");
            $("label", this.api().table().container()).attr("class", "label_search");
        },
    });
    const label = document.querySelector(".dataTables_length");
    label.remove();
    const divInfo = document.querySelector(".dataTables_info");
    divInfo.remove();
    var labelElement = document.querySelector(".dataTables_filter label");
    var textElement = labelElement.querySelector("span");
    textElement.textContent = "";
});
////////////////////////////////////////////////////////////////////////
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
    let mainElement = document.querySelector(".container");
    let dynamicElement = document.querySelector(".container__dynamic");
    let newinvoices = document.getElementById("new__invoices");
    let newCompany = document.getElementById("new__company");
    let newContact = document.getElementById("new__contact");
    if (mainElement) {
        mainElement.style.display = "none";
        if (newinvoices) {
            newinvoices.style.display = "block";
            if (newCompany) {
                newCompany.style.display = "none";
                if (newContact) {
                    newContact.style.display = "none";
                }
            }
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
    let mainElement = document.querySelector(".container");
    let newinvoices = document.getElementById("new__invoices");
    let newCompany = document.getElementById("new__company");
    let newContact = document.getElementById("new__contact");
    if (mainElement) {
        mainElement.style.display = "none";
        if (newinvoices) {
            newinvoices.style.display = "none";
            if (newCompany) {
                newCompany.style.display = "block";
                if (newContact) {
                    newContact.style.display = "none";
                }
            }
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
    let mainElement = document.querySelector(".container");
    let newinvoices = document.getElementById("new__invoices");
    let newCompany = document.getElementById("new__company");
    let newContact = document.getElementById("new__contact");
    if (mainElement) {
        mainElement.style.display = "none";
        if (newinvoices) {
            newinvoices.style.display = "none";
            if (newCompany) {
                newCompany.style.display = "none";
                if (newContact) {
                    newContact.style.display = "block";
                }
            }
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
    let mainElement = document.querySelector(".container");
    let newinvoices = document.getElementById("new__invoices");
    let newCompany = document.getElementById("new__company");
    let newContact = document.getElementById("new__contact");
    if (mainElement) {
        mainElement.style.display = "block";
        if (newinvoices) {
            newinvoices.style.display = "none";
            if (newCompany) {
                newCompany.style.display = "none";
                if (newContact) {
                    newContact.style.display = "none";
                }
            }
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
