<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Base  -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- CSS  -->
    <link href="css/min.css" type="text/css" rel="stylesheet"/>

    <!-- Meta generales -->
    <link rel="icon" type="image/x-icon" href="/favicon.png"/>
    <meta name="Author" content="Pierre PEREZ and Loïc TORO"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <!-- Title  -->
    <title>ifacebook</title>
</head>

<body>
<noscript>
    Attention, ne pas activer le JavaScript peut amener à des problèmes de visibilité sur ce site.
</noscript>

<div class="container-fluid">
    <div class="hidden-lg hidden-md hidden-sm">
        <span id="menu-mobile-toggle">&#9776; Menu</span>
    </div>
    <div class="row">
        <nav id="nav-total" class="col-sm-3 col-lg-2 navbar">
            <div class="container-fluid">
                <div class="hidden-lg hidden-sm hidden-md" id="decalage-mobile"></div>
                <a href="?action=index">
                    <img src="images/favicon.png" height="325" width="325" class="img-logo text-center"
                         alt="logo du site">
                    <h1 class="sr-only">ifacebook</h1>
                    <p class="h1">acebook</p>
                </a>
                <h2 class="sr-only">Navigation</h2>
                <?php
                if (\lib\core\Context::getSessionAttribute('id')) {
                    include('menu.php');
                } else {
                    include('menuOut.php');
                }
                ?>
            </div>
        </nav>
        <section class="col-sm-9 col-lg-10 col-lg-offset-2 col-sm-offset-3">
            <?php include('notification.php'); ?>
            <div class="well wrapper-well">
                <div id="principale-well">
                    <?php include($template_view); ?>
                </div>
                <div id="spinner"></div>
            </div>
        </section>
    </div>
</div>

<footer>
    <?php include('footer.php'); ?>
</footer>

<div class="hidden">
    <?php include('modalChat.php'); ?>
</div>
<!-- Scripts -->
<script src="js/min.js"></script>
</body>
</html>
