<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php @include 'header.php';?>

     <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(p1.jpg) no-repeat">
                    <div class="content">
                        <h3>Plan to purchase Mobile</h3>
                        <p>Welcome to our mobile shop, where cutting-edge technology meets your communication needs. At our store, we strive to provide a diverse range of mobile devices that cater to every lifestyle and preference.
                        </p>
                        <a href="about.php" class="btn">discover more</a>   
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(p1.jpg) no-repeat">
                    <div class="content">
                        <h3>Plan to purchase Mobile</h3>
                        <p>Welcome to our mobile shop, where cutting-edge technology meets your communication needs. At our store, we strive to provide a diverse range of mobile devices that cater to every lifestyle and preference.
                        </p>
                        <a href="about.php" class="btn">discover more</a>   
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(p1.jpg) no-repeat">
                    <div class="content">
                        <h3>Plan to purchase Mobile</h3>
                        <p>Welcome to our mobile shop, where cutting-edge technology meets your communication needs. At our store, we strive to provide a diverse range of mobile devices that cater to every lifestyle and preference.
                        </p>
                        <a href="about.php" class="btn">discover more</a>   
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- <section class="services">
        <h1 class="heading">our services</h1>
        <div class="swiper service-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="m3.jpg" alt="">
                    <div class="content">
                        <h3>Phone repairing</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed vel cum quasi 
                            facere vero amet tempore suscipit velit sequi omnis. Enim ad eligendi consectetur 
                            officiis eaque doloremque maiores, sequi ducimus.
                        </p>
                        <a href="#about.php" class="btn">about us</a>
                    </div>
                </div>
                <div class="swiper slide slide">
                    <img src="m2.jpg" alt="">
                    <div class="content">
                        <h3>data recovery</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed vel cum quasi 
                            facere vero amet tempore suscipit velit sequi omnis. Enim ad eligendi consectetur 
                            officiis eaque doloremque maiores, sequi ducimus.
                        </p>
                        <a href="#about.php" class="btn">about us</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="m2.jpg" alt="">
                    <div class="content">
                        <h3>Phone updating</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed vel cum quasi 
                            facere vero amet tempore suscipit velit sequi omnis. Enim ad eligendi consectetur 
                            officiis eaque doloremque maiores, sequi ducimus.
                        </p>
                        <a href="#about.php" class="btn">about us</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="m2.jpg" alt="">
                    <div class="content">
                        <h3>batteries replacement</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed vel cum quasi 
                            facere vero amet tempore suscipit velit sequi omnis. Enim ad eligendi consectetur 
                            officiis eaque doloremque maiores, sequi ducimus.
                        </p>
                        <a href="#about.php" class="btn">about us</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="m2.jpg" alt="">
                    <div class="content">
                        <h3>Phone repairing</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed vel cum quasi 
                            facere vero amet tempore suscipit velit sequi omnis. Enim ad eligendi consectetur 
                            officiis eaque doloremque maiores, sequi ducimus.
                        </p>
                        <a href="#about.php" class="btn">about us</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="m2.jpg" alt="">
                    <div class="content">
                        <h3>Phone repairing</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed vel cum quasi 
                            facere vero amet tempore suscipit velit sequi omnis. Enim ad eligendi consectetur 
                            officiis eaque doloremque maiores, sequi ducimus.
                        </p>
                        <a href="#about.php" class="btn">about us</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section> -->
    <?php @include 'footer.php';?>
    </div>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>