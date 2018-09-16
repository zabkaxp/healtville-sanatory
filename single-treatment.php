<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">

        <a href="<?php echo get_post_type_archive_link('treatment'); ?>">Go to all treatments</a>
        
        <?php  
          while (have_posts()) {
            the_post(); ?>
          

              <div class="news__events--summary">
                    <div class="events-info">
                      <div class="events-info__title"><?php the_title(); ?></div>
                      <span class="events-info__description"><?php the_content(); ?></span>
                  </div>  
              </div>
              
              
         <?php   }
        
       $relatedProfessors = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'doctor',
          'orderby' => 'title',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'related_treatments',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'))));
        if ($relatedProfessors->have_posts()) {
        echo '<h2> '.get_the_title() . ' Doctors</h2>';
        while($relatedProfessors->have_posts()) {
          $relatedProfessors->the_post(); ?>
        <li><a href="<?php the_permalink();?>"><div><?php the_post_thumbnail('doctorPortrait');?></div><?php the_title();?></a></li> <?php }     }                  wp_reset_postdata(); 


        $homepageEvents = new WP_Query(array(
            'posts_per_page' => -1,
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
            ),
            array(
                'key' => 'related_treatments',
                'compare'=> 'LIKE',
                'value'=> '"' . get_the_ID() . '"'
          ))));
        
      
        
           if ($homepageEvents->have_posts()) {
                echo '<h2>Upcoming ' . get_the_title() . ' Events</h2>'; }
                
                 while($homepageEvents->have_posts()) {
                    $homepageEvents->the_post(); ?>
                     
                 <div class="news__events--summary">
                  
                      <a href="<?php the_permalink(); ?>" class="events-info__title"><?php the_title(); ?></a>
                      
                           
                     </div>
                                                     
                     <?php 
                      wp_reset_postdata();
        $relatedCampuses = get_field('programs');
                                if($relatedCampuses){
                                  echo get_the_title() .' is available at these campuses:';
                                  foreach ($relatedCampuses as 
                                          $campus){ ?>
                      <a href="<?php echo get_the_permalink($campus);?>"><?php echo get_the_title($campus);?></a>
                      <?php }}}
    
                                     ?>                   
            
    </main>
<?php get_footer(); ?>

