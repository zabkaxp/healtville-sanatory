<?php get_header(); ?>

     <img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background.jpg" class="header__background" height="100">
   </header>
      

   <main>
    <img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/retired-couple.png" alt="retired couple" class="couple-img">

      <section class="news">
         
          <article class="news__events"><span class="heading-one">Upcoming Events</span>
             <?php
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'date',
            'orderby'=> 'meta_value_num',
            'order' =>'ASC',
            'meta_query' => array(
              array(
                'key' => 'date',
                'compare'=> '>=',
                'value'=> date('Ymd'),
                'type'=> 'numeric'
            )  
          )));

          while ($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); ?>
          

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
              
              <div class="btn--box">
                <a href="" class="btn btn--green">View All Events</a>
              </div>
         </article>
                  <article class="news__blog"><span class="heading-one">From Our Blogs</span>
             
         <?php 
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));
          while($homepagePosts->have_posts()){
            $homepagePosts->the_post();?>

                    <div class="news__events--summary">
                  <a href="<?php the_permalink(); ?>" class="date date--blog"><span><?php the_time('M'); ?></span><span class="bold"><br><?php the_time('d'); ?></span></a>
                  <div class="events-info">
                      <a href="<?php the_permalink(); ?>" class="events-info__title"><?php the_title(); ?></a>
                      <span class="events-info__description"><?php echo wp_trim_words(get_the_content(), 18);?><a href="<?php the_permalink(); ?>">Read more &rarr;</a></span>
                  </div>  
              </div>
            <?php } wp_reset_postdata();        ?>  
             <div class="btn--box">
                <a href="<?php echo site_url('blog');?> " class="btn btn--grey">View All Blog Posts</a>
              </div>
         </article>
      </section>
      <section>
         <div class="main-slider">
              <div><img class="slider-img" src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/slider1.jpg"></div>   
              <div><img class="slider-img" src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/slider2.jpg"></div>   
              <div><img class="slider-img" src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/slider3.jpg"></div>
             
              
          </div>
      </section>
   </main>
<?php get_footer(); ?>