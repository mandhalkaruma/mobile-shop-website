<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

    <section class="about">
        <img src="p1.jpg" alt="">
        <h3>about us</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi neque tempore, vitae 
            incidunt suscipit necessitatibus consequatur illo beatae error est, nisi natus? In 
            ducimus ipsa quos velit pariatur explicabo dolores!
        </p>
        <a href="contact.php" class="btn">contact us</a>
    </section>

    <section class="team">
        <h1 class="heading">Our teams</h1>
        <div class="box-container">
            <div class="box">
                <img src="team1.jpg" alt="">
                <h3>John Deo</h3>
                <p>phone planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
            <div class="box">
                <img src="team2.jpg" alt="">
                <h3>John Deo</h3>
                <p>phone planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
            <div class="box">
                <img src="team3.jpg" alt="">
                <h3>John Deo</h3>
                <p>phone planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
            <div class="box">
                <img src="team1.jpg" alt="">
                <h3>John Deo</h3>
                <p>phone planner</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
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