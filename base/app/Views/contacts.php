<?php
include "header.php";
?>

<main>
    <section class="container__table">
        <h3>All contacts </h3>
        <div class="container__table__yellow__rectangle"> </div>

        <?php
        $controller = new ContactController($db);
        $contacts = $controller->getContacts();

        usort($contacts, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });
        ?>
        <div class="table__container">
            <table class="table__container__info  table table-striped" id="myTable">
                <thead class="table__container__info__thead">
                    <tr class="table__container__info__thead__tr">

                        <th>Name</th>
                        <th>Mail</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody class="table__container__info__tbody">
                    <?php foreach ($contacts as $contact): ?>
                        <tr class="table__container__info__tbody__tr">


                            <td><a href="index.php?route=contact&contactId=<?php echo $contact->id; ?>"><?php echo $contact->name; ?></td>
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
                                <?php echo $contact->formatCreationDate(); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>




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