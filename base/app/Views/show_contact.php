<?php
include "header.php";

// $contactController = new ContactController($db);

// if (isset($_GET['contactId'])) {
//     $contactId = $_GET['contactId'];
//     $contact = $contactController->getContactById($contactId);
// }
?>

<main>
    <section class="container__contact">
        <div class="container__contact__info">
            <div class="container__contact__info__name">
                <h5><?php echo $contact->name; ?></h5>
                <div class="container__contact__info__name__yellow"></div>
            </div>
            <p>Contact: <?php echo $contact->name; ?></p>
            <p>Phone: <?php echo $contact->phone; ?></p>
            <p>Mail: <?php echo $contact->email; ?></p>
            <p>Company: <?php echo $contact->company; ?></p>
        </div>
        <div class="container__contact__photo">
            <img src="/cogip/base/public/assets/img/img-contact.jpg" alt="photo du contact">
        </div>
    </section>
</main>

<script src="/cogip/base/public/assets/js/invoices.js"></script>

<?php
include "footer.php";
?>