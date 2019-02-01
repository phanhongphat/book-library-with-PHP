<?php include "menu.php"; ?>
<h1>Post example</h1>
<p>
  Array is named "$_POST". And you check the content
  with print_r-function.
</p>
<?php
print_r($_POST);
?>
<p>
  You can reach the values of the array
  like "$_POST['fname']"
</p>
<?php echo 'Hello '.$_POST['fname'].' '.$_POST['lname']; ?>
<?php include "footer.php"; ?>
