<?php
/*
Template Name: Shop
*/

get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <style>
  /* Example CSS styles for the shop page */
  .shop-banner {
    background-color: #f5f5f5;
    padding: 30px;
    text-align: center;
  }

  .shop-title {
    font-size: 32px;
    margin-bottom: 10px;
  }

  .shop-description {
    font-size: 18px;
    color: #888;
  }

  .product-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 30px;
    margin-top: 30px;
  }

  .product {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    text-align: center;
  }

  .product-image {
    margin-bottom: 10px;
  }

  .product-title {
    font-size: 20px;
    margin-bottom: 5px;
  }

  .product-price {
    color: #888;
    margin-bottom: 10px;
  }

  .product-description {
    font-size: 14px;
    margin-bottom: 15px;
  }

  .product-button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .product-button:hover {
    background-color: #555;
  }
  </style>
</head>

<body <?php body_class(); ?>>
  <header>
    <h1 class="shop-title">Welcome to Our Shop!</h1>
    <p class="shop-description">Explore our amazing products and find what you need.</p>
  </header>

  <div class="product-container">
    <div class="product">
      <img class="product-image" src="http://recipe-blog.test/wp-content/uploads/2023/06/recipe3-1.jpg" alt="Product 1">
      <h2 class="product-title">Product 1</h2>
      <p class="product-price">$19.99</p>
      <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <button class="product-button">Add to Cart</button>
    </div>
    <div class="product">
      <img class="product-image" src="http://recipe-blog.test/wp-content/uploads/2023/06/recipe2-1.jpg" alt="Product 2">
      <h2 class="product-title">Product 2</h2>
      <p class="product-price">$24.99</p>
      <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <button class="product-button">Add to Cart</button>
    </div>
    <div class="product">
      <img class="product-image" src="http://recipe-blog.test/wp-content/uploads/2023/06/recipe1-1.jpg" alt="Product 3">
      <h2 class="product-title">Product 3</h2>
      <p class="product-price">$29.99</p>
      <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <button class="product-button">Add to Cart</button>
    </div>
    <!-- Add more product divs as needed -->
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.product-button').click(function() {
      // Get the product details
      var productContainer = $(this).closest('.product');
      var productName = productContainer.find('.product-title').text();
      var productPrice = productContainer.find('.product-price').text();

      // Perform your desired action here, such as adding the product to the cart
      // You can use AJAX to send the product details to the server or implement your own logic

      // Example: Display an alert with the product details
      alert('Product added to cart:\nName: ' + productName + '\nPrice: ' + productPrice);
    });
  });
  </script>

  <!-- Rest of your shop.php file content goes here -->

  <?php wp_footer(); ?>
</body>

</html>

<?php get_footer(); ?>