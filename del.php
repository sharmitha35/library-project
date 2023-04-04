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
$return_date=$_POST["return_date"];
$sts="No fine";
$fine=0;
$fd=0;
$lastt=0;
$sql2 = "INSERT INTO t3(id,name,book_name,return_date,status)VALUES('$id','$name','$book_name','$return_date','$sts')";
$mysqli->query($sql2);
$sql6="SELECT return_date FROM t3 where name='$name' ";
$r=$mysqli->query($sql6);
$rr=$r->fetch_assoc();
$lastt=$rr["return_date"];
$sql3="SELECT order_date FROM t2 where name='$name'";
$r1 = $mysqli->query($sql3);
$row1 = $r1->fetch_assoc();
$fd=$row1["order_date"];
foreach($mysqli->query("SELECT DATEDIFF('$lastt','$fd') as date_difference") as $row) {

    // echo $row['date_difference']. "<br>" ;
    if($row['date_difference']>10){
        $fine=($row['date_difference']-10)*10;
        echo "Fine amount:".$fine."<br>";
        echo '<script>alert(" you have to pay fine")</script>';
    }
    else{
        echo "No fine";
    }
}



$mysqli->close();
?>