<?php include "menu.php"; ?>
<?php include "connection.php";?>
<h1>Update BOOK</h1>
<p>
	<form class="" action="updateSelected.php" method="post">
		<input type="hidden" name="b_id" value="<?php echo $_GET['id']; ?>" required><br/>
		<label for="">books_name</label><br/>
		<input type="text" name="b_name" value="<?php echo $_GET['name']; ?>" required><br/>
		<label for="">author</label><br/>
		<input type="text" name="b_author" value="<?php echo $_GET['author']; ?>" required=><br/>
		<label for="">isbn</label><br/>
		<input type="text" name="b_isbn" value="<?php echo $_GET['isbn']; ?>" required><br/>
		<input type="submit" name="" value="Update">
	</form>
</p>

<?php
	print_r($_GET);
	
?>
<?php include "footer.php"; ?>