<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Handlooms-BHARMAN</title>
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

<body>
   
    <nav id="navbar">
        <div class="logo">
            <a href="products.php">
                <img width="100px" height="250px" src="./img/logo.jpg" alt="TP">
            </a>
        </div>
        <div class="nav-items">
            <ul id="nav-items-ul">
                <li><a class="bottom-line nav-active" href="header.php">Home</a></li>
                <li><a class="bottom-line" href="index.php">Products</a></li>
                <li><a class="bottom-line" href="mycart.php">Cart</a></li>
               <!-- <li><a class="bottom-line" href="/index.html#categories">Categories</a></li>-->
               <li><a class="bottom-line" href="about.php">About</a></li>
               <li> <a  class="bottom-line" href="https://wa.me/919518229898?text=Hi%20i%20need%20some%20help!%20"  style="font-size:2 rem;">CONTACT US</a>

               <li> <a class="bottom-line" href="./login.php">Log-In</a></li>
               <li> <a class="bottom-line" href="./register.php">Sign-Up</a></li>
               <li> <a class="bottom-line" href="./logout_script.php">Log-out</a></li>
               
            </ul>
            
        </div>
      
       
        
    </nav>

    <div class="about-me">
        <div class="about-img">
            <img src="./img/background.jpeg" alt="hello">
        </div>
    <script src="../JS/script.js"></script>

    


</body>

</html>

              <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Our information</h3>

                    <ul class="footer__list">
                        <li>1234 - Peru</li>
                        <li>La Libertad 43210</li>
                        <li>123-456-789</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">About Us</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Support Center</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customer Support</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Copy Right</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Product</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Road bikes</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Mountain bikes</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Electric</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook'></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                    </ul>
                </div>
            </div>

            <span class="footer__copy">&#169; Bedimcode. All rigths reserved</span>
        </footer>
          <!--=============== SCROLL UP ===============-->
          <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

                            <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true || isset($_COOKIE['username'])){
        $_SESSION['username']=$_COOKIE['username'];
      echo"<p style='text-align: center; margin-top:.1px '>WELCOME TO TP HANDLOOM - $_SESSION[username]</p>";
    }
    ?>
                     <script>
                        function popup(popup_name){
get_popup=document.getElementById(popup_name);
if(get_popup.style.display=="flex"){
    get_popup.style.display="none";
}
else{
    get_popup.style.display="flex";
}
                        }
                        function cross(){
                            get_popup.style.display="none";
                        }
                     </script> 

        </nav>
    </div>
    </body>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
     

        
      
          

</html>