<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Lovers</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">

</head>
<body>

<!-- custom js file link  -->
<script type="text/javascript" src="{{asset('asset/js/javascript.js')}}"></script>
    
<!-- header section starts  -->

<header>


<div class="header-2">

    <div id="menu" class="fas fa-hamburger"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#dish">dishes</a></li>
            <li><a href="#chef">lifehack</a></li>
            <li><a href="#speciality">speciality</a></li>
            <li><a href="#order">Your recipe</a></li>
        </ul>
    </nav>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-twitter"></a>
    </div>

</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>welcome <span>food</span> lover</h1>
    <p>Here you can find any recipesx what you want and share the recipes what you know! Join us, we are waiting for you!</p>
    <a href="#"><button class="btn">get started</button></a>
</div>

<div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span> about us </span> </h1>

<div class="row">

    <div class="content">
        <h3>lets satisfy your hunger with our tasty recipes</h3>
        <p>You search the fast and tasty food recipes? You like cooking and you in looking for new recipes? You do not know what cook for the dinner,lunch or breakfast? You want to wonder your besties with tasty food? You learn the new recipes? You know the recipes of delicious foods and ready to share to others? </p>
        <p>That you have to join us! Here you can find many many of tasty, delicious recipes and you can show cooking lifehacks! After subscribing you can send to us new recipes and we publish it into our web-site. Enjoy!</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

    <div class="image">
        <img src="{{asset('asset/img/girl-chef1.png')}}" alt="">
    </div>

</div>

</section>

<!-- about section ends -->

<!-- dish section starts  -->

<section class="dish" id="dish">

<h1 class="heading"> <span> popular dishes </span> </h1>

<ul class="controls">
    <li class="buttons button-active" data-filter="all">all</li>
    <li class="buttons" data-filter="sandwich">sandwich</li>
    <li class="buttons" data-filter="cake">cake</li>
    <li class="buttons" data-filter="juice">juice</li>
    <li class="buttons" data-filter="chocolate">chocolate</li>
</ul>

<div class="image-container">

    <div class="image sandwich">
        <img src="{{asset('asset/img/sandwich1.jpg')}}" alt="">
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="{{asset('asset/img/sandwich2.jpg')}}" alt="">
        <a href="#">vegan sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="{{asset('asset/img/sandwich3.jpg')}}" alt="">
        <a href="#">sweet sandwich</a>
    </div>

    <div class="image cake">
        <img src="{{asset('asset/img/cake1.jpg')}}" alt="">
        <a href="#">cake</a>
    </div>
    <div class="image cake">
        <img src="{{asset('asset/img/cake2.jpg')}}" alt="">
        <a href="#">pink panter</a>
    </div>
    <div class="image cake">
        <img src="{{asset('asset/img/cake3.jpg')}}" alt="">
        <a href="#">assortie pie</a>
    </div>

    <div class="image juice">
        <img src="{{asset('asset/img/juice1.jpg')}}" alt="">
        <a href="#">orange juice</a>
    </div>
    <div class="image juice">
        <img src="{{asset('asset/img/juice2.jpg')}}" alt="">
        <a href="#">fresh</a>
    </div>

    <div class="image chocolate">
        <img src="{{asset('asset/img/chocolate.jpg')}}" alt="">
        <a href="#">chocolate</a>
    </div>
    <!-- if u want u can use it <div class="box">
        <img src="{{asset('asset/img/lh2.jpg')}}" alt="">
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div> -->

</div>

</section>

<!-- dish section ends -->

<!-- chef section starts  -->

<section class="chef" id="chef">

<h1 class="heading"> <span> Lifehacks </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="{{asset('asset/img/lh1.jpg')}}" alt="">
        <div class="info">
            <span>Using these simple ingredients, you can prepare a hearty breakfast in minutes.</span>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('asset/img/lh2.jpg')}}" alt="">
        <div class="info">
            <span>here the some foods that contain 1500 ccal,and you can use it if you control your caal in your ratio</span>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('asset/img/lh3.jpg')}}" alt="">
        <div class="info">
            <span>This is the not not for diet very tasty snack, with bread and cheese</span>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('asset/img/lh4.jpg')}}" alt="">
        <div class="info">
            <span>This is the super secret lifehack with burger, that contain the surprise for the who eating</span>
        </div>
    </div>

</div>

</section>

<!-- chef section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

<h1 class="heading"> <span> our speciality </span> </h1>

<!-- <div class="box-container">
</div> -->

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <h3>heavy discounts</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>money returns</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <h3>24 x 7 support</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quisquam.</p>
    </div>

</div>

</section>

<!-- speciality section ends -->

<!-- order section starts  -->

<section class="order" id="order">

<h1 class="heading"> <span> New recipe by me </span> </h1>

<form action="">

    <div class="inputBox">
        <input type="text" placeholder="full name">
        <input type="text" placeholder="food name">
    </div>

    <div class="inputBox">
        <input type="number" placeholder="phone number">
        <select name="" id="">
            <option value="food type" disabled selected>food type</option>
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select>
    </div>

    <div class="inputBox">
        <textarea cols="30" rows="10" placeholder="recipe"></textarea>
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.3448351768534!2d72.8194324144256!3d19.136377055045728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7ddc82073d7%3A0x3aa5a7ce31b7b9dd!2sRestaurants!5e0!3m2!1sen!2sin!4v1612270030599!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <input type="submit" value="send" class="btn">

</form>

</section>

<!-- order section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h1>newsletter</h1>
    <p>subscribe for latest updates</p>    
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <img src="{{asset('asset/img/shape-top.png')}}" alt="">

    <div class="box-container">

        <div class="box">
            <h3 class="heading"> <span>why choose us?</span> </h3>
            <p>Here the recipes all around the world. You can find everything what you want. You can share the recipes that you know. And see the lifehacks to cooking.Join!</p>
        </div>

        <div class="box">
            <h3 class="heading"> <span>locations</span> </h3>
            <a href="#">Kazakhstan</a>
            <a href="#">USA</a>
            <a href="#">france</a>
            <a href="#">Russia</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>quick links</span> </h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">dishes</a>
            <a href="#">lifehack</a>
            <a href="#">speciality</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>contact us</span> </h3>
            <p> <i class="fas fa-map-marker-alt"></i> Atyrau, KZ 400104 </p>
            <p> <i class="fas fa-envelope"></i> kzkz@gmail.com </p>
            <p> <i class="fas fa-globe"></i> www.yourwebsite.com </p>
        </div>

    </div>

<h1 class="credit"> created by <span>Anelya</span></h1>

</section>

<!-- footer section ends -->