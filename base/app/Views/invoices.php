<?php
include "header.php";
include "../../Controllers/invoiceController.php";
?>

<main>
    <section class="container__table">
        <h3>All invoices </h3>
        <div class="container__table__yellow__rectangle">
        <input type="text" id="searchbar" name="searchbar" placeholder="Search company" required>
    
            <?php
                $controllercontact = new invoiceController();
                $invoices = $controllercontact->getinvoices();
            ?>
            <table class="table__info">
                <thead class="table__info__thead">
                    <tr class="table__info__thead__tr">
                        <th>Invoice number</th>
                        <th>Due dates</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="table__info__tbody">
                    <?php
                        foreach ($invoices as $invoice) {
                            echo "<td>" . $invoice->ref;
                            echo "<td>" . $company->update_date ;
                            echo "<td>" . $invoice->company;
                            echo "<td>" . $invoice->created_at;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<script src="/projects/cogip/base/public/assets/js/invoices.js"></script>
<?php
include "footer.php";
?>