<?php
    /*
    Template Name: Frontpage
    */

get_header();

?>
<!-- <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="<?php echo get_template_directory_uri(); ?>/home-style.css" rel="stylesheet" type="text/css" />



</head> -->


<body>



<!-- <div class="background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg2.jpg');"> -->

<div id="home-grid">


    <div class="col" id="foto">
        <figure >
            <img  src="<?php  echo get_template_directory_uri(); ?>/images/foto.png">
        </figure>
    </div>


    <div  class="col" id="home-text">

         
           <br><h1> Καλώς ήρθατε </h1></br>


         

           <br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
           ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            
           <br></br>
           <br></br>
        
    
        <button id="button" onclick="location.href='<?php echo esc_url(get_permalink(get_page_by_path('βιογραφικο'))); ?>'" type="button">Περισσότερα</button>


        <noscript>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('βιογραφικο'))); ?>" id="button">Περισσότερα</a>
        </noscript>


    </div>





</div>


<!-- </div>    -->
<!-- background div -->

</body>






<?php get_footer();?>