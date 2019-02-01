<?php include "menu.php"; ?>
<?php include "connection.php";?>

<?php
	$sql="select max(books_id) from books";
	$result=$db->query($sql);
	$max = $result->fetch(PDO::FETCH_NUM);
	//echo 'Max='.$max;
	$max++;
?>

<h1> Add a book </h1>
<p>
	<form class="" action="addBook.php" method="post">
		<label for="">books_id</label><br/>
		<input type="number" name="b_id" value="<?php echo $max; ?>" required><br/>
		<label for="">books_name</label><br/>
		<input type="text" name="b_name" required><br/>
		<label for="">author</label><br/>
		<input type="text" name="b_author" required=><br/>
		<label for="">isbn</label><br/>
		<input type="text" name="b_isbn" required><br/>
		<input type="submit" name="" value="Add">
	</form>
</p>
<?php include "footer.php"; ?>