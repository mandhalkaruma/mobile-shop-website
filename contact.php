<?php 
// $conn = mysqli_connect('localhost','root','','contact_db');

// if(isset($_POST['send'])){
//     // $id = $_POST['id'];
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $number = $_POST['number'];
//     $plan = $_POST['plan'];
//     $address = $_POST['address'];
//     $message = $_POST['message'];

//     $insert ="INSERT INTO `contact_form`('id', `name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('[$id]','[$name]','[$email]','[$number]','[$plan]','[$address]','[$message]')";
//     mysqli_query($conn, $insert);
//     header('localhost:contact.php');
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

    <section class="contact">
        <h1 class="heading">contact us</h1>
        <form action="" method="post">
            <div class="flex">
                <div class="inputBox">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>

                <div class="inputBox">
                    <span>your email</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>

                <div class="inputBox">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number" name="number" required>
                </div>

                <div class="inputBox">
                    <span>Choose plan</span>
                    <select name="plan">
                        <option value="basic">basic plan</option>
                        <option value="premium">premium plan</option>
                        <option value="ultmiate">ultimate plan</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>your address</span>
                    <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                </div>

                <div class="inputBox">
                    <span>your message</span>
                    <textarea name="address" placeholder="enter your message" required cols="30" rows="10"></textarea>
                </div>
            </div>
            <input type="submit" value="send message" name="send" class="btn">
        </form>
    </section>
    <?php @include 'footer.php';?>
    </div>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>