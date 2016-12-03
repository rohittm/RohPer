<?php
/*Main Template File*/
    get_header();
 ?>
 <div class="container">

             <div class="col-lg-12">

                 <h1><?php echo get_the_title() ?></h1>
                 <main>
                   <?php
                      // Start The Loop
                      if (have_posts()) :
                        while (have_posts()) :
                          the_posts();
                            the_content();
                        endwhile;
                      endif;
                    ?>
                 </main>
             </div>
 </div>
<?php
get_footer();
 ?>
