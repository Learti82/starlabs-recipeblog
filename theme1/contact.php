<?php
/*
Template Name: Contact Template
*/

get_header(); // Include the header template
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <style>
  /* Example CSS styles for the contact form */
  .contact-banner {
    background-color: #f5f5f5;
    padding: 30px;
    text-align: center;
  }

  .contact-title {
    font-size: 32px;
    margin-bottom: 10px;
  }

  .contact-description {
    font-size: 18px;
    color: #888;
  }

  .contact-details {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 30px;
  }

  .contact-info {
    flex-basis: 45%;
  }

  .contact-info-title {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .contact-info-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .contact-info-label {
    font-weight: bold;
  }

  .contact-form {
    flex-basis: 50%;
  }

  .contact-form-title {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .submit-button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .submit-button:hover {
    background-color: #555;
  }

  .form-group input[type="submit"] {
    background-color: #337ab7;
    /* Blue background color */
    color: #fff;
    /* Text color */
    padding: 10px 20px;
    /* Padding around the button */
    font-size: 16px;
    /* Font size */
    border: none;
    /* Remove border */
    border-radius: 4px;
    /* Rounded corners */
    cursor: pointer;
    /* Change cursor to pointer on hover */
  }

  .form-group input[type="submit"]:hover {
    background-color: #23527c;
    /* Darker blue background color on hover */
  }
  </style>
</head>

<body <?php body_class(); ?>>
  <!-- Rest of your contact.php file content goes here -->
</body>

</html>


<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" value="<?php echo esc_attr(get_field('name')); ?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" value="<?php echo esc_attr(get_field('email')); ?>">
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea name="message" id="message"><?php echo esc_textarea(get_field('message')); ?></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </main>
</section>

<?php get_footer(); // Include the footer template ?>