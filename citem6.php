<!DOCTYPE html>
<html lang="en">

<head>
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
<div class="product-description" style="height=20%;width=40%;">
    <span>Tiny Toon Bedsheet</span>
    <h3></h3>
    <form action="managecart.php" method="POST">

<h3>
              <p class="description" >TINY-TOONS ELASTIC FITTED SINGLE BED (1+1)<br>

Elastic all around th e bedsheets not in the corners<br>

TEENZ BRAND FABRIC <br>

Packet Content : 1 Single bedsheet + 1 Pillow covers<br>

ADJUSTABLE UPTO 6 INCHES MATTRESS<br>

FABRIC : HEAVY GLACE COTTON<br>

Size : Bedsheet 60 x 90
 (36x72 inches)<br>
           Pillow cover 28 X 18 inches<br>
Weight 600grams<br></h3>
             <button type="submit" name="Add_To_Cart" class="btn btn-info" style="background-color:rgba(224, 227, 230, 0.801);border-color:black;font-family:serif;font-size:120%;">Add to Cart</img></button>
             <input type="hidden" name="Item_Name" value="Cushion">
             <input type="hidden" name="Price" value="350">   
</div>     
</form>
</div>
</main>
    


<div class="mySlides">
   
    <img src="./img/cu61.jpeg"
    style=" border:2px solid #ddd;
    height:430px;
    border-radius:4px;
    padding:5px;
    width:450px;">
  </div>

  <div class="mySlides">
    <img src="./img/cu62.jpeg" style=" border:2px solid #ddd;
    height:430px;
    border-radius:4px;
    padding:5px;
    width:450px;">
  </div>

  <div class="mySlides">
   
    <img src="./img/cu63.jpeg" style=" border:2px solid #ddd;
    height:430px;
    border-radius:4px;
    padding:5px;
    width:450px;">
  </div>
    
 
   
 
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
  <div class="column">
      <img class="demo2" src="./img/cu61.jpeg"  onclick="currentSlide(5)" alt="Tiny Toon Bedsheet">
</div>
    <div class="column">
      <img class="demo2" src="./img/cu62.jpeg"  onclick="currentSlide(1)" alt="Tiny Toon Bedsheet">
    </div>
    <div class="column">
      <img class="demo2" src="./img/cu63.jpeg" onclick="currentSlide(2)" alt="Tiny Toon Bedsheet">
    </div>
  

  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<style>
    .demo2{
    border:2px solid #ddd;
    height:250px;
    border-radius:4px;
    padding:5px;
    width:200px;
    }

    .product-description span {
        font-size: 12px;
        color: #358ED7;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .product-description h1 {
        font-weight: 300;
        font-size: 52px;
        color: #43484D;
        letter-spacing: -2px;
    }

    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: #86939E;
        line-height: 24px;
    }

    /* Product Color */
    .product-color {
        margin-bottom: 30px;
    }

    .color-choose div {
        display: inline-block;
    }

    .color-choose input[type="radio"] {
        display: none;
    }

    .color-choose input[type="radio"]+label span {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: -1px 4px 0 0;
        vertical-align: middle;
        cursor: pointer;
        border-radius: 50%;
        border: 2px solid #FFFFFF;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
    }

    .color-choose input[type="radio"]#red+label span {
        background-color: #C91524;
    }

    .color-choose input[type="radio"]#blue+label span {
        background-color: #314780;
    }

    .color-choose input[type="radio"]#black+label span {
        background-color: #323232;
    }

    .color-choose input[type="radio"]:checked+label span {
        background-image: url(images/check-icn.svg);
        background-repeat: no-repeat;
        background-position: center;
    }

    /* Cable Configuration */
    .cable-choose {
        margin-bottom: 20px;
    }

    .cable-choose button {
        border: 2px solid #E1E8EE;
        border-radius: 6px;
        padding: 13px 20px;
        font-size: 14px;
        color: #5E6977;
        background-color: #fff;
        cursor: pointer;
        transition: all .5s;
    }

    .cable-choose button:hover,
    .cable-choose button:active,
    .cable-choose button:focus {
        border: 2px solid #86939E;
        outline: none;
    }

    .cable-config {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .cable-config a {
        color: #358ED7;
        text-decoration: none;
        font-size: 12px;
        position: relative;
        margin: 10px 0;
        display: inline-block;
    }

    .cable-config a:before {
        content: "?";
        height: 15px;
        width: 15px;
        border-radius: 50%;
        border: 2px solid rgba(53, 142, 215, 0.5);
        display: inline-block;
        text-align: center;
        line-height: 16px;
        opacity: 0.5;
        margin-right: 5px;
    }

    /* Product Price */
    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: #43474D;
        margin-right: 20px;
    }

    .cart-btn {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }

    .cart-btn:hover {
        background-color: #64af3d;
    }



   
/* product  */
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
 
  vertical-align:middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: auto;
  
}

/* Hide the images by default */
.mySlides {
 margin-top:-16.5%;
  display:none;
  margin-left: 200px;
  height:40%;
  width:450px;
 
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: black;
  
  font-size: 80px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images*/
.demo {
  opacity: 1.6;
}

.active,
.demo:hover {
  opacity: 1.6;
}
div.product-description {
margin-left:890px;
}

/* Responsive */
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column,
  .right-column {
    width: 100%;
  }

  .left-column img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}

@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
  }
}
</style>

<body>