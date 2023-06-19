<?php
/*
Template Name: Ebook
*/

get_header();
?>

<style>
/* Example CSS styles for the ebook page */
.ebook-banner {
  background-color: #f5f5f5;
  padding: 30px;
  text-align: center;
}

.ebook-title {
  font-size: 32px;
  margin-bottom: 10px;
  color: #333;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.ebook-description {
  font-size: 18px;
  color: #888;
  margin-bottom: 30px;
}

.ebook-download-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.ebook-download-button:hover {
  background-color: #555;
}

.ebook-features-title {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
}

.ebook-features-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.ebook-features-item {
  margin-bottom: 10px;
}

.ebook-testimonials-title {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
}

.ebook-testimonial {
  border-top: 1px solid #ddd;
  padding-top: 20px;
  margin-top: 20px;
}

.ebook-testimonial-text {
  font-style: italic;
  color: #555;
  margin-bottom: 5px;
}

.ebook-testimonial-author {
  font-weight: bold;
  color: #777;
}

.ebook-info {
  margin-top: 40px;
}

.ebook-info-title {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
}

.ebook-info-description {
  font-size: 16px;
  color: #555;
}

/* Additional styling */

.ebook-banner a {
  display: inline-block;
  padding: 12px 24px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  font-size: 20px;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.ebook-banner a:hover {
  background-color: #555;
}

.ebook-features-item:before {
  content: "\2022";
  /* Add a bullet point before each feature */
  color: #333;
  display: inline-block;
  width: 1em;
  margin-left: -1em;
}

.ebook-testimonial {
  border-top: 1px solid #ddd;
  padding-top: 20px;
  margin-top: 20px;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.ebook-testimonial-text {
  color: #555;
  margin-bottom: 5px;
}

.ebook-testimonial-author {
  font-weight: bold;
  color: #777;
}

.ebook-info {
  margin-top: 40px;
}

.ebook-info-title {
  font-size: 24px;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.ebook-info-description {
  font-size: 16px;
  color: #555;
}

.ebook-features-item i {
  color: #37a000;
  font-size: 18px;
  margin-right: 10px;
}
</style>

<div class="ebook-banner">
  <h1 class="ebook-title">Download Our Exclusive Ebook!</h1>
  <p class="ebook-description">Unleash your potential with our one-of-a-kind resource.</p>
  <a href="https://www.ebooks.com/en-bh/" class="ebook-download-button">Get it Now</a>
</div>

<div class="ebook-features">
  <h2 class="ebook-features-title">Key Features</h2>
  <ul class="ebook-features-list">
    <li class="ebook-features-item">In-depth analysis of industry trends</li>
    <li class="ebook-features-item">Expert tips and strategies</li>
    <li class="ebook-features-item">Case studies and success stories</li>
    <li class="ebook-features-item">Practical exercises and worksheets</li>
  </ul>
</div>

<div class="ebook-testimonials">
  <h2 class="ebook-testimonials-title">What Our Readers Say</h2>
  <div class="ebook-testimonial">
    <p class="ebook-testimonial-text">"This ebook transformed my perspective on the subject. Highly recommended!"</p>
    <p class="ebook-testimonial-author">- John Doe</p>
  </div>
  <div class="ebook-testimonial">
    <p class="ebook-testimonial-text">"A must-read for anyone looking to succeed in the industry. Great insights!"</p>
    <p class="ebook-testimonial-author">- Jane Smith</p>
  </div>
  <div class="ebook-testimonial">
    <p class="ebook-testimonial-text">"The practical exercises helped me apply the concepts to my own projects.
      Fantastic resource!"</p>
    <p class="ebook-testimonial-author">- Sarah Johnson</p>
  </div>
  <div class="ebook-testimonial">
    <p class="ebook-testimonial-text">"I've read many ebooks, but this one stands out. Engaging and informative from
      start to finish."</p>
    <p class="ebook-testimonial-author">- Mark Thompson</p>
  </div>
</div>

<div class="ebook-info">
  <h2 class="ebook-info-title">Additional Information</h2>
  <p class="ebook-info-description">Our ebook covers a wide range of topics, including:</p>
  <ul class="ebook-features-list">
    <li class="ebook-features-item">
      <i class="fa fa-check-circle"></i> Industry best practices
    </li>
    <li class="ebook-features-item">
      <i class="fa fa-check-circle"></i> Emerging trends and technologies
    </li>
    <li class="ebook-features-item">
      <i class="fa fa-check-circle"></i> Step-by-step guides
    </li>
    <li class="ebook-features-item">
      <i class="fa fa-check-circle"></i> Real-world examples
    </li>
    <li class="ebook-features-item">
      <i class="fa fa-check-circle"></i> Expert insights and tips
    </li>
    <li class="ebook-features-item">
      <i class="fa fa-check-circle"></i> Practical exercises and worksheets
    </li>
    <li class="ebook-features-item">
      <i class="fa fa-check-circle"></i> And much more!
    </li>
  </ul>
</div>



<?php
get_footer();
?>