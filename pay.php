<html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      
    </head>
    <body class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              
              <ul class="nav navbar-nav">
                <li><a href="http://localhost/library/userlogin.html">USERLOGIN</a></li>
                <li><a href="http://localhost/library/search.html">SEARCH BOOK</a></li>
                <li><a href="http://localhost/library/display.php">VIEW BOOK</a></li>
                <li><a href="http://localhost/library/bookupdate.html">PLACE ORDER</a></li>
                <li><a href="http://localhost/library/del.html">RETURN BOOK</a></li>
                <li><a href="http://localhost/library/pay.html">PAY FINE</a></li>
              </ul>
            </div>
        </nav>
        <?php
include("connection.php");
$id=$_POST["id"];
$name=$_POST["name"];
$book_name=$_POST["book_name"];
$sts='Paid';

$sql2="UPDATE book SET book_quantity = book_quantity + 1 WHERE book_name = '$book_name'";

$sql1="UPDATE t3 SET status = '$sts' WHERE name = '$name'";

$sql = "DELETE FROM t2 WHERE book_name = '$book_name'";

if($mysqli->query($sql2) === TRUE) {
    echo '<script>alert(" updated successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql2 . "<br>" . $mysqli->error;
  }
  
  if($mysqli->query($sql1) === TRUE) {
    echo '<script>alert(" Updated successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql1 . "<br>" . $mysqli->error;
  }
  if($mysqli->query($sql) === TRUE) {
    echo '<script>alert(" Book deleted successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
  $mysqli->close();
?>