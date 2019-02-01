<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div id="menu">
    <h2>Basic</h2>
    <ul>
      <li> <a href="first.php">Basic</a> </li>
      <li> <a href="second.php">Array</a> </li>
      <li> <a href="third.php">Forms</a> </li>
      <li> <a href="fourth.php">Functions</a> </li>
      <li> <a href="fift.php">Calculator</a> </li>
    </ul>
    <h2>Database</h2>
    <ul>
      <li> <a href="books.php">Books</a> </li>
    </ul>
  </div>
  <div id="header">
    Welcome
    <?php
      session_start();
      if (isset($_SESSION['logged_in'])) {
        echo '<b>'.$_SESSION['username'].'</b>';
        echo '&nbsp;';
        echo '<a href="logout.php">Logout</a>';
      }
      else {
        echo '<b>Quest</b>';
        echo '&nbsp;';
        echo '<a href="login.php">Login</a>';
      }
    ?>
  </div>
  <div id="container">
