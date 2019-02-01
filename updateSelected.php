<?php include "menu.php"; ?>
<?php include "connection.php";?>

<?php 
print_r($_POST);

$stmt=$db->prepare("UPDATE books SET books_name=:naBook,author=auBook,isbn=isBook WHERE books_id=:idBook");
		$stmt->bindParam(':idBook',$b_id);
		$stmt->bindParam(':naBook',$b_name);
		$stmt->bindParam(':auBook',$b_author);
		$stmt->bindParam(':isBook',$b_isbn);
	$b_id=$_GET['b_id'];
	$b_name=$_GET['b_name'];
	$b_author=$_GET['b_author'];
	$b_isbn=$_GET['b_isbn'];

	$stmt->execute();
?>
<?php include "footer.php"; ?>