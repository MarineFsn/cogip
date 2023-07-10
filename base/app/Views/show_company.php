<?php
include "header.php";
?>
<main>
    <section class="container__company">
        <div class="container__company__info">
            <div class="container__company__info__name">
                <h5>Nom de la compagnie</h5>
                <div class="container__company__info__name__yellow"></div>
            </div>
            <p>Name:</p>
            <p>TVA:</p>
            <p>Country:</p>
            <p>Type:</p>
        </div>
    </section>
    <hr>
    <section class="container__people">
        <h5>Contact People</h5>
        <div class="container__people__info">
            <div class="container__people__info__card">
                <div class="container__people__info__card__photo">
                    <img src="/cogip/base/public/assets/img/img-contact.jpg" alt="photo du contact">
                </div>
                <p>
                    Prénom Nom
                </p>
            </div>

            <img class="container__people__info__svg" src="/cogip/base/public/assets/img/drawkit.svg" alt="illustration">
        </div>
    </section>
    <hr>
    <section>
        <h5>Last invoices</h5>
    </section>
</main>
<script src="/cogip/base/public/assets/js/invoices.js"></script>

<?php
include "footer.php";
?>