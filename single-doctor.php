<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">
        
       <?php  while (have_posts()) {
            the_post(); ?>
          

              <div class="news__events--summary">
                  
                     <a href="<?php the_permalink(); ?>" class="events-info__title"><?php the_title(); ?></a>
                       <?php the_post_thumbnail('doctorPortrait');?>
                      <span class="events-info__description"><?php if (has_excerpt()) {
                            echo get_the_excerpt();
                            } else {
                            echo wp_trim_words(get_the_content(), 18);} }?>
                            <a href="<?php the_permalink(); ?>">  Read more &rarr;</a></span>
                    
              </div>
              
              <?php        
        
              $relatedTreatments = get_field('related_treatments');
                if($relatedTreatments){
                    foreach($relatedTreatments as $treatment){ ?>
        <li><a href="<?php echo get_the_permalink($treatment);?>"><?php echo get_the_title($treatment); ?></a></li>
     <?php  } }   ?>
             
        
    </main>
<?php get_footer(); ?>


