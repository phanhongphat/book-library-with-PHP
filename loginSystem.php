<?php
session_start();
//after succesfull login
//username='Ann' password='Ann123'
if ($_POST['username']==='Ann' && $_POST['passwd'] ==='Ann123') {
  $_SESSION['logged_in'] = true;
  $_SESSION['username'] = $_POST['username'];
  //redirect to welcome page
  header('Location: welcome.php');
  exit;
}
//after unsuccesfull login
else {
  //redirect to login page
  header('Location: login.php');
  exit;
}

?>
