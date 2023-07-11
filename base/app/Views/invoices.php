<?php
include "header.php";
?>

<main>
    <section class="container__table">
        <h3>Invoices</h3>
        <div class="container__table__yellow__rectangle"> </div>

        <div class="table__container">
            <table class="table__container__info table table-striped" id="myTable">
                <thead class="table__container__info__thead">
                    <tr class="table__container__info__thead__tr">
                        <th>Invoice number</th>
                        <th>Due dates</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="table__container__info__tbody">
                    <?php foreach ($invoices as $invoice) : ?>
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
        <script>

            $(document).ready(function() {
                $('#myTable').dataTable({
                    "initComplete": function(settings, json) {
                        $('input').attr("placeholder", "Search company name...");
                        $('input').attr("class", "input_search");
                        $('label').attr("class", "label_search");
                    }
                });


                const label = document.querySelector(".dataTables_length");
                label.remove();

                const divInfo = document.querySelector(".dataTables_info");
                divInfo.remove();

                var labelElement = document.querySelector('.dataTables_filter label');
                var textElement = labelElement.querySelector('span');
                textElement.textContent = '';

            });
        </script>
        <script src="/cogip/base/public/assets/js/invoices.js"></script>

</main>
<?php
include "footer.php";
?>