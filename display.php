<!DOCTYPE html>
<html lang="en">
<head>
    
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
/* table,tr,td
{
border-style:solid;
border-width:2px;
border-color:pink;
border-collapse:collapse;

} */
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
<body >
<body class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            <li><a href="http://localhost/library/userlogin.html">USERLOGIN</a></li>
                <!-- <li><a href="http://localhost/library/form1.html">REGISTRATION</a></li> -->
                <li><a href="http://localhost/library/search.html">SEARCH BOOK</a></li>
                <li><a href="http://localhost/library/display.php">VIEW BOOK</a></li>
                <li><a href="http://localhost/library/bookupdate.html">PLACE ORDER</a></li>
                <li><a href="http://localhost/library/del.html">RETURN BOOK</a></li>
                <li><a href="http://localhost/library/pay.html">PAY FINE</a></li>
              </ul>
            </div>
          </nav>
    <center>
    <center><h1>BOOK DETAILS</h1></center>
    <div class="justify-content-center" style="width:50%;">
   <table class="table table-striped" style="width: 60%;background-color:rgb(29, 150, 172);" >
       
   </table>
</div>


<?php 
include("connection.php");
$query = "SELECT * FROM Book";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Book ID</font> </td> 
          <td> <font face="Arial">Book name</font> </td> 
          <td> <font face="Arial">Author</font> </td> 
          <td> <font face="Arial">Category</font> </td> 
          <td> <font face="Arial">Price</font> </td> 
          <td> <font face="Arial">Quantity</font> </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["book_id"];
        $field2name = $row["book_name"];
        $field3name = $row["book_author"];
        $field4name = $row["book_category"];
        $field5name = $row["book_price"];
        $field6name = $row["book_quantity"];
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                 
              </tr>';
    }
    $result->free();
} 
?>
</center>
</body>
</html>