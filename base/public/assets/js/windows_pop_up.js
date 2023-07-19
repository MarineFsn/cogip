"use strict";
const allInvoices = document.querySelectorAll(".dynamic__dashboard__modify__invoices");
const allInvoicesButton = document.querySelectorAll(".modify-button-invoices");
// console.log(allInvoicesButton);
function modify_invoices(allInvoices, allInvoicesButton) {
    const invoicesPopUp = document.getElementById("invoices_pop_up");
    invoicesPopUp.style.display = "none";
    allInvoicesButton.forEach((element, event) => {
        const id = element.getAttribute("id");
        element.addEventListener("click", (event) => {
            var _a, _b, _c;
            event.preventDefault();
            invoicesPopUp.style.display = "block";
            invoicesPopUp.style.transform = "scale(1)";
            // console.log(id);
            // console.log(element.parentElement);
            const idNumber = id.match(/\d+/)[0];
            // console.log(idNumber);
            const tr = document.getElementById(`modify-tr-invoices-${idNumber}`);
            // console.log(tr);
            // console.log(tr?.children);
            const invoiceNumber = (_a = tr === null || tr === void 0 ? void 0 : tr.children[2]) === null || _a === void 0 ? void 0 : _a.textContent;
            const dueDates = (_b = tr === null || tr === void 0 ? void 0 : tr.children[3]) === null || _b === void 0 ? void 0 : _b.textContent;
            const company = (_c = tr === null || tr === void 0 ? void 0 : tr.children[4]) === null || _c === void 0 ? void 0 : _c.textContent;
            // const created_at = tr?.children[5]?.textContent;
            // console.log(invoiceNumber);
            // console.log(dueDates);
            // console.log(company);
            // console.log(created_at);
            const inputInvoiceNumber = document.querySelector(`input[name="invoice-number"]`);
            inputInvoiceNumber.setAttribute("value", `${invoiceNumber === null || invoiceNumber === void 0 ? void 0 : invoiceNumber.trim()}`);
            const inputDueDates = document.querySelector(`input[name="due-dates"]`);
            const formattedInputDueDates = String(dueDates === null || dueDates === void 0 ? void 0 : dueDates.split('/').reverse().join('-').replace(/\s/g, ''));
            inputDueDates.setAttribute("value", `${formattedInputDueDates}`);
            const inputCompany = document.querySelector(`input[name="company"]`);
            inputCompany.setAttribute("value", `${company === null || company === void 0 ? void 0 : company.trim()}`);
        });
        const buttonCancelInvoicesPopUp = document.getElementById("button_cancel_invoices_pop_up");
        buttonCancelInvoicesPopUp === null || buttonCancelInvoicesPopUp === void 0 ? void 0 : buttonCancelInvoicesPopUp.addEventListener("click", (event) => {
            event.preventDefault();
            stylingClosePopUp(invoicesPopUp);
        });
        const buttonSubmitInvoicesPopUp = document.getElementById("button_submit_invoices_pop_up");
        buttonSubmitInvoicesPopUp === null || buttonSubmitInvoicesPopUp === void 0 ? void 0 : buttonSubmitInvoicesPopUp.addEventListener("click", (event) => {
            event.preventDefault();
            // EXPORTER LES DONNEES !
            stylingClosePopUp(invoicesPopUp);
        });
        function stylingClosePopUp(container_pop_up) {
            container_pop_up.style.transition = "transform 0.2s";
            container_pop_up.style.transform = "scale(0)";
            container_pop_up.addEventListener("transitionend", () => {
                container_pop_up.style.display = "none";
            });
        }
    });
}
modify_invoices(allInvoices, allInvoicesButton);
// -------------------------------------------------------------------COMPANY--------------------------------------------------------------------------------
const allCompany = document.querySelectorAll(".dynamic__dashboard__modify__company");
const allCompanyButton = document.querySelectorAll(".modify-button-company");
function modify_company(allCompany, allCompanyButton) {
    const companyPopUp = document.getElementById("company_pop_up");
    companyPopUp.style.display = "none";
    allCompanyButton.forEach((element, event) => {
        const id = element.getAttribute("id");
        element.addEventListener("click", (event) => {
            var _a, _b, _c, _d;
            event.preventDefault();
            companyPopUp.style.display = "block";
            companyPopUp.style.transform = "scale(1)";
            // console.log(id);
            // console.log(element.parentElement);
            const idNumber = id.match(/\d+/)[0];
            // console.log(idNumber);
            const tr = document.getElementById(`modify-tr-company-${idNumber}`);
            // console.log(tr);
            // console.log(tr?.children);
            const companyName = (_a = tr === null || tr === void 0 ? void 0 : tr.children[2]) === null || _a === void 0 ? void 0 : _a.textContent;
            const tva = (_b = tr === null || tr === void 0 ? void 0 : tr.children[3]) === null || _b === void 0 ? void 0 : _b.textContent;
            const country = (_c = tr === null || tr === void 0 ? void 0 : tr.children[4]) === null || _c === void 0 ? void 0 : _c.textContent;
            const type = (_d = tr === null || tr === void 0 ? void 0 : tr.children[5]) === null || _d === void 0 ? void 0 : _d.textContent;
            // console.log(invoiceNumber);
            // console.log(dueDates);
            // console.log(company);
            // console.log(created_at);
            const inputCompanyName = document.querySelector(`input[name="company-name"]`);
            inputCompanyName.setAttribute("value", `${companyName === null || companyName === void 0 ? void 0 : companyName.trim()}`);
            const inputTva = document.querySelector(`input[name="tva"]`);
            inputTva.setAttribute("value", `${tva === null || tva === void 0 ? void 0 : tva.trim()}`);
            const inputCountry = document.querySelector(`input[name="country"]`);
            inputCountry.setAttribute("value", `${country === null || country === void 0 ? void 0 : country.trim()}`);
            const inputType = document.querySelector(`input[name="type"]`);
            inputType.setAttribute("value", `${type === null || type === void 0 ? void 0 : type.trim()}`);
        });
        const buttonCancelCompanyPopUp = document.getElementById("button_cancel_company_pop_up");
        buttonCancelCompanyPopUp === null || buttonCancelCompanyPopUp === void 0 ? void 0 : buttonCancelCompanyPopUp.addEventListener("click", (event) => {
            event.preventDefault();
            stylingClosePopUp(companyPopUp);
        });
        const buttonSubmitCompanyPopUp = document.getElementById("button_submit_company_pop_up");
        buttonSubmitCompanyPopUp === null || buttonSubmitCompanyPopUp === void 0 ? void 0 : buttonSubmitCompanyPopUp.addEventListener("click", (event) => {
            event.preventDefault();
            // EXPORTER LES DONNEES !
            stylingClosePopUp(companyPopUp);
        });
        function stylingClosePopUp(container_pop_up) {
            container_pop_up.style.transition = "transform 0.2s";
            container_pop_up.style.transform = "scale(0)";
            container_pop_up.addEventListener("transitionend", () => {
                container_pop_up.style.display = "none";
            });
        }
    });
}
modify_company(allCompany, allCompanyButton);
// -------------------------------------------------------------------CONTACT--------------------------------------------------------------------------------
const allContact = document.querySelectorAll(".dynamic__dashboard__modify__contact");
const allContactButton = document.querySelectorAll(".modify-button-contact");
function modify_contact(allContact, allContactButton) {
    const contactPopUp = document.getElementById("contact_pop_up");
    contactPopUp.style.display = "none";
    allContactButton.forEach((element, event) => {
        const id = element.getAttribute("id");
        element.addEventListener("click", (event) => {
            var _a, _b, _c, _d;
            event.preventDefault();
            contactPopUp.style.display = "block";
            contactPopUp.style.transform = "scale(1)";
            console.log(id);
            console.log(element.parentElement);
            const idNumber = id.match(/\d+/)[0];
            console.log(idNumber);
            const tr = document.getElementById(`modify-tr-contact-${idNumber}`);
            console.log(tr);
            console.log(tr === null || tr === void 0 ? void 0 : tr.children);
            const contactName = (_a = tr === null || tr === void 0 ? void 0 : tr.children[2]) === null || _a === void 0 ? void 0 : _a.textContent;
            const mail = (_b = tr === null || tr === void 0 ? void 0 : tr.children[3]) === null || _b === void 0 ? void 0 : _b.textContent;
            const phone = (_c = tr === null || tr === void 0 ? void 0 : tr.children[4]) === null || _c === void 0 ? void 0 : _c.textContent;
            const company = (_d = tr === null || tr === void 0 ? void 0 : tr.children[5]) === null || _d === void 0 ? void 0 : _d.textContent;
            // console.log(invoiceNumber);
            // console.log(dueDates);
            // console.log(company);
            // console.log(created_at);
            const inputContactName = document.querySelector(`input[name="contact-name"]`);
            inputContactName.setAttribute("value", `${contactName === null || contactName === void 0 ? void 0 : contactName.trim()}`);
            const inputMail = document.querySelector(`input[name="mail"]`);
            inputMail.setAttribute("value", `${mail === null || mail === void 0 ? void 0 : mail.trim()}`);
            const inputPhone = document.querySelector(`input[name="phone"]`);
            inputPhone.setAttribute("value", `${phone === null || phone === void 0 ? void 0 : phone.trim()}`);
            const inputCompany = document.querySelector(`input[name="company"]`);
            inputCompany.setAttribute("value", `${company === null || company === void 0 ? void 0 : company.trim()}`);
        });
        const buttonCancelContactPopUp = document.getElementById("button_cancel_contact_pop_up");
        buttonCancelContactPopUp === null || buttonCancelContactPopUp === void 0 ? void 0 : buttonCancelContactPopUp.addEventListener("click", (event) => {
            event.preventDefault();
            stylingClosePopUp(contactPopUp);
        });
        const buttonSubmitContactPopUp = document.getElementById("button_submit_contact_pop_up");
        buttonSubmitContactPopUp === null || buttonSubmitContactPopUp === void 0 ? void 0 : buttonSubmitContactPopUp.addEventListener("click", (event) => {
            event.preventDefault();
            // EXPORTER LES DONNEES !
            stylingClosePopUp(contactPopUp);
        });
        function stylingClosePopUp(container_pop_up) {
            container_pop_up.style.transition = "transform 0.2s";
            container_pop_up.style.transform = "scale(0)";
            container_pop_up.addEventListener("transitionend", () => {
                container_pop_up.style.display = "none";
            });
        }
    });
}
modify_contact(allContact, allContactButton);
