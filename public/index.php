<?php $project_name = 'groots' ?>
<?php $path_public = '/dist' ?>

<!doctype html>
<!--[if IE]><html class="ie" lang=""><![endif]-->
<!--[if !IE]> --><html lang="" class="flex"><!-- <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Groots | Homepage</title>

    <meta name="description" content="">
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $path_public ?>/css/gui.css" rel="preload">
    <link rel="stylesheet" href="<?= $path_public ?>/css/groots.css" rel="preload">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $path_public ?>/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $path_public ?>/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $path_public ?>/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $path_public ?>/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $path_public ?>/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $path_public ?>/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $path_public ?>/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $path_public ?>/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $path_public ?>/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?= $path_public ?>/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= $path_public ?>/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?= $path_public ?>/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?= $path_public ?>/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?= $path_public ?>/favicons/manifest.json">
    <link rel="mask-icon" href="<?= $path_public ?>/favicons/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $path_public ?>/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--Open Graph-->
    <meta property="og:locale" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <!--Twitter-->
    <meta name="twitter:card" content="" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
</head>
<body class="">

    <table class="header-page">
        <tr>
            <td>
                <img src="/dist/images/logo-page-header.png">
            </td>
            <td>
                <span>Catalogue complet</span>
                <span>version PDF</span>
            </td>
        </tr>
    </table>



    <table class="content__header">
        <tr>
            <td>
                Table des matières
            </td>
        </tr>
    </table>
    <?php for ($i=0; $i < 3; $i++) {
        ?>
        <table class="table-des-matieres">
            <thead>
                <td>
                    <span>Produits pour néons <span>(categorie)</span></span>
                </td>
            </thead>
            <tr>
                <td>
                    <span class="table-des-matieres__product-title">EGL</span>
                </td>
                <td>
                    120
                </td>
            </tr>
            <tr>
                <td>
                    <span class="table-des-matieres__product-title">Lorem ipsum dolor sit amet, consectetur</span>
                </td>
                <td>
                    124
                </td>
            </tr>
            <tr>
                <td>
                    <span class="table-des-matieres__product-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aliquid temporibus magnam tempore o</span>
                </td>
                <td>
                    124
                </td>
            </tr>
        </table>
        <?php
    } ?>


    <table class="content__header">
        <tr>
            <td>
                Produits pour néon <span>(categorie)</span>
            </td>
        </tr>
    </table>

    <?php for ($y=0; $y < 2; $y++) {
        ?>
        <table class="product__header-categorie">
            <tr>
                <td>
                    EGL <span>(sous- categorie)</span>
                </td>
                <td>
                    5 items
                </td>
            </tr>
            <tr>
                <td class="border" colspan="2">&nbsp;</td>
            </tr>
        </table>

        <table class="product">
            <thead>
                <td>
                    Image
                </td>
                <td>
                    Identification
                </td>
                <td colspan="3">
                    Informations supplémentaires
                </td>
            </thead>
            <tr>
                <td class="border" colspan="5">&nbsp;</td>
            </tr>
            <?php for ($i=0; $i < 5; $i++) {
                ?>
                <tr>
                    <td>
                        <img src="/dist/images/no-image.png">
                    </td>
                    <td>
                        <span class="product__name">Argon - Vitre LEAD </span>
                        <span class="product__description">0.9L ARGON SOFT GLASS LEAD</span>
                        <span class="product__code">EGL.413001</span>
                    </td>
                    <td>
                        <span class="product__infos-title">Quatité</span>
                        <span class="product__infos-value">0.9L</span>
                    </td>
                    <td>
                        <span class="product__infos-title">Voltage</span>
                        <span class="product__infos-value">120V</span>
                    </td>
                    <td>
                        <span class="product__infos-title">Autre</span>
                        <span class="product__infos-value">Lorem ipsum sit dolor amet</span>
                    </td>
                </tr>
                <tr>
                    <td class="border" colspan="5">&nbsp;</td>
                </tr>
                <?php
            } ?>
        </table>
        <?php
    } ?>


    <table class="footer-page">
        <tr>
            <td>
                Table des matières <span>></span> Produits pour néon
            </td>
            <td>
                124
            </td>
        </tr>
    </table>



    <script src="<?= $path_public ?>/js/vendor.js"></script>
    <script src="<?= $path_public ?>/js/<?= $project_name ?>.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
    </html>
