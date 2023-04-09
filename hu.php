<?php
// $database_connection = mysqli_connect("localhost", "root", "") or die();
// $select_database = mysql_select_db("homedb", $database_connection) or die();
$con = mysqli_connect('localhost','root','') or die(); 
   
mysqli_select_db($con, 'homedb') or die();
?>

<?php
 
if (isset($_POST['re_password']))
	{
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$re_pass = $_POST['re_pass'];
	$password_query = mysql_query("select * from users where id='1'");
	$password_row = mysql_fetch_array($password_query);
	$database_password = $password_row['password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysql_query("update users set password='$new_pass' where id='1'");
			echo "<script>alert('Update Sucessfully'); window.location='login.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='login.php'</script>";
			}
		}
	  else
		{
		echo "<script>alert('Your old password is wrong'); window.location='login.php'</script>";
		}
	}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodingLand</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <style>
.error {color: black;}
.error {
        background: transparent;
}
button {
        display: inline-block; background-color: Tomato;
        border-radius: 30px;
        border: 5px double #cccccc;
        color: black;
        text-align: center;
        font-size: 15px;
        padding: 10px;
        width: 100px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
    
</style>
</head>
<body>
    <div class="full-page">
    	    	<?php
// define variables and set to empty values
$nameErr = $passErr  ="";
$name = $pass ="";
$hasError=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $hasError=true;
  } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["pass"])) {
    $passErr = "password is required";
    $hasError=true;
  } else {
    $pass = test_input($_POST["pass"]);
  }
  if(!$hasError)
  {
  	session_start();
  	$_SESSION["singnedup"]=$row["name"];
  	header("Location: index.php");
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="form-box">
<div class="form">
<!-- <form action="" method="post"> -->
                             <!-- <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
                             <h2 style="color:red;">Login Box</h2>
                             <form action="validation.php" method="post">
               <div class="form-group">
               <!-- <p><span class="error">* required field</span></p> -->
                   <!-- <label>Usename</label> -->
                   <br>
                   <input type="text" name="user" class="form-control" placeholder="username"  required>
                   
                   <!-- <input type="text" name="user" class="form-control" required> -->
                   <!-- <span class="error">* <?php echo $nameErr;?></span> -->
               </div>
               <div class="form-group">
                 <!-- <label> Password</label> -->
                 <br>
                   <input type="password" name="password" class="form-control" placeholder="password"  required>
                   
                 <!-- <input type="password" name="password" class="form-control" required> -->
                 <span class="error">* <?php echo $passErr;?></span>
               </div>
               <p>
          <a href="hu.php">update passord</a>
               </p>
               <br>
               <button type="submit" class="btn btn-primary">Login</button>
           </form>
                            
                                    <!-- <center><h2 class="main-heading">Login Form</h2></center>
                                     <p><span class="error">* required field</span></p>
                                       <input type="text" name="name" placeholder="username">
                                   <span class="error">* <?php echo $nameErr;?></span>
                                    <br><br>
                                      <input type="password" name="password" placeholder="password">
                                   <span class="error">* <?php echo $passErr;?></span>
                                     <br><br>                                  
                                  <input type="submit" name="submit" value="Login">  -->
                             <!-- </form> -->
				                           <p class="message">Not Registered?
                                         <a href="registration.php">Register</a></p>
				                     <!-- </form> -->
			                 
</div>
</div>
</body>
</html>