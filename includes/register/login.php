<?php

session_start();
include_once 'dbconnect.php';
if ( isset($_SESSION['login'])!="" ) {
  header("Location: tsp-admin.php");
  exit;
 }
 if (isset($_POST['submit-auth'])) { // Отлавливаем нажатие кнопки "Отправить"
if (empty($_POST['login-auth'])) { // Если поле логин пустое
echo '<script>alert("Поле логин не заполненно");</script>'; // То выводим сообщение об ошибке
} elseif (empty($_POST['pass-auth'])) {
echo '<script>alert("Поле пароль не заполненно");</script>'; // То выводим сообщение об ошибке
} else  {    
$login = $_POST['login-auth']; // Записываем логин в переменную 
$pass = $_POST['pass-auth']; // Записываем пароль в переменную  
// $password = hash('sha512', $pass); 
echo     $login.' pass- '  . $pass;
$query = mysqli_query($con, "SELECT id, role FROM users WHERE `login`= '$login' AND `password`= '$pass'"); // Формируем переменную с запросом к базе данных с проверкой пользователя
$result = mysqli_fetch_array($query); // Формируем переменную с исполнением запроса к БД 
$count = mysqli_num_rows($query); 

if (empty($result['id'])) 
{
    $errTyp = "danger";
$errMSG = "Wrong Credentials, Try again..."; 
}
else 
{
$_SESSION['pass'] = $pass; 
$_SESSION['login'] = $login; 
$_SESSION['id'] = $result['id'];
$_SESSION['role'] = $result['role']; 
header("Location: ../../tsp-admin.php");
  exit;
}     
}       
}

include_once 'logout.php';
 
?>

<!DOCTYPE html>
<html lang="en">
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
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>

<div class="container">

 <div id="login-form">
    <form id="auth" method="post" autocomplete="off">
    
     <div class=" col-lg-4 col-lg-offset-4 col-sm-12">
        
         <div class="form-group">
             <h2 class="">Sign In.</h2>
            </div>
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
             <hr />
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="text" name="login-auth" class="form-control" placeholder="Enter Username" required />
                </div>
            </div>         

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass-auth" class="form-control" placeholder="Enter Password" required />
                </div>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="submit-auth">Sign In</button>
            </div>
            
<!--             <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="register.php">Sign up Here...</a>
            </div> -->
        
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>

