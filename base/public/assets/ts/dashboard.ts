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
const recapButton = document.querySelector(".page__list__btn__dashboard");

function newInvoice(event: Event): void {
  event.preventDefault();
  const errorElement = document.getElementById("error");
  if (errorElement) {
    errorElement.textContent = "";
  }

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
  const errorElement = document.getElementById("error");
  if (errorElement) {
    errorElement.textContent = "";
  }

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
  const errorElement = document.getElementById("error");
  if (errorElement) {
    errorElement.textContent = "";
  }

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

  const errorElement = document.getElementById("error");
  if (errorElement) {
    errorElement.textContent = "";
  }

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

///////////////////////////validation invoice///////////////////////////////

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
  if (!reference) {
    if (errorElement) {
      errorElement.textContent += " *Reference is required";
    }
    valid = false;
  }
  if (!dueDate) {
    if (errorElement) {
      errorElement.textContent += " *Due date is required";
    }
    valid = false;
  }
  if (!choices) {
    if (errorElement) {
      errorElement.textContent += " *Company name is required";
    }
    valid = false;
  }

  if (!valid) {
    event.preventDefault();
  }
}

/////////////////////////////validation company////////////////////

function validateFormDashboardCompany(event: Event) {
  const name = (document.getElementsByName("name")[0] as HTMLInputElement)
    .value;
  const tva = (document.getElementsByName("tva")[0] as HTMLInputElement).value;
  const country = (document.getElementsByName("country")[0] as HTMLInputElement)
    .value;
  const choices = (document.getElementsByName("choices")[0] as HTMLInputElement)
    .value;

  let valid = true;

  const errorElement = document.getElementById("error");
  if (errorElement) {
    errorElement.textContent = "";
  }
  if (!name) {
    if (errorElement) {
      errorElement.textContent += " *Name is required";
    }
    valid = false;
  }
  if (!country) {
    if (errorElement) {
      errorElement.textContent += " *Country is required";
    }
    valid = false;
  }
  if (!choices) {
    if (errorElement) {
      errorElement.textContent += " *Type is required";
    }
    valid = false;
  }
  if (!tva) {
    if (errorElement) {
      errorElement.textContent += " *TVA is required";
    }
    valid = false;
  }

  if (!valid) {
    event.preventDefault();
  }
}

//////////////////////////////validation contact///////////////////////////////

function validateFormDashboardContact(event: Event) {
  const name = (document.getElementsByName("name")[0] as HTMLInputElement)
    .value;
  const mail = (document.getElementsByName("email")[0] as HTMLInputElement)
    .value;
  const phone = (document.getElementsByName("phone")[0] as HTMLInputElement)
    .value;
  const choices = (document.getElementsByName("choices")[0] as HTMLInputElement)
    .value;

  let valid = true;

  const errorElement = document.getElementById("error");
  if (errorElement) {
    errorElement.textContent = "";
  }
  if (!name) {
    if (errorElement) {
      errorElement.textContent += " *Name is required";
    }
    valid = false;
  }
  if (!validateEmailContact(mail)) {
    if (errorElement) {
      errorElement.textContent += " *Valid email address is required";
    }
    valid = false;
  }
  if (!choices) {
    if (errorElement) {
      errorElement.textContent += " *Company name is required";
    }
    valid = false;
  }
  if (!validateEmailContact(phone)) {
    if (errorElement) {
      errorElement.textContent += " *Valid phone is required";
    }
    valid = false;
  }

  if (!valid) {
    event.preventDefault();
  }

  function validateEmailContact(mail: string) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(mail);
  }

  function validatePhoneNumber(phone: string) {
    const rePhone = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
    return rePhone.test(phone);
  }
}

///////////////////////////////////////////////
const formCompany = document.querySelector(
  ".container__dynamic__dashboard__company__new__form"
);
if (formCompany) {
  formCompany.addEventListener("submit", validateFormDashboardCompany);
}

const formInvoices = document.querySelector(
  ".container__dynamic__dashboard____invoices__new__form"
);
if (formInvoices) {
  formInvoices.addEventListener("submit", validateFormDashboardInvoice);
}

const formContact = document.querySelector(
  ".container__dynamic__dashboard__contact__new__form"
);
if (formContact) {
  formContact.addEventListener("submit", validateFormDashboardContact);
}
