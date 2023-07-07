<?php
include "header.php";
?>

<main>
    <section class="container__table">
        <h3>All contacts </h3>
        <div class="container__table__yellow__rectangle"> </div>
        <input type="text" id="searchbar" name="searchbar" placeholder="Search company name" required>

        <div class="table__container">
            <table class="table__container__info">
                <thead class="table__container__info__thead">
                    <tr class="table__container__info__thead__tr">

                        <th>Name</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="table__container__info__tbody">
                    <?php foreach ($contacts as $contact): ?>
                        <tr class="table__container__info__tbody__tr">

                            <td>
                                <?php echo $contact->name; ?>
                            </td>
                            <td>
                                <?php echo $contact->phone; ?>
                            </td>
                            <td>
                                <?php echo $contact->email; ?>
                            </td>
                            <td>
                                <?php echo $contact->company; ?>
                            </td>
                            <td>
                                <?php echo $contact->creation_date; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <script src="/projects/cogip/base/public/assets/js/invoices.js"></script>

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