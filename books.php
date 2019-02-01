
<?php include "menu.php";?>
<?php include "connection.php";?>
<h2>Books</h2>
<p>
<form class="" action="searchBooks.php"  method="post">
<label for="">Name of the book</label>
<input type="text" name="abook" value="">
<input type="submit"  name="" value="Search">
</form>
<div class="add"><a href="bookForm.php"><button>Add book</button></a></div>
</p>
<div class="show">
<table border=1>
<thead>
<tr>
<th> books_id</th><th>books_name</th><th>author</th><th>isbn</th><th>Update</th><th>Delete</th>
</tr>
</thead>
<tbody>
<?php $sql="SELECT * FROM books";
$books=$db->query($sql);
foreach($books as $row){
    echo '<tr>';
    echo '<td>'.$row['books_id'].'</td>';
    echo '<td>'.$row['books_name'].'</td>';
    echo '<td>'.$row['author'].'</td>';
    echo '<td>'.$row['isbn'].'</td>';

    //update button
    echo '<td><a href="updateBook.php?id=';
        echo $row['books_id'];
        echo '&name=';
        echo $row['books_name'];
        echo '&author=';
        echo $row['author'];
        echo '&isbn=';
        echo $row['isbn'];
    echo '"><button>Update</button></a> </td>';

    //delete button
   echo '<td><a href="deleteBook.php?id=';
        echo $row['books_id'];
        echo '&name=';
        echo $row['books_name'];
        echo '&author=';
        echo $row['author'];
        echo '&isbn=';
        echo $row['isbn'];
    echo '"><button>Delete</button></a> </td>';
    echo '</tr>';
}
?>
</tbody>
</table>
</div>
<?php include "footer.php";?>
