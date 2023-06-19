<?php


// Enqueue theme stylesheets and scripts
function theme_enqueue_scripts() {
  wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function register_recipe_post_type() {
  $labels = array(
      'name' => 'Recipes',
      'singular_name' => 'Recipe',
  );

  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
  );

  register_post_type('recipe', $args);
}
add_action('init', 'register_recipe_post_type');


// Register navigation menus
function theme_register_menus() {
  register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'
  ));
}
add_action('after_setup_theme', 'theme_register_menus');

function custom_menu_buttons() {
  echo '<div class="menu-buttons">';
  echo '<a href="#" class="menu-button">Blog</a>';
  echo '<a href="#" class="menu-button">Recipes</a>';
  echo '<a href="#" class="menu-button">E-book</a>';
  echo '<a href="#" class="menu-button">Shop</a>';
  echo '<a href="#" class="menu-button">About</a>';
  echo '<a href="#" class="menu-button">Contact</a>';
  echo '</div>';
}

// Add an action to handle the contact form submission
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');

function handle_contact_form_submission() {
  // Get the form data
  $name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
  $message = sanitize_textarea_field($_POST['message']);

  // Prepare the email content
  $to = 'your-email@example.com'; // Replace with your email address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = array('Content-Type: text/html; charset=UTF-8');

  // Send the email
  wp_mail($to, $subject, $body, $headers);

  // Redirect back to the contact page
  wp_redirect(get_permalink(get_page_by_path('contact')));
  exit;
}


?>