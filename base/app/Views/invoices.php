<?php
include "header.php";
include "../../Controllers/invoiceController.php";
?>

<main>
    <section class="container__table">
        <h3>Invoices</h3>
        <div class="container__table__yellow__rectangle"> </div>
        <input type="text" id="searchbar" name="searchbar" placeholder="Search company name" required>


        <div class="table__container">
            <table class="table__container__info">
                <thead class="table__container__info__thead">
                    <tr class="table__container__info__thead__tr">
                        <th>Invoice number</th>
                        <th>Due dates</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="table__container__info__tbody">
                    <?php foreach ($invoices as $invoice): ?>
                        <tr class="table__container__info__tbody__tr">

                            <td>
                                <?php echo $invoice->ref; ?>
                            </td>
                            <td>
                                <?php echo $invoice->due_dates; ?>
                            </td>
                            <td>
                                <?php echo $invoice->company; ?>
                            </td>
                            <td>
                                <?php echo $invoice->creation_date; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <script src="./base/public/assets/js/invoices.js"></script>

    </section>
    <section class="container__button">
        <button class="container__button__nav">
            < </button>
                <button>1</button>
                <button>2</button>
                <button>...</button>
                <button>9</button>
                <button>10</button>
                <button class="container__button__nav">></button>
    </section>
</main>
<?php
include "footer.php";
?>