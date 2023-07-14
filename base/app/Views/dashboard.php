<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/cogip/base/public/assets/css/main.css" rel="stylesheet" type="text/css">
    <script src="/cogip/base/public/assets/js/dashboard.js" defer></script>

</head>

<body class="dashboard">
    <header class="dashboard__header">
        <div class="dashboard__header__first__part">
            <div class="dashboard__header__first__part__title">
                <h1>Dashboard</h1>
                <p>dashboard/</p>
            </div>
            <img src="/cogip/base/public/assets/img/image-dashboard.svg">

        </div>
        <div class="dashboard__header__info">
            <div class="dashboard__header__info__message">
                <h2>Welcome back Henry!</h2>
                <p>You can here add an invoice, a company and some contacts</p>
            </div>

        </div>
    </header>
    <main>
        <section class="dashboard__sidebar">

            <div class="dashboard__sidebar__burger"></div>

            <div class="dashboard__sidebar__menu">
                <img src="/cogip/base/public/assets/img/img-contact.jpg">
                <p>Prenom</p>
                <p>Nom</p>
                <hr>
                <nav>
                    <ul>
                        <li><img><a href="" class="dashboard__sidebar__menu__dashboard">Dashboard</a></li>
                        <li><img><a href="" class="dashboard__sidebar__menu__invoice">Invoices</a></li>
                        <li><img><a href="" class="dashboard__sidebar__menu__company">Companies</a></li>
                        <li><img><a href="" class="dashboard__sidebar__menu__contact">Contacts</a></li>
                    </ul>
                </nav>
                <div>
                    <img>
                    <a>Logout</a>
                </div>
            </div>

        </section>
        <artcile class="container__main">
            <section class="dashboard__container__statistics">
                <h3>Statistics</h3>
            </section>

            <section class="dashboard__container__invoices">
                <h3>Last invoices</h3>
                <hr>
            </section>
            <section class="dashboard__container__contacts">
                <h3>Last contacts</h3>
                <hr>
            </section>

            <section class="dashboard__container__company">
                <h3>Last company</h3>
                <hr>
            </section>
        </artcile>
        <section class="dashboard__container__dynamic"></section>
    </main>



</body>

</html>