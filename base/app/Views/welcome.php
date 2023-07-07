<?php
include "header.php";
?>

<main>
    <p>welcome</p>
    <section class="container">
        <img src="assets/img/Illustration.png" alt="cogip logo" class="illustration">
        <h1>Welcome to
            <?php echo $name ?>
        </h1>
        <!-- <p>This base project is provided by BeCode</p>
        <ul>
            <li><a href="https://github.com/bramus/router" target="_blank">Bramus/Router</a></li>
            <li><a href="https://github.com/filp/whoops" target="_blank">Flip/Whoops</a></li>
            <li>dd() function</li>
            <li>redirect() function</li>
        </ul> -->
        <section class="container__table">
        <h3>Last invoices </h3>
        <div class="container__table__yellow__rectangle">


        <br>
            <?php
                // $controllercontact = new invoiceController();
                // $invoices = $controllercontact->getinvoices();
            ?>
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
                    <tr class="table__container__info__thead__tr">
                        <th>Invoice number</th>
                        <th>Due dates</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                    <tr class="table__container__info__thead__tr">
                        <th>Invoice number</th>
                        <th>Due dates</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                    <tr class="table__container__info__thead__tr">
                        <th>Invoice number</th>
                        <th>Due dates</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                    <?php
                        // foreach ($invoices as $invoice) {
                        //     echo "<td>" . $invoice->ref;
                        //     echo "<td>" . $invoice->update_date ;
                        //     echo "<td>" . $invoice->company;
                        //     echo "<td>" . $invoice->creation_date;
                        // }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    </section>
</main>
<?php
include "footer.php";
?>