const allInvoices = document.querySelectorAll(".dynamic__dashboard__modify__invoices");
const allInvoicesButton = document.querySelectorAll(".modify-button-invoices");
// console.log(allInvoicesButton);
function modify_invoices(allInvoices:any,allInvoicesButton:any) {
    const invoicesPopUp = document.getElementById("invoices_pop_up") as HTMLElement;
    invoicesPopUp.style.display = "none";
    allInvoicesButton.forEach((element : any, event : Event)=>{
    const id = element.getAttribute("id");
    
    element.addEventListener("click", (event: Event) => {
        event.preventDefault();
        
        invoicesPopUp.style.display = "block";
        invoicesPopUp.style.transform = "scale(1)";

        // console.log(id);
        // console.log(element.parentElement);
        const idNumber = id.match(/\d+/)[0];
        // console.log(idNumber);
        const tr = document.getElementById(`modify-tr-invoices-${idNumber}`)
        // console.log(tr);
        // console.log(tr?.children);
        const invoiceNumber = tr?.children[2]?.textContent;
        const dueDates = tr?.children[3]?.textContent;
        const company = tr?.children[4]?.textContent;
        // const created_at = tr?.children[5]?.textContent;

        // console.log(invoiceNumber);
        // console.log(dueDates);
        // console.log(company);
        // console.log(created_at);

        const inputInvoiceNumber = document.querySelector(`input[name="invoice-number"]`) as HTMLInputElement;
        inputInvoiceNumber.setAttribute("value", `${invoiceNumber?.trim()}`);
        
        
        const inputDueDates = document.querySelector(`input[name="due-dates"]`) as HTMLInputElement;
        const formattedInputDueDates = String (dueDates?.split('/').reverse().join('-').replace(/\s/g, ''));
        inputDueDates.setAttribute("value", `${formattedInputDueDates}`);
        
        const inputCompany = document.querySelector(`input[name="company"]`) as HTMLInputElement;
        inputCompany.setAttribute("value", `${company?.trim()}`);
    })
    const buttonCancelInvoicesPopUp = document.getElementById("button_cancel_invoices_pop_up");
    buttonCancelInvoicesPopUp?.addEventListener("click", (event : Event)=>{
        event.preventDefault();
        stylingClosePopUp(invoicesPopUp);
    });
    const buttonSubmitInvoicesPopUp = document.getElementById("button_submit_invoices_pop_up");
    buttonSubmitInvoicesPopUp?.addEventListener("click", (event : Event)=>{
        event.preventDefault();
        // EXPORTER LES DONNEES !
        stylingClosePopUp(invoicesPopUp);
    });
    function stylingClosePopUp(container_pop_up : any) {
        container_pop_up.style.transition ="transform 0.2s";
        container_pop_up.style.transform = "scale(0)";
        container_pop_up.addEventListener("transitionend", () => {
        container_pop_up.style.display = "none";
        }); 
    }
})

}
    modify_invoices(allInvoices ,allInvoicesButton);

// -------------------------------------------------------------------COMPANY--------------------------------------------------------------------------------
    
    const allCompany = document.querySelectorAll(".dynamic__dashboard__modify__company");
    const allCompanyButton = document.querySelectorAll(".modify-button-company");
    function modify_company(allCompany : any, allCompanyButton : any) {
        const companyPopUp = document.getElementById("company_pop_up") as HTMLElement;
        companyPopUp.style.display = "none";
        allCompanyButton.forEach((element : any, event : Event)=>{
            const id = element.getAttribute("id");
            
            element.addEventListener("click", (event: Event) => {
                event.preventDefault();
                
                companyPopUp.style.display = "block";
                companyPopUp.style.transform = "scale(1)";
    
                // console.log(id);
                // console.log(element.parentElement);
                const idNumber = id.match(/\d+/)[0];
                // console.log(idNumber);
                const tr = document.getElementById(`modify-tr-company-${idNumber}`)
                // console.log(tr);
                // console.log(tr?.children);
                const companyName = tr?.children[2]?.textContent;
                const tva = tr?.children[3]?.textContent;
                const country = tr?.children[4]?.textContent;
                const type = tr?.children[5]?.textContent;
    
                // console.log(invoiceNumber);
                // console.log(dueDates);
                // console.log(company);
                // console.log(created_at);
    
                const inputCompanyName = document.querySelector(`input[name="company-name"]`) as HTMLInputElement;
                inputCompanyName.setAttribute("value", `${companyName?.trim()}`);
                
                
                const inputTva = document.querySelector(`input[name="tva"]`) as HTMLInputElement;
                inputTva.setAttribute("value", `${tva?.trim()}`);
                
                const inputCountry = document.querySelector(`input[name="country"]`) as HTMLInputElement;
                inputCountry.setAttribute("value", `${country?.trim()}`);
                
                const inputType = document.querySelector(`input[name="type"]`) as HTMLInputElement;
                inputType.setAttribute("value", `${type?.trim()}`);
            })
            const buttonCancelCompanyPopUp = document.getElementById("button_cancel_company_pop_up");
            buttonCancelCompanyPopUp?.addEventListener("click", (event : Event)=>{
                event.preventDefault();
                stylingClosePopUp(companyPopUp);
            });
            
            const buttonSubmitCompanyPopUp = document.getElementById("button_submit_company_pop_up");
            buttonSubmitCompanyPopUp?.addEventListener("click", (event : Event)=>{
                event.preventDefault();
                
                // EXPORTER LES DONNEES !
                stylingClosePopUp(companyPopUp);
            });
            function stylingClosePopUp(container_pop_up : any) {
                container_pop_up.style.transition ="transform 0.2s";
                container_pop_up.style.transform = "scale(0)";
                container_pop_up.addEventListener("transitionend", () => {
                container_pop_up.style.display = "none";
                }); 
            }
        })
    
        }
        modify_company(allCompany ,allCompanyButton);

