<?php get_header(); ?>

<head>
  <link rel="stylesheet" href="/wp-content/themes/theme1/style.css">
  <style>
  .photo {
    position: relative;
    overflow: hidden;
  }

  .photo img {
    width: 100%;
    height: 200px;
    transition: transform 0.3s ease;
  }

  .photo:hover img {
    transform: scale(1.1);
  }

  .photo-description {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px;
    margin: 0;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    font-size: 16px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .photo:hover .photo-description {
    opacity: 1;
  }
  </style>
</head>
<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="recipe-list">
      <?php
      $args = array(
        'post_type' => 'recipe',
        'posts_per_page' => 10,
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          ?>

      <article class="recipe">
        <header class="recipe-header">
          <h2 class="recipe-title"><?php the_title(); ?></h2>
        </header>

        <div class="recipe-content">
          <div class="recipe-details">
            <p class="recipe-cooking-time">Cooking Time: <?php echo get_field('cooking_time'); ?></p>
            <h3 class="recipe-ingredients">Ingredients:</h3>
            <ul class="recipe-ingredients-list">
              <?php if (have_rows('ingredients')) : ?>
              <?php while (have_rows('ingredients')) : the_row(); ?>
              <li><?php the_sub_field('ingredient'); ?></li>
              <?php endwhile; ?>
              <?php else : ?>
              <li>No ingredients listed.</li>
              <?php endif; ?>
            </ul>
            <h3 class="recipe-steps">Steps:</h3>
            <ol class="recipe-steps-list">
              <?php if (have_rows('steps')) : ?>
              <?php while (have_rows('steps')) : the_row(); ?>
              <li><?php the_sub_field('step'); ?></li>
              <?php endwhile; ?>
              <?php else : ?>
              <li>No steps provided.</li>
              <?php endif; ?>
            </ol>
            <?php if (get_field('notes')) : ?>
            <p class="recipe-notes">Notes: <?php echo get_field('notes'); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </article>

      <?php
        }
      } else {
        echo 'No recipes found.';
      }
      wp_reset_postdata();
      ?>
    </div>

    <div class="photos-section">
      <h2 class="photos-title">Photos</h2>
      <div class="photos-container" style="display: flex; flex-wrap: wrap; justify-content: space-between;">

        <div class="photo" style="flex-basis: calc(33.33% - 10px); margin-bottom: 20px;">
          <img src="http://recipe-blog.test/wp-content/uploads/2023/06/pizza.png" alt="Photo 1">
          <p class="photo-description">Pizza</p>
        </div>

        <div class="photo" style="flex-basis: calc(33.33% - 10px); margin-bottom: 20px;">
          <img src="http://recipe-blog.test/wp-content/uploads/2023/06/burger.png" alt="Photo 2">
          <p class="photo-description">Burger</p>
        </div>

        <div class="photo" style="flex-basis: calc(33.33% - 10px); margin-bottom: 20px;">
          <img src="http://recipe-blog.test/wp-content/uploads/2023/06/chickennugget.jpg" alt="Photo 3">
          <p class="photo-description">Chicken Nuggets</p>
        </div>

        <div class="photo" style="flex-basis: calc(33.33% - 10px); margin-bottom: 20px;">
          <img src="http://recipe-blog.test/wp-content/uploads/2023/06/pasta.jpg" alt="Photo 4">
          <p class="photo-description">Pasta</p>
        </div>

        <div class="photo" style="flex-basis: calc(33.33% - 10px); margin-bottom: 20px;">
          <img src="http://recipe-blog.test/wp-content/uploads/2023/06/strawberry.jpg" alt="Photo 5">
          <p class="photo-description">Strawberries</p>
        </div>

        <div class="photo" style="flex-basis: calc(33.33% - 10px); margin-bottom: 20px;">
          <img src="http://recipe-blog.test/wp-content/uploads/2023/06/bibimbap.jpg" alt="Photo 6">
          <p class="photo-description">Bibimbap</p>
        </div>
      </div>
    </div>


    <div class="random-info">
      <h2 class="random-info-title">Random Information</h2>
      <div class="random-info-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec fermentum nunc. Vestibulum ante ipsum primis
          in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla maximus purus in enim porta sollicitudin. Sed
          tincidunt semper fringilla.</p>
        <p>Phasellus mollis dapibus dui, id viverra nunc venenatis vel. Quisque consectetur ullamcorper tortor, et
          ultrices lectus scelerisque eu. Curabitur ullamcorper purus ligula, eu ultrices eros dignissim in.</p>
      </div>
    </div>
  </main>
</section>

<?php get_footer(); ?>