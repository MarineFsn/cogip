const allInvoices = document.querySelectorAll(".dynamic__dashboard__modify__invoices");
const allInvoicesButton = document.querySelectorAll(".modify-button-invoices");
// console.log(allInvoicesButton);
function modify_invoices(allInvoices:any,allInvoicesButton:any) {
    // allinvoices.forEach(){}
    
    const newInvoices = document.getElementById("new__invoices") as HTMLElement;
    newInvoices.insertAdjacentHTML("afterbegin", `
    <div class="container__dynamic__dashboard__invoices__pop__up container__dynamic__dashboard__pop__up" id="invoices_pop_up">
        <form class="container__dynamic__dashboard__invoices__pop__up__form container__dynamic__dashboard__pop__up__form">
            <div>
                <label for="invoice-number">Invoice number : </label>
                <input name="invoice-number" type="text" name="invoice-number" id="">
            </div>
            <div>
                <label for="due-dates">Due dates : </label>
                <input name="due-dates" type="date" id="">
            </div>
            <div>
                <label for="company">Company : </label>
                <input name="company" type="text" id="">
            </div>
            <div>
                <label for="created-at">Created at : </label>
                <input name="created-at" type="date" id="">
            </div>
            <input type="submit" value="Submit" id="button_submit_invoices_pop_up">
            <input type="submit" value="Cancel" id="button_cancel_invoices_pop_up">
        </form>
    </div>
    `);
    const invoicesPopUp = document.getElementById("invoices_pop_up") as HTMLElement;
    invoicesPopUp.style.display = "none";
    allInvoicesButton.forEach((element : any, event : Event)=>{
        const id = element.getAttribute("id");
        
        element.addEventListener("click", (event: Event) => {
            event.preventDefault();
            
            invoicesPopUp.style.display = "block";

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
            const created_at = tr?.children[5]?.textContent;

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
            
            const inputCreatedDates = document.querySelector(`input[name="created-at"]`) as HTMLInputElement;
            const formattedInputCreatedDates = String (created_at?.split('/').reverse().join('-').replace(/\s/g, ''));
            inputCreatedDates.setAttribute("value", `${formattedInputCreatedDates}`);
            
            // placeholder="invoice-number"


        })
        const buttonCancelInvoicesPopUp = document.getElementById("button_cancel_invoices_pop_up");
        buttonCancelInvoicesPopUp?.addEventListener("click", (event : Event)=>{
            event.preventDefault();
            // EXPORTER LES DONNEES !
            invoicesPopUp.style.display = "none";
        });
        
        const buttonSubmitInvoicesPopUp = document.getElementById("button_submit_invoices_pop_up");
        buttonSubmitInvoicesPopUp?.addEventListener("click", (event : Event)=>{
            event.preventDefault();
            
            // EXPORTER LES DONNEES !
            invoicesPopUp.style.display = "none";
        });
    })

    }
    function modifySQL() {
        
        class Invoices extends Model {}
        Invoices.init({ 
            invoice_number : DataTypes.STRING,
            due-dates: DataTypes.STRING,
            company: DataTypes.STRING,
            created_at: DataTypes.STRING,
        }, { sequelize, modelName: 'invoices' });

    }
    modify_invoices(allInvoices ,allInvoicesButton);