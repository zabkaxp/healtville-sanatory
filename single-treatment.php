<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">

        <a href="<?php echo get_post_type_archive_link('treatment'); ?>">Go to all treatments</a>
       <?php  while (have_posts()) {
            the_post(); ?>
          

              <div class="news__events--summary">
                    <div class="events-info">
                      <div class="events-info__title"><?php the_title(); ?></div>
                      <span class="events-info__description"><?php the_content(); ?></span>
                  </div>  
              </div>
             
              <?php } wp_reset_postdata();        ?>  
              
        
        
    </main>
<?php get_footer(); ?>

