<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suprema - Shop 'fo You Die</title>
    <link rel="icon" type="image/x-icon" href="../img/Icons/favicon.png">
    <link rel="stylesheet" href="utils.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="products.css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
     <!--=============== FAVICON ===============-->
     <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

<!--=============== BOXICONS ===============-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<!--=============== SWIPER CSS ===============--> 
<link rel="stylesheet" href="swiper-bundle.min.css">

<!--=============== CSS ===============-->
<link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <a href="index.html">
            <img width="100px" height="250px" src="./img/logo.jpg" alt="TP">
            </a>
        </div>
        <div class="nav-items">
            <ul id="nav-items-ul">
                <li><a class="bottom-line" href="header.php">Home</a></li>
                <li><a class="bottom-line  nav-active" href="index.php">Products</a></li>
                <li><a class="bottom-line" href="mycart.php">Cart</a></li>
               <!-- <li><a class="bottom-line" href="/index.html#categories">Categories</a></li>-->
                <li><a class="bottom-line" href="about.php">About</a></li>
                <li><a class="bottom-line" href="../HTML/contact.html">Contact</a></li>
                <li><a class="bottom-line" href="../HTML/login.html">Login</a></li>
                <li id="theme-img"><img src="../img/Icons/theme.svg" alt="Change Theme"></li>
            </ul>
        </div>
    </nav>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
  
    <title>cartt</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
             </div>
             <div class="col-lg-9">
             <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
  
    if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
        $sr=$key+1;
        echo"
        <tr>
        <td>$sr</td>
        <td>$value[Item_Name]</td>
        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
        <td>
        <form action='managecart.php' method='POST'>
        <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form></td>
        <td class='itotal'></td>
        <td>
        <form action='managecart.php' method='POST'>
        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        </tr>";
    }}
    ?>
   
    
  </tbody>
</table>
</div>
<div class="col-lg-3">
    <div class="border bg-light rounded p-4">
    <h4>Grand Total:</h4>
    <h5 class="text-right" id="gtotal"></h5>
    <br>
    <?php
    if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0){
    ?>
<form action="purchase.php" method="POST">
<div class="form-group">
    <label>Full Name</label>
    <input type="text"  name="full_name" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="number"  name="phone_no" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" required>
  </div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Cash on Delivery
  </label>
</div>
<br>
    <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button></form>
    <?php } ?>
</div></div>

</div></div>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal(){
        gt=0;
        for(i=0;i<iprice.length;i++){
              
           itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
           gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subTotal();
    </script>
</body>
</html>