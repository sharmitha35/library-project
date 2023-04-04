
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
                <li><a href="http://localhost/library/adminlogin.html">ADMINLOGIN</a></li>
            <li><a href="http://localhost/library/add.html">ADD BOOK</a></li>
            <li><a href="http://localhost/library/searchbook.html">SEARCH BOOK</a></li>
            <li><a href="http://localhost/library/disp.php">VIEW BOOK</a></li>
            <li><a href="http://localhost/library/disp1.php">ORDER DETAILS</a></li>
              </ul>
            </div>
          </nav>
    <center>
    <center><h1>ORDER DETAILS</h1></center>
    <div class="justify-content-center" style="width:50%;">
   <table class="table table-striped" style="width: 60%;background-color:rgb(29, 150, 172);" >
       
   </table>
</div>
<?php 
include("connection.php");
$query = "SELECT * FROM t3";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"> ID</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Bookname</font> </td> 
          <td> <font face="Arial">returndate</font> </td>
          <td> <font face="Arial">status</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["name"];
        $field4name = $row["book_name"];
        $field5name = $row["return_date"];
        $field6name = $row["status"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
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