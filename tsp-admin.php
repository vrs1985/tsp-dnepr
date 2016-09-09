<?php

session_start();
include_once 'includes/register/dbconnect.php';
if ( !isset($_SESSION['login'])!="" ) {
  header("Location: includes/register/login.php");
  exit;
 }
 include_once 'includes/register/logout.php';

if (isset($_POST['btn-addgrocery-submit'])) {
    $article = $_POST['article'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['uploadData']['name'];
    $repository = $_POST['repository'];
    $price = $_POST['price'];
    $url = 'uploads/'.$image;
    $query = "INSERT INTO `grocery`(`article`, `name`, `description`, `repository`, `price`, `url`) VALUES ('$article', '$name', '$description', '$repository', '$price', '$url')"; 
    $result = mysqli_query($con, $query); 

    if($result == 1){
    $errTyp = "success";
    $errMSG = "Вы успешно добавили товар в Вашу базу";
  }else{
    $errTyp = "warning";
    $errMSG = "Произошла ошибка, проверьте корректность введеных полей...";
}

// Каталог, в который мы будем принимать файл:
$uploaddir = './uploads/';
$uploadfile = $uploaddir.basename($_FILES['uploadData']['name']);

// Копируем файл из каталога для временного хранения файлов:
copy($_FILES['uploadData']['tmp_name'], $uploadfile);

} 

 ?>

<!DOCTYPE html>
<html lang="en" ng-app='dashboardApp'>
<head>
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
    <!--  Load libraries Angular2.0 -->

    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="content">
    <header style="height:100px; background-color: #3d3d3d; color:#fff">
                    <div class="row">
                        <div class="col-lg-3 admin-logo">
                            <img src="img/logo.png" alt="ref-service">
                            <!-- <span class="logoSentence">ООО <br> Реф-Сервис</span> -->
                        </div>
                        <div class="col-lg-5 col-lg-offset-4 admin-menu">
                        <div class="row">
                        <div class="col-lg-5 col-lg-offset-7 col-sm-5">
                             <?php 
            
                if (isset($_SESSION['login']) && isset($_SESSION['id'])) // если в сессии загружены логин и id
                {
                    $msg = $_SESSION['login'];
                $btn = '<a href="index.php?exit"><button type="button" class=" btn-login btn btn-danger uppercase">Exit</button></a>'; // Выводим нашу ссылку выхода
                } 

                 if (!isset($_SESSION['login']) || !isset($_SESSION['id']) ) // если в сессии не загружены логин и id
                {
                echo '<a href="includes/register/login.php"><button type="button" class=" btn-login btn btn-danger uppercase">login</button></a>'; // Выводим нашу ссылку регистрации
                } 
            if ( isset($msg) ) { ?>
            <span class="welcome">Welcome: <strong class="capitalLetter">
            <?php echo $msg.' '.$btn; }
            ?>
            </strong>
            </span>
                        </div>
                    </div>
                                    <div class="row">
                            <div class="col-lg-12">
                            <span id="navIcon"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
                            <ul class="nav nav-tabs capitalLetter">
                              <li class=""><a href="index.php">Главная</a></li>
                              <li><a href="goods.php">Товары</a></li>
                              <li><a href="services.php">Услуги</a></li>
                              <li><a href="catalogs.php">Каталоги</a></li>
                              <li><a href="contacts.php">Контакты</a></li>
                            </ul>
                        </div>
                        </div>

                    </div>
                        </div>
    </header>
<!-- <div class="container"> -->
    <div class="row" style="margin-right: 0">
        <div class="col-lg-2">
        <ul class="adm-nav capitalLetter">
            <li>Товары</li>
            <ul>
                <li><a href="#">Загрузить</a></li>
                <li><a href="#">Редактировать</a></li>
                <li><a href="#">Удалить</a></li>
            </ul>
            <li>Услуги</li>
            <ul>
                <li><a href="#">Загрузить</a></li>
                <li><a href="#">Редактировать</a></li>
                <li><a href="#">Удалить</a></li>
            </ul>
            <li>Каталоги</li>
            <li>Прочее</li>
        </ul>

    </div>
    <div class="col-lg-10 work-spaces">
        <div class="row">
            <div class="col-lg-12 edit-section"> <h4 class="center capitalLetter">Добавить Товар</h4> </div>
        </div>
        <div class="row">
            <div class="col-lg-12 edit-section"> 

                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <?php
                   if ( isset($errMSG) ) {
                    
                    ?>
                    <div class="form-group">
                             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                                </div>
                             </div>
                                <?php
                   }
                   ?>
                    <div class="form-group">
                        <label for="article" class="col-sm-2 control-label">Артикул:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="article" id="article" placeholder="Артикул" value="" tabindex="1" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Наименование:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Наименование товара" value="" tabindex="1" />
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Описание:</label>
                        <div class="col-sm-10">
                        <textarea cols="40" rows="3" name="description" placeholder="Описание" class="form-control" id="textarea"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Наличие:</label>
                        <div class="col-sm-10">
                        <label for="repository" class="control-label">В наличии</label>
                        <input type="radio" name="repository" id="radio-choice-1" tabindex="2" value="1" />
                        <label for="repository">Отсутствует</label>
                        <input type="radio" name="repository" id="radio-choice-2" tabindex="3" value="0" />
                    </div>
                    </div>
                     <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Цена:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" id="price" placeholder="Цена" value="" tabindex="1" />
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="file" name="uploadData" id="uploadData">
                    </div>
                    </div>
                
                    <div class="form-group">
                        <p class="input-btn center">
                            <input type="reset" class="btn btn-danger"  value="Очистить">
                            <input type="submit" class="btn btn-primary" name="btn-addgrocery-submit" value="Отправить">
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 edit-section">  
            <?php
                   if ( isset($infomsg) ) {
                     echo $infomsg; } ?>
                    
            </div>
        </div>
    </div>
</div>
   <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- </div> -->
</body>
</html>