<?php

    /*
    Template Name: bio
    */

get_header();

?>




<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo get_template_directory_uri(); ?>/bio-style.css" rel="stylesheet" type="text/css" />

<body>
<h1 class="title">ΒΙΟΓΡΑΦΙΚΟ</h1>

<!-- <div class="test-active">This should be active</div> -->


<div class="bio-text">
<p>
        <br>
    
       
    
</p>

<br>


<!-- Carousel Slideshow Container -->
<div class="carousel-container">
  
  <div class="carousel">
    
    <div class="carousel-slide ">
      <img src="<?php echo get_template_directory_uri(); ?>/images/adult.png" alt="Slide 1" loading="lazy"
        onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('υπηρεσιες'))); ?>';">
    </div>
    
    <div class="carousel-slide">
      <img src="<?php echo get_template_directory_uri(); ?>/images/internet.png" alt="Slide 2" loading="lazy"
        onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('υπηρεσιες'))); ?>';">
    </div>
    
    <div class="carousel-slide">
      <img src="<?php echo get_template_directory_uri(); ?>/images/disorder.png" alt="Slide 3" loading="lazy"
        onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('υπηρεσιες'))); ?>';">
    </div>
  </div>

  <!-- Navigation Buttons -->
  <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
  <button class="next" onclick="changeSlide(1)">&#10095;</button>

</div>




</div>
</body>


<script>
/*
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');
const carousel = document.querySelector('.carousel');

function updateCarousel() {
  const offset = -currentSlideIndex * 100; // Calculate offset based on the active slide
  carousel.style.transform = `translateX(${offset}%)`; // Move the carousel
}

function changeSlide(direction) {
  currentSlideIndex = (currentSlideIndex + direction + slides.length) % slides.length; // Update index
  updateCarousel();
}

// Initialize the carousel
updateCarousel();
*/

</script> 





<?php get_footer();
?>