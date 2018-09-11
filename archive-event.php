<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">

        <div><a href="<?php echo site_url('/past-events'); ?>">See past Events</a></div>
        
       <?php  while (have_posts()) {
            the_post(); ?>
          

              <div class="news__events--summary">
                  <a href="<?php the_permalink(); ?>" class="date date--events"><span><?php
                      $eventDate = new DateTime(get_field('date')); 
                      echo $eventDate->format('M')?>
              </span><span class="bold"><br><?php echo $eventDate->format('d'); ?></span></a>
                  <div class="events-info">
                      <a href="<?php the_permalink(); ?>" class="events-info__title"><?php the_title(); ?></a>
                      <span class="events-info__description"><?php if (has_excerpt()) {
                            echo get_the_excerpt();
                            } else {
                            echo wp_trim_words(get_the_content(), 18);} ?>
                            <a href="<?php the_permalink(); ?>">  Read more &rarr;</a></span>
                  </div>  
              </div>
             
              <?php } wp_reset_postdata();        ?>  
              
        
        
    </main>
<?php get_footer(); ?>


