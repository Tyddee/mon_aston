<?php 

include __DIR__ . "/../config/config.php"

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
        <title><?php echo $title; ?> </title>
    </head>
<body>
    <div id="bloc_page">
        <header>
            <div class="logo pull-left">
                <img src="images/do.jpg">
            </div>

            <div class="slogan pull-left">
                <h1>
                    Do It Yourself, pour cuisiner pas &agrave pas...<br /> 
                    Enjoy together
                </h1>
            </div>

            <ul class="social">
                <li class="iconfb"><img src="images/iconfb.png"></li>
                <li class="icontweet"><img src="images/icontweet.png"></li>
                <li class="icongogol"><img src="images/icongogol.png"></li>
            </ul>

            <nav>
                <ul>
                    <li><a href="<?php echo SITE_PATH . '/'; ?>">Accueil</a></li>
                    <li><a href="<?php echo SITE_PATH . '/bien_debuter.php'; ?>">Bien débuter</a></li>
                    <li><a href="#">Recettes et tutos</a></li>
                    <li><a href="#">Boutique et livraison</a></li>
                    <li><a href="#">Cours à domicile</a></li>
                </ul>
            </nav>
        </header>