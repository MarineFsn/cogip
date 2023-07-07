<?php
include "header.php";
?>

<main>
    <section class="container__table">
        <h3>All companies</h3>
        <div class="container__table__yellow__rectangle"></div>
        <input type="text" id="searchbar" name="searchbar" placeholder="Search company name" required>

        <?php

        $companyController = new CompanyController($db);
        $companies = $companyController->getCompanies();
        usort($companies, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });
        ?>

        <div class="table__container">
            <table class="table__container__info">
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

                            <td><a href="show_company.php?company_id=<?php echo $company->id; ?>"><?php echo $company->name; ?></a></td>
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
                                <?php echo $company->creation_date; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="container__button">
        <button class="container__button__nav">
            << /button>
                <button>1</button>
                <button>2</button>
                <button>...</button>
                <button>9</button>
                <button>10</button>
                <button class="container__button__nav">></button>
    </section>
    <script src="/cogip/base/public/assets/js/invoices.js"></script>
</main>

<?php
include "footer.php";
?>