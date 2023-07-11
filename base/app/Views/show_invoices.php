<?php
include "header.php";

$invoiceController = new invoiceController($db);

if (isset($_GET['invoiceId'])) {
    $invoiceId = $_GET['invoiceId'];
    $invoice = $invoiceController->getInvoiceById($invoiceId);
}
?>
<main>
    <section class="container__contact">
        <div class="container__contact__info">
            <div class="container__contact__info__name">
                <h5><?php echo $invoice->ref; ?></h5>
                <div class="container__contact__info__name__yellow"></div>
            </div>
            <p>Invoice number: <?php echo $invoice->ref; ?></p>
            <p>Due dates: <?php echo $invoice->update_date; ?></p>
            <p>Created at: <?php echo $invoice->creation_date; ?></p>
            <p>Company: <?php echo $invoice->company; ?></p>
        </div>
    </section>
</main>
<script src="/cogip/base/public/assets/js/invoices.js"></script>

<?php
include "footer.php";
?>