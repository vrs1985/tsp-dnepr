<?php

session_start();
include_once 'includes/register/dbconnect.php';

 include_once 'includes/register/logout.php';
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
<!-- <base href="/"> -->
    <meta charset="UTF-8">
    <title>ООО Реф-Сервис</title>
    <meta name="description" content="Реф-сервис, автохолод, промхолод, ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Play&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>
    <script type="text/javascript" src="app/controllers.js"></script>  
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="content">
    <header>
                    <div class="row">
                        <div class="col-lg-3 logo">
                            <img src="img/logo.png" alt="ref-service">
                            <span class="logoSentence">ООО <br> Реф-Сервис</span>
                        </div>
                        <div class="col-lg-6 col-lg-offset-3 nav-menu">
                            <span id="navIcon"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
                            <ul class="nav nav-tabs capitalLetter">
                              <li class=""><a href="index.php">Главная</a></li>
                              <li><a href="goods.php">Товары</a></li>
                              <li><a href="services.php">Услуги</a></li>
                              <li><a href="catalogs.php">Каталоги</a></li>
                              <li><a href="contacts.php">Контакты</a></li>
                              <?php 
                               if (isset($_SESSION['login']) && isset($_SESSION['id'])) // если в сессии загружены логин и id
                                {echo '<li><a href="tsp-admin.php">Админка</a></li>';
                                }
                              ?>
                            </ul>
                        </div>
                    </div>
    </header>


