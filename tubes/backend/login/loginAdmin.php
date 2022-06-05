<?php
        if( isset($_POST["login"])) {
require "../../config/connection.php";

$username = $_POST["username"];
$password = $_POST["password"];

$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

// cek username
if (mysqli_num_rows($result) === 1) {

// cek password
$row = mysqli_fetch_assoc($result);
if($password == $row["password"]) {

// set session

$_SESSION["login"] = true;
header("Location: ../admin.php");
exit;
}

}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="loginAdmin.css" />
    <title>Document</title>
  </head>
  <body>
    
      <div class="container">
          <form action="" method="post">

        <h1 class="heading" style="font-family: poppins; text-align:center;">Login Admin</h1>
        <label for="uname" style="font-family: poppins;"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required autocomplete="off" />

        <label for="psw"><b style="font-family: poppins">Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="password"
          required
        />

        <button name="login" type="submit" style="color: black; font-weight:bold;">Login</button>
      </div>

      <div class="container-fluid" style="background-color: black">
        <button type="button" class="cancelbtn" style="color: black; font-weight: bold; border-radius: 20px">Cancel</button>
        <span class="psw" style="color: #f4dc15;">Forgot <a href="#" style="color: #ffffff; margin-right: 5px">password?</a></span>
      </div>
    </form>
  </body>
</html>
