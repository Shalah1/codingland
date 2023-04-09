<?php
  
   session_start();
   if(!isset($_SESSION['username'])){
       header('location:login.php');
   }
?>

<html>
    <head>
        <title>Home page</title>
        <link rel="stylesheet" type="text/css" href="style.css">   
         <link rel="stylesheet" type ="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    </head>
    <body>
<div>
    <a href="logout.php">LOGOUT</a>
        <h1 style="color:tomato;text-align:center; margin-top: 200px;">Welcome <?php echo $_SESSION['username'];?></h1>
</div>
    </body>
</html>