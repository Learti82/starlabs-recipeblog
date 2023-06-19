<?php
/**
 * Template Name: about
 */

get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-...." crossorigin="anonymous">

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <?php wp_head(); ?>
  <style>
  /* Example CSS styles for the about page */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  .site-header {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
  }

  .site-title {
    font-size: 28px;
    margin-bottom: 10px;
  }

  .site-description {
    color: #888;
    font-size: 16px;
  }

  .about-banner {
    background-color: #f5f5f5;
    padding: 30px;
    text-align: center;
  }

  .about-title {
    font-size: 48px;
    margin-bottom: 20px;
  }

  .about-description {
    font-size: 18px;
    color: #888;
    margin-bottom: 30px;
  }

  .about-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
  }

  .about-info-item {
    flex-basis: 30%;
  }

  .about-info-title {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .about-info-text {
    font-size: 16px;
    color: #555;
  }

  .about-highlights {
    background-color: #f9f9f9;
    padding: 30px;
    text-align: center;
  }

  .highlight-title {
    font-size: 32px;
    margin-bottom: 20px;
  }

  .highlight-item {
    display: inline-block;
    margin: 0 10px;
    font-size: 18px;
    color: #555;
  }

  .about-footer {
    background-color: #333;
    padding: 20px;
    text-align: center;
  }

  .footer-text {
    color: #fff;
    font-size: 16px;
  }

  .about-banner img {
    width: 200px;
    /* Adjust the width of the image */
    margin-bottom: 10px;
    /* Add some margin below the image */
  }
  </style>
</head>


<div class="about-banner">
  <h1 class="about-title">About Our Company</h1>
  <img src="http://recipe-blog.test/wp-content/uploads/2023/06/company.jpg" alt="Company Photo">
  <p class="about-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac eros id leo congue
    laoreet.</p>
</div>

<div class="about-info">
  <div class="about-info-item">
    <h2 class="about-info-title">Our Mission</h2>
    <p class="about-info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac eros id leo congue
      laoreet.</p>
  </div>
  <div class="about-info-item">
    <h2 class="about-info-title">Our Vision</h2>
    <p class="about-info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac eros id leo congue
      laoreet.</p>
  </div>
  <div class="about-info-item">
    <h2 class="about-info-title">Our Values</h2>
    <p class="about-info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac eros id leo congue
      laoreet.</p>
  </div>
</div>

<div class="about-highlights">
  <h2 class="highlight-title">Why Choose Us?</h2>
  <p class="highlight-item">Lorem ipsum dolor sit amet</p>
  <p class="highlight-item">Consectetur adipiscing elit</p>
  <p class="highlight-item">Vivamus ac eros id leo congue</p>
</div>

<div class="recipe-footer">
  <p class="recipe-footer-text">For more about us, follow us on social media:</p>
  <ul class="recipe-social-icons">
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  </ul>
</div>

<footer class="about-footer">
  <p class="footer-text">© <?php echo date('Y'); ?> Our Company. All rights reserved.</p>
</footer>

<?php wp_footer(); ?>
</body>

</html>