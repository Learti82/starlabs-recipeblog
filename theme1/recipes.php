<?php
/*
Template Name: Recipes Template
*/

get_header(); // Include the header template
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipes Template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
  .recipe-content {
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
  }

  .recipe-intro-title {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .recipe-intro-description {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
  }

  .recipe-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
  }

  .recipe-item {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .recipe-item-title {
    font-size: 18px;
    margin-bottom: 10px;
  }

  .recipe-item-description {
    font-size: 14px;
    color: #666;
  }

  .recipe-outro {
    background-color: #f9f9f9;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
  }

  .recipe-outro-title {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .recipe-outro-description {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
  }

  .recipe-footer {
    background-color: #f9f9f9;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
  }

  .recipe-footer-text {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
  }

  .recipe-social-icons {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .recipe-social-icons li {
    display: inline-block;
    margin-right: 10px;
  }

  .recipe-social-icons li:last-child {
    margin-right: 0;
  }

  .recipe-social-icons a {
    display: block;
    width: 24px;
    height: 24px;
    line-height: 24px;
    text-align: center;
    color: #666;
    border-radius: 50%;
    background-color: #f9f9f9;
  }

  .recipe-social-icons a:hover {
    background-color: #ddd;
  }
  </style>
</head>

<body>

  <!-- Your existing HTML code here -->

  <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
</body>

</html>


<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <section class="recipes-banner">
      <h1 class="recipes-title">Delicious Recipes</h1>
      <p class="recipes-description">Browse through our collection of mouthwatering recipes.</p>
    </section>

    <div class="row">
      <div class="col">
        <article class="recipe">
          <a href="#" class="recipe-thumbnail">
            <img src="http://recipe-blog.test/wp-content/uploads/2023/06/spaghetti.jpg" alt="Spaghetti Bolognese">
          </a>
          <h2 class="recipe-title"><a
              href="https://www.bbcgoodfood.com/recipes/best-spaghetti-bolognese-recipe">Spaghetti Bolognese</a></h2>
          <div class="recipe-meta">
            <span class="recipe-category">Italian</span>
          </div>
        </article>
      </div>
      <div class="col">
        <article class="recipe">
          <a href="#" class="recipe-thumbnail">
            <img src="http://recipe-blog.test/wp-content/themes/theme1/photos/chicken.jpg" alt="Chicken Tikka Masala">
          </a>
          <h2 class="recipe-title"><a href="https://cafedelites.com/chicken-tikka-masala/">Chicken Tikka Masala</a></h2>
          <div class="recipe-meta">
            <span class="recipe-category">Indian</span>
          </div>
        </article>
      </div>
      <div class="col">
        <article class="recipe">
          <a href="" class="recipe-thumbnail">
            <img src="http://recipe-blog.test/wp-content/themes/theme1/photos/beeftacos.jpg" alt="Beef Tacos">
          </a>
          <h2 class="recipe-title"><a
              href="https://www.bettycrocker.com/recipes/easy-beef-tacos/426c261d-b2eb-4e22-9cba-0066f3335591">Beef
              Tacos</a></h2>
          <div class="recipe-meta">
            <span class="recipe-category">Mexican</span>
          </div>
        </article>
      </div>
      <div class="col">
        <article class="recipe">
          <a href="#" class="recipe-thumbnail">
            <img src="http://recipe-blog.test/wp-content/themes/theme1/photos/salmon.jpg" alt="Salmon Teriyaki">
          </a>
          <h2 class="recipe-title"><a href="https://chefsavvy.com/easy-teriyaki-salmon/">Salmon Teriyaki</a></h2>
          <div class="recipe-meta">
            <span class="recipe-category">Japanese</span>
          </div>
        </article>
      </div>
      <div class="col">
        <article class="recipe">
          <a href="#" class="recipe-thumbnail">
            <img src="http://recipe-blog.test/wp-content/themes/theme1/photos/caprese.jpg" alt="Caprese Salad">
          </a>
          <h2 class="recipe-title"><a
              href="https://www.thepioneerwoman.com/food-cooking/recipes/a10208/caprese-salad/">Caprese Salad</a></h2>
          <div class="recipe-meta">
            <span class="recipe-category">Italian</span>
          </div>
        </article>
      </div>
      <div class="col">
        <article class="recipe">
          <a href="#" class="recipe-thumbnail">
            <img src="http://recipe-blog.test/wp-content/themes/theme1/photos/mango.jpg" alt="Mango Sticky Rice">
          </a>
          <h2 class="recipe-title"><a
              href="https://www.epicurious.com/recipes/food/views/sticky-rice-with-mango-12066">Mango
              Sticky Rice</a></h2>
          <div class="recipe-meta">
            <span class="recipe-category">Thai</span>
          </div>
        </article>
      </div>
    </div>
    </article>
</div>
</div>
</section>

<div class="recipe-content">
  <div class="recipe-intro">
    <h2 class="recipe-intro-title">Welcome to Our Recipe Collection</h2>
    <p class="recipe-intro-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam suscipit
      tortor a ultrices viverra. Donec non justo ipsum. Fusce sed tincidunt nisi.</p>
  </div>

  <!-- Main Recipe Content -->
  <div class="recipe-list">
    <!-- Recipe 1 -->
    <div class="recipe-item">
      <h3 class="recipe-item-title">Recipe 1</h3>
      <p class="recipe-item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <!-- Recipe 2 -->
    <div class="recipe-item">
      <h3 class="recipe-item-title">Recipe 2</h3>
      <p class="recipe-item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <!-- Recipe 3 -->
    <div class="recipe-item">
      <h3 class="recipe-item-title">Recipe 3</h3>
      <p class="recipe-item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <!-- Add more recipe items here -->
  </div>

  <div class="recipe-outro">
    <h2 class="recipe-outro-title">Try Our Recipes Today</h2>
    <p class="recipe-outro-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam suscipit
      tortor a ultrices viverra. Donec non justo ipsum. Fusce sed tincidunt nisi.</p>
  </div>
</div>

<div class="recipe-footer">
  <p class="recipe-footer-text">For more recipe inspiration, follow us on social media:</p>
  <ul class="recipe-social-icons">
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  </ul>
</div>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); // Include the footer template ?>