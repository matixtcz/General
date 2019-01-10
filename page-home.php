<?php
/**
Template Name: Strona główna	
 */

get_header();
?>

	 <!-- Portfolio -->

   <div class="container text-center" id="gallery">

      <?php $loop = new WP_Query( array( 'post_type' => 'kafelki', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

         <?php 
          $zdjecie_w_fomracie    = get_field('zdjecie_w_fomracie');
          $link_do_reszty_zdjec  = get_field('link_do_reszty_zdjec');
          ?>

            <div class="img">
               <a href="gallery.html"><img class="fadeing" src="<?php echo $zdjecie_w_fomracie[url]; ?>" alt="<?php echo $zdjecie_w_fomracie[alt]; ?>">
               <span class="centered"><h3><?php the_title();?></h3></span></a>
            </div>


      <?php endwhile; ?>
   		
   		
   	</div>

<?php
get_footer();
