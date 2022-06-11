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
    <title>Admin</title>
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

        <button name="login" type="submit" style="color: black; font-weight:bold; font-size:15px;">Login</button>
      </div>

      <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary" style="font-family: 'poppins'; text-align:center; color:#f4dc15; margin-left:50px; font-size: 15px; background-color:black; width:100% px; height:50px; margin: 10px 123px 50px 165px; padding-top:10px; ;line-height:37px">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      <span style="color:white">ITD</span> © 2022. Sukses Bersama ITD.
    </div>
    </form>
  </body>
</html>
