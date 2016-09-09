<?php 


if (isset($_GET['exit'])) { 
unset($_SESSION['pass']); 
unset($_SESSION['login']); 
unset($_SESSION['id']); 
unset($_SESSION['role']); 
 header("Location: ../../index.php");
  exit;
} 
  ?>