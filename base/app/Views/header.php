<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, Bootstrap.">
    <!-- <meta name="description" content="Bootstrap."> -->
    <link href="/cogip/base/public/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Cogip - Welcome</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/cogip/base/public/assets/js/menu_burger_header.js" defer></script>
</head>

<body>
    <header class="public__header">
        <nav>
            <button class="nav__icone" id="openBtn"><img class="nav__icone__open"
                    src="/cogip/base/public/assets/img/sidebar_open.png" alt="icone menu burger"></button>
            <h1>COGIP</h1>
            <ul class="nav__burger" id="sideNav">
                <img class="nav__burger__close" id="closeBtn" src="/cogip/base/public/assets/img/sidebar_close.png"
                    alt="icone menu burger">
                <li><a href="Home">Home</a></li>
                <li><a href="invoice">Invoices</a></li>
                <li><a href="company">Companies</a></li>
                <li><a href="contact">Contacts</a></li>
            </ul>
            <ul class="nav__bar">
                <li><a href="Home">Home</a></li>
                <li><a href="invoice">Invoices</a></li>
                <li><a href="company">Companies</a></li>
                <li><a href="contact">Contacts</a></li>
            </ul>
            <ul class="nav__login">
                <?php if (!isset($_SESSION['isConnected']) || $_SESSION['isConnected'] != 1) {
                    echo "<li><a href='signup'>signup</a></li>";
                    echo "<li><a href='login'>Login</a></li>";
                } else {
                    echo "<li><a href='logout'>Logout</a></li>";
                    if ($_SESSION['user']["role_id"] == 1 || $_SESSION['user']["role_id"] == 2) {
                        echo "<li><a href='dashboard'>dashboard</a></li>";
                    }
                }
                ?>
            </ul>
        </nav>
        <section class="container__info">
            <h2>MANAGE YOUR CUSTOMERS AND INVOICES EASLY</h2>
            <img class="container__info__img" src="/cogip/base/public/assets/img/kit-illustration.svg">
        </section>
        <img src="/cogip/base/public/assets/img/rectangle.svg">

    </header>