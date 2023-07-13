<?php
include "header.php";
?>

<main>
    <section class="container__table">
        <h3>All companies</h3>
        <div class="container__table__yellow__rectangle"></div>


        <?php

        $companyController = new CompanyController($db);
        $companies = $companyController->getCompanies();
        usort($companies, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });
        ?>

        <div class="table__container">
            <table class="table__container__info  table table-striped" id="myTable">
                <thead class="table__container__info__thead">
                    <tr class="table__container__info__thead__tr">
                        <th>Name</th>
                        <th>TVA</th>
                        <th>Country</th>
                        <th>Type</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="table__container__info__tbody">
                    <?php foreach ($companies as $company) : ?>
                        <tr class="table__container__info__tbody__tr">

                            <td><a href="company&companyId=<?php echo $company->id; ?>"><?php echo $company->name; ?></a></td>
                            <td>
                                <?php echo $company->tva; ?>
                            </td>
                            <td>
                                <?php echo $company->country; ?>
                            </td>
                            <td>
                                <?php echo $company->type; ?>
                            </td>
                            <td>
                                <?php echo $company->formatCreationDate(); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
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