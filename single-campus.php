<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">

       
        
        <?php  
        
        $relatedTreatments = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'treatment',
          'orderby' => 'title',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'related_treatments',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'            )          )        ));
        if ($relatedTreatments->have_posts()) {
        echo '<h2>Treatments available</h2>';
        while($relatedTreatments->have_posts()) {
          $relatedTreatments->the_post(); ?>
          <li><a href="<?php the_permalink();?>"><?php the_title();?></a>c</li>        <?php }}

           $mapLocation = get_field('map');   ?>
                      <div data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php echo $mapLocation['address']; ?></div>

          
 <?php $relatedCampuses = get_field('programs');
                                if($relatedCampuses){
                                  echo get_the_title() .' is available at these campuses:';
                                  foreach($relatedCampuses as $campus){ ?>
                      <a href="<?php echo get_the_permalink($campus);?>"></a><?php echo get_the_title($campus);?>}}}}>

        
    </main>
<?php get_footer(); ?>

