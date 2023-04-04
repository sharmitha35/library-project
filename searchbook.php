<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <html>
    <head>
        <style>
       table {
  border-collapse: collapse;
  width: 70%;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
        </head>
        <body class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid"> 
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="http://localhost/library/adminlogin.html">ADMINLOGIN</a></li>
            <li><a href="http://localhost/library/add.html">ADD BOOK</a></li>
            <li><a href="http://localhost/library/searchbook.html">SEARCH BOOK</a></li>
            <li><a href="http://localhost/library/disp.php">VIEW BOOK</a></li>
            <li><a href="http://localhost/library/disp1.php">ORDER DETAILS</a></li>
              </ul>
            </div>
          </nav>
            <body><center>
            <?php
                 include("connection.php");
                 $bookid=$_POST["bid"];
                 $sql="SELECT *FROM Book WHERE book_id=$bookid";
                 echo "BOOK DETAILS";
                 echo "<table >
                 <br><br><br><br>
                 <tr>
                 <th>BookId</th>
                 <th>BookName</th>
                 <th>BookAuthor</th>
                 <th>BookCategory</th>
                 <th>BookPrice</th>
                 <th>Quantity</th>
                 </tr>";
                 $result=$mysqli->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['book_id'] . "</td>";
        echo "<td>" . $rows['book_name'] . "</td>";
        echo "<td>" . $rows['book_author'] . "</td>";
        echo "<td>" . $rows['book_category'] . "</td>";
        echo "<td>" . $rows['book_price'] . "</td>";
        echo "<td>" . $rows['book_quantity'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$mysqli->error; 
}
$mysqli->close();
?>
</center>
        </body>
</html>