<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>

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
    <!-- <section class="pricing">
        <h1 class="heading">Our pricing</h1>
        <div class="box-container">
            <div class="box">
                <h3>basic plan</h3>
                <div class="price">$250</div>
                <div class="list">
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                </div>
                <a href="contact.php" class="btn">choose phone</a>
            </div>

            <div class="box">
                <h3>premium Plan</h3>
                <div class="price">$650</div>
                <div class="list">
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                </div>
                <a href="contact.php" class="btn">choose phone</a>
            </div>

            <div class="box">
                <h3>ultimate Plan</h3>
                <div class="price">$1250</div>
                <div class="list">
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                    <p><i class="fas fa-check"> Phone repairing</i></p>
                </div>
                <a href="contact.php" class="btn">choose phone</a>
            </div>
        </div>
    </section> --><section class="services">
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
                        <h3>Water damage services</h3>
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
                        <h3>Camera repair</h3>
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
                        <h3>Speaker repair</h3>
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
    </section>
    <section class="reviews">
        <h1 class="heading">Happy clients</h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="team1.jpg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem iusto neque, 
                        tempore corporis cum natus ex dignissimos repellat magni possimus eos cupiditate maiores
                         harum expedita amet sapiente nihil iure.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="team2.jpg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem iusto neque, 
                        tempore corporis cum natus ex dignissimos repellat magni possimus eos cupiditate maiores
                         harum expedita amet sapiente nihil iure.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="team3.jpg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem iusto neque, 
                        tempore corporis cum natus ex dignissimos repellat magni possimus eos cupiditate maiores
                         harum expedita amet sapiente nihil iure.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="team1.jpg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem iusto neque, 
                        tempore corporis cum natus ex dignissimos repellat magni possimus eos cupiditate maiores
                         harum expedita amet sapiente nihil iure.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="team2.jpg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem iusto neque, 
                        tempore corporis cum natus ex dignissimos repellat magni possimus eos cupiditate maiores
                         harum expedita amet sapiente nihil iure.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="team3.jpg" alt="">
                    <h3>John Deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorem iusto neque, 
                        tempore corporis cum natus ex dignissimos repellat magni possimus eos cupiditate maiores
                         harum expedita amet sapiente nihil iure.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <?php @include 'footer.php';?>
    </div>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>