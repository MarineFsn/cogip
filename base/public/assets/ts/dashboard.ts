$(document).ready(function () {
  $("#myTableContacts").dataTable({
    initComplete: function (settings: any, json: any) {
      $("input", this.api().table().container()).attr(
        "placeholder",
        "Search contact..."
      );
      $("input", this.api().table().container()).attr("class", "input_search");
      $("label", this.api().table().container()).attr("class", "label_search");
    },
  });

  $("#myTableInvoices").dataTable({
    initComplete: function (settings: any, json: any) {
      $("input", this.api().table().container()).attr(
        "placeholder",
        "Search invoice..."
      );
      $("input", this.api().table().container()).attr("class", "input_search");
      $("label", this.api().table().container()).attr("class", "label_search");
    },
  });

  $("#myTableCompanies").dataTable({
    initComplete: function (settings: any, json: any) {
      $("input", this.api().table().container()).attr(
        "placeholder",
        "Search company..."
      );
      $("input", this.api().table().container()).attr("class", "input_search");
      $("label", this.api().table().container()).attr("class", "label_search");
    },
  });

  const labels = document.querySelectorAll(".dataTables_length");
  labels.forEach((label) => label.remove());

  const divInfos = document.querySelectorAll(".dataTables_info");
  divInfos.forEach((divInfo) => divInfo.remove());

  var labelElement = document.querySelector(".dataTables_filter label");
  var textElement = labelElement!.querySelector("span");
  textElement!.textContent = "";
});

////////////////////////////////////////////////////////////////////////
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

  let mainElement: HTMLElement | null = document.querySelector(".container");
  let dynamicElement: HTMLElement | null = document.querySelector(
    ".container__dynamic"
  );

  let newinvoices = document.getElementById("new__invoices");
  let newCompany = document.getElementById("new__company");
  let newContact = document.getElementById("new__contact");

  if (mainElement) {
    mainElement.style.display = "none";
    mainElement.classList.remove("animation");
    if (newinvoices) {
      newinvoices.style.display = "block";
      newinvoices.classList.add("animation");
      if (newCompany) {
        newCompany.style.display = "none";
        newCompany.classList.remove("animation");
        if (newContact) {
          newContact.style.display = "none";
          newContact.classList.remove("animation");
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

  let mainElement: HTMLElement | null = document.querySelector(".container");
  let newinvoices = document.getElementById("new__invoices");
  let newCompany = document.getElementById("new__company");
  let newContact = document.getElementById("new__contact");

  if (mainElement) {
    mainElement.style.display = "none";
    mainElement.classList.remove("animation");
    if (newinvoices) {
      newinvoices.style.display = "none";
      newinvoices.classList.remove("animation");
      if (newCompany) {
        newCompany.style.display = "block";
        newCompany.classList.add("animation");
        if (newContact) {
          newContact.style.display = "none";
          newContact.classList.remove("animation");
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

  let mainElement: HTMLElement | null = document.querySelector(".container");
  let newinvoices = document.getElementById("new__invoices");
  let newCompany = document.getElementById("new__company");
  let newContact = document.getElementById("new__contact");

  if (mainElement) {
    mainElement.style.display = "none";
    mainElement.classList.remove("animation");
    if (newinvoices) {
      newinvoices.style.display = "none";
      newinvoices.classList.remove("animation");
      if (newCompany) {
        newCompany.style.display = "none";
        newCompany.classList.remove("animation");
        if (newContact) {
          newContact.style.display = "block";
          newContact.classList.add("animation");
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

  let mainElement: HTMLElement | null = document.querySelector(".container");
  let newinvoices = document.getElementById("new__invoices");
  let newCompany = document.getElementById("new__company");
  let newContact = document.getElementById("new__contact");

  if (mainElement) {
    mainElement.style.display = "block";
    mainElement.classList.add("animation");
    if (newinvoices) {
      newinvoices.style.display = "none";
      newinvoices.classList.remove("animation");
      if (newCompany) {
        newCompany.style.display = "none";
        newCompany.classList.remove("animation");
        if (newContact) {
          newContact.style.display = "none";
          newContact.classList.remove("animation");
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

//////////////////////////////////////////////////////////

function validateFormDashboardInvoice(event: Event) {
  const reference = (
    document.getElementsByName("reference")[0] as HTMLInputElement
  ).value;
  const dueDate = (
    document.getElementsByName("due_date")[0] as HTMLInputElement
  ).value;
  const choices = (document.getElementsByName("choices")[0] as HTMLInputElement)
    .value;

  let valid = true;

  const errorElement = document.getElementById("error");
  if (errorElement) {
    errorElement.textContent = "";
  }

  if (!valid) {
    event.preventDefault();
  }
}

const formInvoices = document.querySelector(
  ".container__dynamic__dashboard____invoices__new__form"
);
if (formInvoices) {
  formInvoices.addEventListener("submit", validateForm);
}
