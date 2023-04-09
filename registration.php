<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css">
      <style>
.error {color: red;}
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
        margin: 20px;
      }
      .center {
  margin: 0;
  position: absolute;
  top: 65%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
    
</style>
</head>
<body>
    <?php
// define variables and set to empty values
$nameErr  = $passErr ="";
$name  = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["pass"])) {
    $passErr = "password is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="loginBox">
        <h2>Registration</h2>
        
           
        <form action="registration2.php" method="post">
               <div class="form-group">
               <p><span class="error">* required field</span></p>
                   <!-- <label>Usename</label> -->
                   <br>
                   <input type="text" name="user" class="form-control" placeholder="name"  required>
                   
                   <!-- <input type="text" name="user" class="form-control" required> -->
                   <span class="error">* <?php echo $nameErr;?></span>
               </div>
               <div class="form-group">
                 <!-- <label> Password</label> -->
                 <br>
                   <input type="password" name="password" class="form-control" placeholder="password"  required>
                   
                 <!-- <input type="password" name="password" class="form-control" required> -->
                 <span class="error">* <?php echo $passErr;?></span>

               </div>
               <br>
               <div class="center">
               <button type="submit" class="btn btn-primary">Register</button>
               </div>
           </form>
  
    </div>
</body>
</html>