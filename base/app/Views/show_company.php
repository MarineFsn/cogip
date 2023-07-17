<?php
include "header.php";

// $companyController = new CompanyController($db);

// if (isset($_GET['companyId'])) {
//     $companyId = $_GET['companyId'];
//     $company = $companyController->getCompanyById($companyId);

//     $contactController = new ContactController($db);
//     $contacts = $contactController->getContactsByCompanyId($companyId);

//     $invoiceController = new invoiceController($db);
//     $invoices = $invoiceController->getInvoiceById($invoiceId);
// }
?>
<main>
    <section class="container__company">
        <div class="container__company__info">
            <div class="container__company__info__name">
                <h5><?php echo $company->name; ?></h5>
                <div class="container__company__info__name__yellow"></div>
            </div>
            <p>Name: <span><?php echo $company->name; ?></span></p>
            <p>TVA: <span><?php echo $company->tva; ?></span></p>
            <p>Country: <span><?php echo $company->country; ?></span></p>
            <p>Type: <span><?php echo $company->type; ?></span></p>
        </div>
    </section>
    <hr>
    <section class="container__people">
        <h5>Contact People</h5>
        <img class="container__people__svg" src="/cogip/base/public/assets/img/drawkit.svg" alt="illustration">
        <div class="container__people__info">
            <?php foreach ($contacts as $contact) : ?>
                <div class="container__people__info__card">
                    <div class="container__people__info__card__photo">
                        <img src="/cogip/base/public/assets/img/img-contact.jpg" alt="photo du contact">
                    </div>
                    <div class="container__people__info__card__name">
                        <p><?php echo $contact->name; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <hr>
    <section class="container__table">
        <h5>Last invoices</h5>
        <div class="table__container">
            <table class="table__container__info">
                <thead class="table__container__info__thead">
                    <tr class="table__container__info__thead__tr">
                        <th>Reference</th>
                        <th>Created at</th>
                        <th>Updated at </th>
                    </tr>
                </thead>
                <tbody class="table__container__info__tbody">
                    <?php foreach ($invoices as $invoice) : ?>
                        <tr class="table__container__info__tbody__tr">
                            <td><?php echo $invoice->ref; ?></td>
                            <td><?php echo $invoice->formatCreationDate(); ?></td>
                            <td> <?php echo $invoice->formatDueDate(); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<script src="/cogip/base/public/assets/js/invoices.js"></script>

<?php
include "footer.php";
?>