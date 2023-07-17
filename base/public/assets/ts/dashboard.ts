const sidenav = document.getElementById("sideNav") as HTMLElement;
const openBtn = document.getElementById("openBtn") as HTMLElement;
const closeBtn = document.getElementById("closeBtn") as HTMLElement;

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

function newInvoice(event: Event): void {
  event.preventDefault();

  if (invoiceButton) {
    (invoiceButton as HTMLElement).style.fontWeight = "bold";
  }
  if (companyButton) {
    (companyButton as HTMLElement).style.fontWeight = "normal";
  }
  if (contactButton) {
    (contactButton as HTMLElement).style.fontWeight = "normal";
  }
  if (recapButton) {
    (recapButton as HTMLElement).style.fontWeight = "normal";
  }

  let mainElement: HTMLElement | null =
    document.querySelector(".container__main");
  let dynamicElement: HTMLElement | null = document.querySelector(
    ".container__dynamic"
  );

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

function newCompany(event: Event): void {
  event.preventDefault();

  if (companyButton) {
    (companyButton as HTMLElement).style.fontWeight = "bold";
  }

  if (invoiceButton) {
    (invoiceButton as HTMLElement).style.fontWeight = "normal";
  }

  if (contactButton) {
    (contactButton as HTMLElement).style.fontWeight = "normal";
  }
  if (recapButton) {
    (recapButton as HTMLElement).style.fontWeight = "normal";
  }

  let mainElement: HTMLElement | null =
    document.querySelector(".container__main");
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

function newContact(event: Event): void {
  event.preventDefault();

  if (contactButton) {
    (contactButton as HTMLElement).style.fontWeight = "bold";
  }

  if (companyButton) {
    (companyButton as HTMLElement).style.fontWeight = "normal";
  }

  if (invoiceButton) {
    (invoiceButton as HTMLElement).style.fontWeight = "normal";
  }

  if (recapButton) {
    (recapButton as HTMLElement).style.fontWeight = "normal";
  }

  let mainElement: HTMLElement | null =
    document.querySelector(".container__main");
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

function showRecap(event: Event): void {
  event.preventDefault();

  if (recapButton) {
    (recapButton as HTMLElement).style.fontWeight = "bold";
  }

  if (contactButton) {
    (contactButton as HTMLElement).style.fontWeight = "normal";
  }

  if (companyButton) {
    (companyButton as HTMLElement).style.fontWeight = "normal";
  }

  if (invoiceButton) {
    (invoiceButton as HTMLElement).style.fontWeight = "normal";
  }

  let mainElement: HTMLElement | null =
    document.querySelector(".container__main");
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
