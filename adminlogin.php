<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin Login Page</title>
</head>
 
<body>
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
    <?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($mysqli, $username);  
        $password = mysqli_real_escape_string($mysqli, $password);  
      
        $sql = "select *from adminlogin where username = '$username' and password = '$password'";  
        $result = mysqli_query($mysqli, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?> 
 <center><img src="./LIB1.png"></center> 
</body>
</html> 