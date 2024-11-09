<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="./assets/styles/style.css" />
    <link rel="stylesheet" href="style.css">


   </head>
   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ffffff;
}
.wrapper{
    margin-top: 100px;
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
  text-align: center;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  /* background: #4070f4; */
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: rgb(41, 45, 53);
  cursor: pointer;
  color: white;
}
.input-box.button input:hover{
  background: rgb(199, 238, 225);
  background: grey;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
header{
    position: fixed;
    top: 0px;
    /* margin-bottom: 100px; */
    width: 100%;
}
form .input-box select {
  height: 45px;
  width:100%;
  border: 1.5px solid #C7BEBE;
  background: #fff;
  font-size: 17px;
  font-family: 'Poppins', sans-serif;
  padding: 0 15px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
form .input-box select option[value=""]{
  color:#cccccc;
}
form .input-box select:hover {
  border-color: #4070f4;
}
.error-container {
    margin-top: 20px;
    padding: 10px;
    border: 2px solid #ff0000;
    border-radius: 5px;
    background-color: #ffecec;
    color: #ff0000;
    font-size: 16px;
  }
  .error-container ul{
      list-style-type:disc !important;
      margin:0 20px;
  }
  #navbar{
    background: rgb(41, 45, 53);

  }
  #navbar .nav-items ul li a{
    color: white;
  }
  #navbar .nav-items ul li a:hover{
    color: grey;
  }
   </style>
<body>
<header>
<nav id="navbar">
        <div class="logo">
            <a href="products.php">
                <img width="100px" height="250px" src="./img/logo.jpg" alt="TP">
            </a>
        </div>
        <div class="nav-items">
            <ul id="nav-items-ul">
                <li><a class="bottom-line" href="header.php">Home</a></li>
                <li><a class="bottom-line" href="index.php">Products</a></li>
                <li><a class="bottom-line" href="mycart.php">Cart</a></li>
               <!-- <li><a class="bottom-line" href="/index.html#categories">Categories</a></li>-->
               <li><a class="bottom-line" href="about.php">About</a></li>
               <li> <a class="bottom-line" href="index.php">Contact</a></li>
               <li> <a class="bottom-line" href="./login.php">Log-In</a></li>
               <li> <a class="bottom-line" href="./register.php">Sign-Up</a></li>
               
            </ul>
            
        </div>
      
       
        
    </nav>
    </header>

  <div class="wrapper">
    <h2>Registration</h2>
      <?php
  if(isset($_SESSION['errors'])){
    echo '<div class="error-container"><ul>';
    foreach($_SESSION['errors'] as $error){
        echo '<script>console.log("' . $error . '");</script>';
        echo '<li style="color: red;">' . $error . '</li>';
    }
    echo '</ul></div>';
    unset($_SESSION['errors']);
}
      ?>
    <form action="includes/register-code.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="regisEmail" required>
      </div>
      <div class="input-box">
        <input type="tel" placeholder="Enter Phone Number" name="regisContact" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="regisPassword" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confirm_password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
  <?php
if(isset($_SESSION['messages'])){
    foreach($_SESSION['messages'] as $msg){
        echo '<script>alert("' . $msg . '");</script>';
    }
    unset($_SESSION['messages']);
}?>
</body>
</html>