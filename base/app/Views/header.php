<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link href="/cogip/base/public/assets/css/main.css" rel="stylesheet" type="text/css">
    <meta name="description" content="Bootstrap.">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Cogip - Welcome</title>
    <meta name="description" content="Bootstrap.">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>
    <header class="public__header">

        <nav>
            <h1>COGIP</h1>
            <ul class="nav__bar">
                <li><a href="index.php?route=Home">Home</a></li>
                <li><a href="index.php?route=invoice">Invoices</a></li>
                <li><a href="index.php?route=company">Companies</a></li>
                <li><a href="index.php?route=contact">Contacts</a></li>
            </ul>
            <ul class="nav__login">
                <?php if (!isset($_SESSION['isConnected']) || $_SESSION['isConnected'] != 1) {
                    echo "<li><a href='index.php?route=signup'>signup</a></li>";
                    echo "<li><a href='index.php?route=login'>Login</a></li>";
                } else {
                    echo "<li><a href='index.php?route=logout'>Logout</a></li>";
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