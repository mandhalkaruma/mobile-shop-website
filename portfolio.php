<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 20px auto;
        }

        .product {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 250px;
        }

        .product img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .product-description {
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 16px;
            color: #e44d26;
            margin-bottom: 10px;
        }

        .add-to-cart {
            background-color: #e44d26;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-to-cart:hover {
            background-color: #333;
        }
    </style>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css">
    <!-- swipper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php @include 'header.php';?>
    <!-- <section class="portfolio">
        <h1 class="heading">Our Products</h1>
        <div class="portfolio-container">
        <a href="p1.jpg" class="box">
            <div class="image">
                <img src="p1.jpg" alt="">
            </div>
            <h3>Redmin Note 9 Pro</h3>
        </a>

        <a href="p1.jpg" class="box">
            <div class="image">
                <img src="p1.jpg" alt="">
            </div>
            <h3>Vivo 27</h3>
        </a>

        <a href="p1.jpg" class="box">
            <div class="image">
                <img src="p1.jpg" alt="">
            </div>
            <h3>Products</h3>
        </a>

        <a href="p1.jpg" class="box">
            <div class="image">
                <img src="p1.jpg" alt="">
            </div>
            <h3>Products</h3>
        </a>

        <a href="p1.jpg" class="box">
            <div class="image">
                <img src="p1.jpg" alt="">
            </div>
            <h3>Products</h3>
        </a>

        <a href="p1.jpg" class="box">
            <div class="image">
                <img src="p1.jpg" alt="">
            </div>
            <h3>Products</h3>
        </a>
        
        
        </div>
    </section> -->
    <header>
        <h1>Mobile Shop</h1>
    </header>

    <div class="product-container" id="product-container">
        <!-- Products will be dynamically added here using JavaScript -->
    </div>

    <script>
        // Sample product data (replace with your actual data)
        const products = [
            {
                id: 1,
                title: "Redmi 12",
                description: "Redmi 12 Mobile Phone",
                price: 499.99,
                image: "redmi12.jpg"
            },
            {
                id: 2,
                title: "iPhone",
                description: "Apple iPhone 13 (128GB) Mobile Phone",
                price: 599.99,
                image: "iphone.jpg"
            },
            {
                id: 3,
                title: "Lava",
                description: "Lava Agni 2.5G (Glass Viridian, 8GB RAM, 256GB Storage)",
                price: 449.99,
                image: "lava.jpg"
            },
            {
                id: 4,
                title: "Galaxy",
                description: "Galaxy F14 5G 128GB G.O.A.T.Green",
                price: 699.99,
                image: "galaxyf14.jpg"
            },
            {
                id: 5,
                title: "OnePlus",
                description: "OnePlus Nord CE 3 Lite 5G (8GB RAM, 128GB, Pastel Lime)",
                price: 699.99,
                image: "oneplusnord.jpg"
            },
            {
                id: 6,
                title: "Samsung Galaxy",
                description: "Samsung Galaxy M14 5G(4 GB RAM) 128GB Mobile Phone",
                price: 699.99,
                image: "same.jpg"
                
            },
            {
                id: 7,
                title: "Oneplus",
                description: "OnePlus 11R 5G Mobile Phone",
                price: 699.99,
                image: "m2.jpg"
            },
            {
                id: 8,
                title: "Vivo",
                description: "Artistic Red V29E Mobile Phone",
                price: 699.99,
                image: "m3.jpg"
            },
            
            // Add more products as needed
        ];

        // Function to render products dynamically
        function renderProducts() {
            const container = document.getElementById("product-container");

            products.forEach(product => {
                const productDiv = document.createElement("div");
                productDiv.classList.add("product");

                productDiv.innerHTML = `
                    <img src="${product.image}" alt="${product.title}">
                    <div class="product-title">${product.title}</div>
                    <div class="product-description">${product.description}</div>
                    <div class="product-price">$${product.price.toFixed(2)}</div>
                    <button class="add-to-cart" onclick="addToCart(${product.id})">Add to Cart</button>
                    <button class="btn" style="background-color:#FF90BC;padding:6px;">Buy Now </button>
                `;

                container.appendChild(productDiv);
            });
        }

        // Function to simulate adding to cart (replace with actual cart logic)
        function addToCart(productId) {
            alert(`Added product with ID ${productId} to cart!`);
        }

        // Render products on page load
        window.onload = renderProducts;
    </script>


    <?php @include 'footer.php';?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"></script>
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
    <script>
        lightGallery(document.querySelector('.portfolio .portfolio-container'));
    </script>
</body>
</html>