<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
          <article <?php post_class(); ?>>
            <header class="entry-header">
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="entry-meta">
                <span class="posted-on">Posted on <?php the_date(); ?></span>
                <span class="byline">by <?php the_author(); ?></span>
              </div>
            </header>
            <div class="entry-content">
              <?php the_excerpt(); ?>
            </div>
          </article>
          <?php
                        }
                    } else {
                        echo 'No posts found.';
                    }
                    wp_reset_postdata();
                    ?>
        </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </main>
</section>

<?php get_footer(); ?>