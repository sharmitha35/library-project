<html>
  <body>
    <?php
include("connection.php");
$bid=$_POST["bid"];
$bname=$_POST["bname"];
$bauthor=$_POST["bauthor"];
$bcategory=$_POST["bcategory"];
$bprice=$_POST["p"];
$bcopy=$_POST["copy"];
$sql = "INSERT INTO Book(book_id,book_name,book_author,book_category,book_price,book_quantity)VALUES('$bid','$bname','$bauthor','$bcategory','$bprice','$bcopy')";
if($mysqli->query($sql) === TRUE) {
  echo '<script>alert(" Book added successfully")</script>';
} else {
  echo "<table>";
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>
 </body>
</html>