// -------------------------------------------------------------------CONTACT--------------------------------------------------------------------------------
            
            const allContact = document.querySelectorAll(".dynamic__dashboard__modify__contact");
            const allContactButton = document.querySelectorAll(".modify-button-contact");
            function modify_contact(allContact : any, allContactButton : any) {
                const contactPopUp = document.getElementById("contact_pop_up") as HTMLElement;
                contactPopUp.style.display = "none";
                allContactButton.forEach((element : any, event : Event)=>{
                    const id = element.getAttribute("id");
                    
                    element.addEventListener("click", (event: Event) => {
                        event.preventDefault();
                        
                        contactPopUp.style.display = "block";
                        contactPopUp.style.transform = "scale(1)";
            
                        console.log(id);
                        console.log(element.parentElement);
                        const idNumber = id.match(/\d+/)[0];
                        console.log(idNumber);
                        const tr = document.getElementById(`modify-tr-contact-${idNumber}`)
                        console.log(tr);
                        console.log(tr?.children);
                        const contactName = tr?.children[2]?.textContent;
                        const mail = tr?.children[3]?.textContent;
                        const phone = tr?.children[4]?.textContent;
                        const company = tr?.children[5]?.textContent;
            
                        // console.log(invoiceNumber);
                        // console.log(dueDates);
                        // console.log(company);
                        // console.log(created_at);
            
                        const inputContactName = document.querySelector(`input[name="contact-name"]`) as HTMLInputElement;
                        inputContactName.setAttribute("value", `${contactName?.trim()}`);
                        
                        
                        const inputMail = document.querySelector(`input[name="mail"]`) as HTMLInputElement;
                        inputMail.setAttribute("value", `${mail?.trim()}`);
                        
                        const inputPhone = document.querySelector(`input[name="phone"]`) as HTMLInputElement;
                        inputPhone.setAttribute("value", `${phone?.trim()}`);
                        
                        const inputCompany = document.querySelector(`input[name="company"]`) as HTMLInputElement;
                        inputCompany.setAttribute("value", `${company?.trim()}`);
                    })
                    const buttonCancelContactPopUp = document.getElementById("button_cancel_contact_pop_up");
                    buttonCancelContactPopUp?.addEventListener("click", (event : Event)=>{
                        event.preventDefault();
                        stylingClosePopUp(contactPopUp);
                    });
                    
                    const buttonSubmitContactPopUp = document.getElementById("button_submit_contact_pop_up");
                    buttonSubmitContactPopUp?.addEventListener("click", (event : Event)=>{
                        event.preventDefault();
                        
                        // EXPORTER LES DONNEES !
                        stylingClosePopUp(contactPopUp);
                    });
                    function stylingClosePopUp(container_pop_up : any) {
                        container_pop_up.style.transition ="transform 0.2s";
                        container_pop_up.style.transform = "scale(0)";
                        container_pop_up.addEventListener("transitionend", () => {
                        container_pop_up.style.display = "none";
                        }); 
                    }
                })
            
                }
                modify_contact(allContact , allContactButton);