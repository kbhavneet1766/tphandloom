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
    <section class="products section container" id="products">
        <h2 class="section__title">
            BEDSHEETS
        </h2>

        <div class="products__container grid">
            <article class="products__card">
            <form action="managecart.php" method="POST">
              <a href="item1.php">  <img src="./img/b15.jpeg" alt="" class="products__img">
</a>
                <h3 class="products__title">Tiny-Toons Fitted Bedsheet</h3>
                <span class="products__price">$</span>

                <button type="submit" name="Add_To_Cart" class="products__button" ><i class='bx bx-shopping-bag'></i>Add to Cart</img></button>
             <input type="hidden" name="Item_Name" value="bed1">
             <input type="hidden" name="Price" value="350">
         
                </button></form>
            </article>
            <article class="products__card">
            <form action="managecart.php" method="POST">
            <a href="item2.php"> <img src="./img/b13.jpeg" alt="" class="products__img"></a>

                <h3 class="products__title">Tiny-Toons Fitted Bedsheet</h3>
                <span class="products__price">$870</span>

                <button type="submit" name="Add_To_Cart" class="products__button" ><i class='bx bx-shopping-bag'></i>Add to Cart</img></button>
             <input type="hidden" name="Item_Name" value="bed2">
             <input type="hidden" name="Price" value="350">
         
                </button></form>
            </article>
            <article class="products__card">
            <form action="managecart.php" method="POST">
            <a href="item3.php"> <img src="./img/b14.jpeg" alt="" class="products__img"></a>

                <h3 class="products__title">Tiny-Toons Fitted Bedsheet</h3>
                <span class="products__price">$1350</span>

                <button type="submit" name="Add_To_Cart" class="products__button" ><i class='bx bx-shopping-bag'></i>Add to Cart</img></button>
             <input type="hidden" name="Item_Name" value="bed3">
             <input type="hidden" name="Price" value="350">  </button></form>
            </article>
            <article class="products__card">
            <form action="managecart.php" method="POST">
            <a href="item4.php"> <img src="./img/b17.jpeg" alt="" class="products__img"></a>

                <h3 class="products__title">Double Bed</h3>
                <span class="products__price">$650</span>

                <button type="submit" name="Add_To_Cart" class="products__button" ><i class='bx bx-shopping-bag'></i>Add to Cart</img></button>
             <input type="hidden" name="Item_Name" value="bed4">
             <input type="hidden" name="Price" value="350">  </button></form>
            </article>
           
        

            <article class="products__card">
            <form action="managecart.php" method="POST">
            <a href="item5.php"><img src="./img/b12.jpeg" alt="" class="products__img"></a>

                <h3 class="products__title">Tiny-Toons Fitted Bedsheet</h3>
                <span class="products__price">$650</span>

                <button type="submit" name="Add_To_Cart" class="products__button" ><i class='bx bx-shopping-bag'></i>Add to Cart</img></button>
             <input type="hidden" name="Item_Name" value="bed4">
             <input type="hidden" name="Price" value="350">  </button></form>
            </article>
            <article class="products__card">
            <form action="managecart.php" method="POST">
            <a href="item6.php"><img src="./img/b2.jpeg" alt="" class="products__img"></a>

                <h3 class="products__title">Fully Fitted Bedsheet</h3>
                <span class="products__price">$650</span>

                <button type="submit" name="Add_To_Cart" class="products__button" ><i class='bx bx-shopping-bag'></i>Add to Cart</img></button>
             <input type="hidden" name="Item_Name" value="bed4">
             <input type="hidden" name="Price" value="350">  </button></form>
            </article>
            <article class="products__card">
                <img src="./img/b11.jpeg" alt="" class="products__img">

                <h3 class="products__title">Tiny-Toons Fitted Bedsheet</h3>
                <span class="products__price">$950</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            <article class="products__card">
                <img src="./img/b5.jpeg" alt="" class="products__img">

                <h3 class="products__title">5pc's Frilly Bedding Set</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            <article class="products__card">
                <img src="./img/b10.jpeg" alt="" class="products__img">

                <h3 class="products__title">Tiny-Toons Fitted Bedsheet</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            <article class="products__card">
                <img src="./img/b6.png" alt="" class="products__img">

                <h3 class="products__title">Deewan Set</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            <article class="products__card">
                <img src="./img/b16.jpeg" alt="" class="products__img">

                <h3 class="products__title">Double Bed</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
           
            <article class="products__card">
                <img src="./img/b3.jpeg" alt="" class="products__img">

                <h3 class="products__title">Fully Fitted Bedsheet</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>

           
            <article class="products__card">
                <img src="./img/b8.jpeg" alt="" class="products__img">

                <h3 class="products__title">Bedsheet*90/100</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            
            <article class="products__card">
            <img src="./img/b1.jpeg" alt="" class="products__img">

            <h3 class="products__title">Fully Fitted Bedsheet</h3>
            <span class="products__price">$650</span>

            <button class="products__button">
                <i class='bx bx-shopping-bag'></i>
            </button>
            </article>
            <article class="products__card">
                <img src="./img/b7.jpeg" alt="" class="products__img">

                <h3 class="products__title">Bedsheet*90/100</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            
           
            <article class="products__card">
                <img src="./img/b4.jpeg" alt="" class="products__img">

                <h3 class="products__title">5pc's Frilly Bedding Set</h3>
                <span class="products__price">$650</span>

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            
        </div>
    </section>